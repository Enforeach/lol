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

			$this->form_validation->set_rules('nama_lengkap', 'Nama', 'required');
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			if($this->form_validation->run() == false){
				$data['alert'] = '';
			}else{

				
				$this->m_user->addPenAng();
				$data['alert'] = 'success'; // sweet alert

				}
			
			$this->load->view('landing_page/index', $data);
		}
	}