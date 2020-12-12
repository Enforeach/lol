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
	public function cetak_Pribadi()
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$this->load->view('surat/cetak_Pribadi');
	}

	public function Dinas()
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$this->renderpage('surat/dinas');
	}

	public function Niaga()
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$this->renderpage('surat/niaga');
	}
	public function add_surat_pribadi()
	{
		$tempat = $this->input->post('tempat');
		$tanggal = $this->input->post('tanggal');
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
			'salam_pembuka' => $salam_pembuka,
			'salam_penutup' => $salam_penutup,
			'username' => $this->session->userdata('username'),
			'id_isi' => $id_isi,
			'id' => 1
		);
		if ($this->m_surat->add_surata('tb_detail_surat', $data)) {
			$result = '';
		}

		for ($i=0; $i < count($isi) ; $i++) { 
			$data1 = array(
				'id_isi' => $id_isi,
				'isi' => $isi[$i],
				'jenis' => $jenis_isi[$i],
			);
			$this->m_surat->add_surata('tb_isi', $data1);
		}

		echo json_encode($result);
	}
}
