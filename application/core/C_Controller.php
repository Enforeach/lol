<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends CI_Controller {

	protected $isLogin = false;
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library(array('form_validation'));
		$this->load->model(array('m_user', 'm_operator', 'm_penline', 'm_surat', 'm_history'));

		$this->isLogin = $this->session->userdata('isLogin');
	}

	public function renderpage($view, $datas = array())
	{
		$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
		$data['username'] = $this->session->userdata('username');

		$this->load->view('template/head', $data);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view($view, $datas);
		$this->load->view('template/footer', $data);
	}
	
	public function upload_images($filename, $path, $name)
	{
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['file_name']  = $filename;
		$config['overwrite'] = true;
		$this->load->library('upload');
		$this->upload->initialize($config);
		$data = array();

		if ($this->upload->do_upload($name)){
			$updata = $this->upload->data();
			return true;
		}else{
			$this->upload->display_errors();
			return false;
		}
	}
}