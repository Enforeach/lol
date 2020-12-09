<?php

class L_page extends Core {
	public function index()
	{
		$this->load->model(array('m_user', 'm_operator'));
		// $data['status_kawin'] = $this->m_operator->getAll('dsosys_status_kawin');
		// $data['pendidikan'] = $this->m_operator->getAll('dsosys_pendidikan');
		// $data['pendidikan_kk'] = $this->m_operator->getAll('dsosys_pendidikan_kk');
		// $data['pekerjaan'] = $this->m_operator->getAll('dsosys_pekerjaan');
		// $data['provinsi'] = $this->m_operator->getAll('dsosys_provinsi');
		// $data['status_anggota'] = $this->m_operator->getAll('dsosys_status_agt');
		// $data['kewarganegaraan'] = $this->m_operator->getAll('dsosys_status_kewarganegaraan');
		// $data['goldar'] = $this->m_operator->getAll('dsosys_gol_darah');
		// $data['agama'] = $this->m_operator->getAll('dsosys_agama');
		// $data['jkel'] = $this->m_operator->getAll('dsosys_sex');
		// $data['kplor'] = $this->m_operator->getAll('dsosys_kpl_organisasi');
		// $data['kplang'] = $this->m_operator->getAll('dsosys_kpl_anggota');

			$this->form_validation->set_rules('NAMA_LENGKAP', 'Nama', 'required');
			if($this->form_validation->run() == false){
				$data['alert'] = '';
			}else{
				if($this->upload_images($this->input->post('NIK'), './images/anggota/p_online', 'FOTO')){
					$file_ext = explode('.', $_FILES['FOTO']['name']);
					$file_ext = strtolower(end($file_ext));
				}else {
					$file_ext = 'kosong';
				}
				if ($this->upload_images($this->input->post('NIK'), './images/anggota/p_online/ktp', 'FOTO_KTP')) {
					$file_ktp = explode('.', $_FILES['FOTO_KTP']['name']);
					$file_ktp = strtolower(end($file_ktp));
				}else {
					$file_ktp = 'aa';
				}
				$this->m_penline->addPenAng($file_ext, $file_ktp);
				$data['alert'] = 'success'; // sweet alert

				}
			
			$this->load->view('landing_page/index', $data);
		}
	}