<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends Core {
	private $level;
	function __construct()
	{
		parent::__construct();
		$this->level = $this->session->userdata('level');
	}

	public function index()
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$data['allAnggota'] = $this->m_anggota->getAllAnggota();
		$this->renderpage('anggota/show', $data);
	}

	public function anggota_datatable()
	{
		$anggota = $this->m_anggota->datatableAnggota();
		echo json_encode($anggota);
		die();
	}
	public function getKota()
	{

		$id_provinces = $this->input->post('id_provinces');
		$kota = $this->m_anggota->getKota($id_provinces); 
		echo "<option value=''>- PILIH -</option>";
		foreach ($kota as $key) {
			echo '<option value="'.$key->ID.'">'.$key->NAMA.'</option>';
		}
	}
	public function create()
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$this->form_validation->set_rules('REG_COM', 'REG COM', 'required');
		$this->form_validation->set_rules('NAMA_LENGKAP', 'Nama', 'required');

		$data['reg'] = $this->m_anggota->buat_kode();
		$data['status_kawin'] = $this->m_operator->getAll('dsosys_status_kawin');

		$data['pendidikan'] = $this->m_operator->getAll('dsosys_pendidikan');
		$data['pendidikan_kk'] = $this->m_operator->getAll('dsosys_pendidikan_kk');
		$data['pekerjaan'] = $this->m_operator->getAll('dsosys_pekerjaan');
		$data['provinsi'] = $this->m_operator->getAll('dsosys_provinsi');
		$data['status_anggota'] = $this->m_operator->getAll('dsosys_status_agt');
		$data['kewarganegaraan'] = $this->m_operator->getAll('dsosys_status_kewarganegaraan');
		$data['goldar'] = $this->m_operator->getAll('dsosys_gol_darah');
		$data['agama'] = $this->m_operator->getAll('dsosys_agama');
		$data['jkel'] = $this->m_operator->getAll('dsosys_sex');
		$data['kplor'] = $this->m_operator->getAll('dsosys_kpl_organisasi');
		$data['kplang'] = $this->m_operator->getAll('dsosys_kpl_anggota');
		$data['edit'] = false;

		if($this->form_validation->run() == false){
			$data['alert'] = '';
		}else{
			if($this->upload_images($this->input->post('REG_COM'), './images/anggota', 'FOTO')){
				$file_ext = explode('.', $_FILES['FOTO']['name']);
				$file_ext = strtolower(end($file_ext));
				}else {
					$file_ext = 'kosong';
				}
				if ($this->upload_images($this->input->post('REG_COM'), './images/anggota/ktp', 'FOTO_KTP')) {
					$file_ktp = explode('.', $_FILES['FOTO_KTP']['name']);
					$file_ktp = strtolower(end($file_ktp));
				}else {
					$file_ktp = 'aa';
				}

					$this->m_anggota->addAnggotaDetail();
					$this->m_anggota->addAnggota($file_ext, $file_ktp);
					$data['alert'] = 'success'; // sweet alert
			}
			$this->renderpage('anggota/create', $data);
		}

		public function anggota_delete($REG_COM)
		{
			if(!$this->isLogin){
				redirect('Auth');
				die();
			}
			$this->m_anggota->deleteAnggota($REG_COM);
		}

		public function detail($id)
		{
			if(!$this->isLogin){
				redirect('Auth');
				die();
			}
			$data['Anggota'] = $this->m_anggota->getAnggota($id);
			$data['Njupuk'] = $this->m_anggota->getWAnggota();
			$data['Danggota'] = $this->m_anggota->getDAnggota($id);
			$this->renderpage('anggota/detail', $data);
		}

		public function editAnggota($REG_COM)
		{
			if(!$this->isLogin){
				redirect('Auth');
				die();
			}
			$this->form_validation->set_rules('REG_COM', 'REG COM', 'required');
			$this->form_validation->set_rules('NAMA_LENGKAP', 'NAMA LENGKAP', 'required');

			$data['Anggota'] = $this->m_anggota->getAnggota($REG_COM);
			$data['Njupuk'] = $this->m_anggota->getWAnggota($REG_COM);
			$data['Danggota'] = $this->m_anggota->getDAnggota($REG_COM);
			$data['status_kawin'] = $this->m_operator->getAll('dsosys_status_kawin');
			$data['pendidikan'] = $this->m_operator->getAll('dsosys_pendidikan');
			$data['pendidikan_kk'] = $this->m_operator->getAll('dsosys_pendidikan_kk');
			$data['pekerjaan'] = $this->m_operator->getAll('dsosys_pekerjaan');
			$data['provinsi'] = $this->m_operator->getAll('dsosys_provinsi');
			$data['status_anggota'] = $this->m_operator->getAll('dsosys_status_agt');
			$data['kewarganegaraan'] = $this->m_operator->getAll('dsosys_status_kewarganegaraan');
			$data['goldar'] = $this->m_operator->getAll('dsosys_gol_darah');
			$data['agama'] = $this->m_operator->getAll('dsosys_agama');
			$data['jkel'] = $this->m_operator->getAll('dsosys_sex');
			$data['kplor'] = $this->m_operator->getAll('dsosys_kpl_organisasi');
			$data['kplang'] = $this->m_operator->getAll('dsosys_kpl_anggota');
			$data['edit'] = true;

			if($this->form_validation->run() == false){
				$data['alert'] = '';
			}else{
				if ($_FILES['FOTO']['name'] != null) {
					$foto = $this->m_anggota->getFoto($REG_COM, 'FOTO');
					if (file_exists("./images/anggota/".$foto)) {
							unlink("./images/anggota/".$foto);
						}
					if($this->upload_images($this->input->post('REG_COM'), './images/anggota', 'FOTO')){
						$file_ext = explode('.', $_FILES['FOTO']['name']);
						$file_ext = strtolower(end($file_ext));
					}else {
						$file_ext = 'kosong';
					}
				}else {
					$file_ext = 'kosong';
				}
				if ($_FILES['FOTO_KTP']['name'] != null) {
					$fotoktp = $this->m_anggota->getFoto($REG_COM, 'FOTO_KTP');
					if (file_exists("./images/anggota/ktp/".$fotoktp)) {
							unlink("./images/anggota/ktp/".$fotoktp);
						}
					if($this->upload_images($this->input->post('REG_COM'), './images/anggota/ktp', 'FOTO_KTP')){
						$file_ktp = explode('.', $_FILES['FOTO']['name']);
						$file_ktp = strtolower(end($file_ktp));
					}else {
						$file_ktp = 'aa';
					}
				}else {

						$file_ktp = 'aa';
				}

					$this->m_anggota->editAnggotaDetail($REG_COM);
					$this->m_anggota->editAnggota($file_ext, $file_ktp, $REG_COM);
					$data['alert'] = 'success_edit'; // sweet alert
			}
			$this->renderpage('anggota/create', $data);
		}
	}