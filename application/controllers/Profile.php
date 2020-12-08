<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Core {
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
		if(empty($_FILES['foto']['name'])){
			$data['alert'] = "";
		}else{

		$photo = $this->session->userdata('FOTO');

		$NAMA_SINGKAT = $this->session->userdata('NAMA_SINGKAT');
		if (file_exists("./images/operator/".$photo)) {
				unlink("./images/operator/".$photo);
		}
		 	$this->upload_images($NAMA_SINGKAT, './images/operator', 'foto');
		 		$file_ext = explode('.', $_FILES['foto']['name']);
		 		$file_ext = strtolower(end($file_ext));

		$add = $this->m_operator->profile_photo($file_ext);
					$data['alert'] = 'success'; // sweet alert
		}

		$this->renderpage('profile/profile', $data);
	}

	public function edit($nama_singkat)
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$this->form_validation->set_rules('NAMA_SINGKAT', 'Nama Singkat', 'required');
		$this->form_validation->set_rules('NAMA_LENGKAP', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('EMAIL', 'Email', 'required');

		$data['user'] = $this->m_user->getUser($nama_singkat);

		if($this->form_validation->run() == false){
			$data['alert'] = "";
		}else{
			if($this->m_user->editUser($nama_singkat)){
				$this->m_user->set($nama_singkat);
				$data['alert'] = "success_edit";
			}
			redirect('Profile');
		}
		$this->renderpage('profile/edit', $data);
	}
}
