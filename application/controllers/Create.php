<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends Core {
	private $level;
	function __construct()
	{
		parent::__construct();
		$this->level = $this->session->userdata('level');
	}

	public function Pribadi()
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$this->renderpage('surat/pribadi');
	}

	public function cetak_Indented($id)
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}

		$data['surat'] = $this->m_surat->getSurat($id);
		$this->renderpage('surat/cetak_indented', $data);
	}

	public function cetak_Hanging($id)
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}

		$data['surat'] = $this->m_surat->getSurat($id);
		$this->renderpage('surat/cetak_hanging', $data);
	}

	public function cetak_Full($id)
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}

		$data['surat'] = $this->m_surat->getSurat($id);
		$this->renderpage('surat/cetak_full_block', $data);
	}

	public function cetak_Block($id)
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}

		$data['surat'] = $this->m_surat->getSurat($id);
		$this->renderpage('surat/cetak_block', $data);
	}

	public function cetak_Semi($id)
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}

		$data['surat'] = $this->m_surat->getSurat($id);
		$this->renderpage('surat/cetak_semiblock', $data);
	}


	public function cetak_Pribadi($id)
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}

		$data['surat'] = $this->m_surat->getSurat($id);
		$this->load->view('surat/cetak_pribadi', $data);
	}

	public function Dinas($tipe)
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$data['tipe'] = $tipe;
		$this->renderpage('surat/dinas', $data);
	}

	public function Niaga($tipe)
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$data['tipe'] = $tipe;
		$this->renderpage('surat/niaga', $data);
	}
	public function add_surat_pribadi()
	{
		$tempat = $this->input->post('tempat');
		$tanggal = $this->input->post('tanggal');
		$nama_tujuan = $this->input->post('nama_tujuan');
		$kota_tujuan = $this->input->post('kota_tujuan');
		$salam_pembuka = $this->input->post('salam_pembuka');
		$salam_penutup = $this->input->post('salam_penutup');
		$nama = $this->input->post('nama');
		$id_isi = $this->m_surat->getCountSurat("tb_detail_surat");
		$id_isi = $id_isi + 1;				
		$isi    = $_POST["isi"];
		$isi    = json_decode("$isi", true);

		$jenis_isi    = $_POST["jenis_isi"];
		$jenis_isi    = json_decode("$jenis_isi", true);
		$data = array(
			'tempat' => $tempat,
			'nama' => $nama,
			'tgl' => $tanggal,
			'nama_tujuan' => $nama_tujuan,
			'kota_tujuan' => $kota_tujuan,
			'salam_pembuka' => $salam_pembuka,
			'salam_penutup' => $salam_penutup,
			'username' => $this->session->userdata('username'),
			'id_isi' => $id_isi,
			'id' => "pribadi"
		);
		$this->m_surat->add_surata('tb_detail_surat', $data);

		
		for ($i=0; $i < count($isi) ; $i++) { 
			$data1 = array(
				'id_isi' => $id_isi,
				'isi' => $isi[$i],
				'jenis' => $jenis_isi[$i],
			);
			$this->m_surat->add_surata('tb_isi', $data1);
		}
		$result = $this->m_surat->getMax();
		echo json_encode($result);
	}

	public function add_surat_dinas()
	{
		$nama_instansi = $this->input->post('kop_surat');
		$jenis_instansi = $this->input->post('jenis_instansi');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
		$nomor = $this->input->post('nomor');
		$lampiran = $this->input->post('lampiran');
		$perihal = $this->input->post('perihal');

		$nama_tujuan = $this->input->post('nama_tujuan');
		$alamat_tujuan = $this->input->post('alamat_tujuan');
		$kota = $this->input->post('kota');
		$kota_tujuan = $this->input->post('kota_tujuan');

		$tanggal = $this->input->post('tanggal');
		$salam_pembuka = $this->input->post('salam_pembuka');
		$salam_penutup = $this->input->post('salam_penutup');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		if (!empty($this->m_surat->getCountSurat("tb_detail_surat"))) {
			$id_isi = $this->m_surat->getCountSurat("tb_detail_surat");
			$id_isi = $id_isi + 1;				

		}else {
			$id_isi = 1;	
		}
		

		$id = $this->m_surat->getMax();
		$id = $id + 1;


		if($this->upload_images($id, './images/logo_surat', 'imageUpload')){
			$file_ext = explode('.', $_FILES['imageUpload']['name']);
			$file_ext = strtolower(end($file_ext));

			$data = array(
				'nama_instansi' => $nama_instansi,
				'jenis_instansi' => $jenis_instansi,
				'alamat' => $alamat,
				'telp' => $telp,
				'kota' => $kota,
				'nomor' => $nomor,
				'lampiran' => $lampiran,
				'perihal' => $perihal,
				'alamat_tujuan' => $alamat_tujuan,
				'nama_tujuan' => $nama_tujuan,
				'kota_tujuan' => $kota_tujuan,
				'jabatan' => $jabatan,
				'logo' => $id.".".$file_ext,
				'nama' => $nama,
				'tgl' => $tanggal,
				'salam_pembuka' => $salam_pembuka,
				'salam_penutup' => $salam_penutup,
				'username' => $this->session->userdata('username'),
				'id_isi' => $id_isi,
				'id' => 'dinas'
			);
		}else {
			$data = array(
				'nama_instansi' => $nama_instansi,
				'jenis_instansi' => $jenis_instansi,
				'alamat' => $alamat,
				'telp' => $telp,
				'nomor' => $nomor,
				'kota' => $kota,
				'lampiran' => $lampiran,
				'perihal' => $perihal,
				'alamat_tujuan' => $alamat_tujuan,
				'nama_tujuan' => $nama_tujuan,
				'kota_tujuan' => $kota_tujuan,
				'jabatan' => $jabatan,
				'logo' => $_FILES['imageUpload']['name'],
				'nama' => $nama,
				'tgl' => $tanggal,
				'salam_pembuka' => $salam_pembuka,
				'salam_penutup' => $salam_penutup,
				'username' => $this->session->userdata('username'),
				'id_isi' => $id_isi,
				'id' => 'dinas'
			);
		}


		$this->m_surat->add_surata('tb_detail_surat', $data);

		echo json_encode($id_isi);

	}
	public function add_surat_niaga()
	{
		$nama_instansi = $this->input->post('kop_surat');
		$jenis_instansi = $this->input->post('jenis_instansi');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
		$nomor = $this->input->post('nomor');
		$lampiran = $this->input->post('lampiran');
		$perihal = $this->input->post('perihal');

		$nama_tujuan = $this->input->post('nama_tujuan');
		$alamat_tujuan = $this->input->post('alamat_tujuan');
		$kota = $this->input->post('kota');
		$kota_tujuan = $this->input->post('kota_tujuan');

		$tanggal = $this->input->post('tanggal');
		$salam_pembuka = $this->input->post('salam_pembuka');
		$salam_penutup = $this->input->post('salam_penutup');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		if (!empty($this->m_surat->getCountSurat("tb_detail_surat"))) {
			$id_isi = $this->m_surat->getCountSurat("tb_detail_surat");
			$id_isi = $id_isi + 1;				

		}else {
			$id_isi = 1;	
		}

		$id = $this->m_surat->getMax();
		$id = $id + 1;


		if($this->upload_images($id, './images/logo_surat', 'imageUpload')){
			$file_ext = explode('.', $_FILES['imageUpload']['name']);
			$file_ext = strtolower(end($file_ext));

			$data = array(
				'nama_instansi' => $nama_instansi,
				'jenis_instansi' => $jenis_instansi,
				'alamat' => $alamat,
				'telp' => $telp,
				'kota' => $kota,
				'nomor' => $nomor,
				'lampiran' => $lampiran,
				'perihal' => $perihal,
				'alamat_tujuan' => $alamat_tujuan,
				'nama_tujuan' => $nama_tujuan,
				'kota_tujuan' => $kota_tujuan,
				'jabatan' => $jabatan,
				'logo' => $id.".".$file_ext,
				'nama' => $nama,
				'tgl' => $tanggal,
				'salam_pembuka' => $salam_pembuka,
				'salam_penutup' => $salam_penutup,
				'username' => $this->session->userdata('username'),
				'id_isi' => $id_isi,
				'id' => 'niaga'
			);
		}else {
			$data = array(
				'nama_instansi' => $nama_instansi,
				'jenis_instansi' => $jenis_instansi,
				'alamat' => $alamat,
				'telp' => $telp,
				'nomor' => $nomor,
				'kota' => $kota,
				'lampiran' => $lampiran,
				'perihal' => $perihal,
				'alamat_tujuan' => $alamat_tujuan,
				'nama_tujuan' => $nama_tujuan,
				'kota_tujuan' => $kota_tujuan,
				'jabatan' => $jabatan,
				'logo' => $_FILES['imageUpload']['name'],
				'nama' => $nama,
				'tgl' => $tanggal,
				'salam_pembuka' => $salam_pembuka,
				'salam_penutup' => $salam_penutup,
				'username' => $this->session->userdata('username'),
				'id_isi' => $id_isi,
				'id' => 'niaga'
			);
		}


		$this->m_surat->add_surata('tb_detail_surat', $data);

		echo json_encode($id_isi);

	}
	public function edit_surat_dinas()
	{
		$id_detail = $this->input->post('id_detail');
		$nama_instansi = $this->input->post('kop_surat');
		$jenis_instansi = $this->input->post('jenis_instansi');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
		$nomor = $this->input->post('nomor');
		$lampiran = $this->input->post('lampiran');
		$perihal = $this->input->post('perihal');

		$nama_tujuan = $this->input->post('nama_tujuan');
		$alamat_tujuan = $this->input->post('alamat_tujuan');
		$kota_tujuan = $this->input->post('kota_tujuan');

		$tanggal = $this->input->post('tanggal');
		$salam_pembuka = $this->input->post('salam_pembuka');
		$salam_penutup = $this->input->post('salam_penutup');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');

		$id_isi = $this->m_surat->getIsi($id_detail);
		$id_isi = $id_isi + 1;

		$id = $this->m_surat->getMax();
		$id = $id + 1;

		if (!empty($_FILES['imageUpload']['name'])) {
			if($this->upload_images($id, './images/logo_surat', 'imageUpload')){
				$file_ext = explode('.', $_FILES['imageUpload']['name']);
				$file_ext = strtolower(end($file_ext));

				$data = array(
					'nama_instansi' => $nama_instansi,
					'jenis_instansi' => $jenis_instansi,
					'alamat' => $alamat,
					'telp' => $telp,
					'nomor' => $nomor,
					'lampiran' => $lampiran,
					'perihal' => $perihal,
					'alamat_tujuan' => $alamat_tujuan,
					'nama_tujuan' => $nama_tujuan,
					'kota_tujuan' => $kota_tujuan,
					'jabatan' => $jabatan,
					'logo' => $id.".".$file_ext,
					'nama' => $nama,
					'tgl' => $tanggal,
					'salam_pembuka' => $salam_pembuka,
					'salam_penutup' => $salam_penutup,
					'username' => $this->session->userdata('username'),
					'id_isi' => $id_isi
				);
			}
		}else {
			$data = array(
				'nama_instansi' => $nama_instansi,
				'jenis_instansi' => $jenis_instansi,
				'alamat' => $alamat,
				'telp' => $telp,
				'nomor' => $nomor,
				'lampiran' => $lampiran,
				'perihal' => $perihal,
				'alamat_tujuan' => $alamat_tujuan,
				'nama_tujuan' => $nama_tujuan,
				'kota_tujuan' => $kota_tujuan,
				'jabatan' => $jabatan,
				'nama' => $nama,
				'tgl' => $tanggal,
				'salam_pembuka' => $salam_pembuka,
				'salam_penutup' => $salam_penutup,
				'username' => $this->session->userdata('username'),
				'id_isi' => $id_isi
			);
		}


		$this->m_surat->edit_surata('tb_detail_surat', $data, $id_detail);
		$where = array('id_isi' => $id_isi);
		$this->m_surat->Surat_delete($where,'tb_isi');		
		echo json_encode($id_isi);

	}
	public function isi($id)
	{
		$id_isi = $id;				
		$isi    = $_POST["isi"];
		$isi    = json_decode("$isi", true);

		$jenis_isi    = $_POST["jenis_isi"];
		$jenis_isi    = json_decode("$jenis_isi", true);

		
		for ($i=0; $i < count($isi) ; $i++) { 
			$data1 = array(
				'id_isi' => $id_isi,
				'isi' => $isi[$i],
				'jenis' => $jenis_isi[$i],
			);
			$this->m_surat->add_surata('tb_isi', $data1);
		}
		$result = $this->m_surat->getMax();
		echo json_encode($result);
	}

}
