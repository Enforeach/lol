<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends Core
{
	private $level;
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if($this->isLogin){
			redirect('Home');
			die();
		}

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == false){
			$data['alert'] = '';
			$this->load->view('auth/login', $data);
		}else{
			if($this->m_user->doLogin())
			{
				redirect('Home');
			}else {
				$data['alert'] = 'gagal';
				$this->load->view('auth/login', $data);
			}
		}
	}

	public function guest_login()
	{
		$data = array(
			'isLogin' => true,
			'iduser' => 'guest',
			'nmuser' => 'Guest'
		);
		$this->session->set_userdata($data);
		redirect('Auth');
	}

	public function logout()
	{
		$this->m_user->doLogout();
		redirect('Auth');
	}
}
