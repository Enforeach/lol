<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends CI_Controller {

	protected $isLogin = false;
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library(array('form_validation'));
		$this->load->model(array('m_user', 'm_operator', 'm_penline'));

		$this->isLogin = $this->session->userdata('isLogin');
	}

	public function renderpage($view, $datas = array())
	{
		$data['NAMA_SINGKAT'] = $this->session->userdata('NAMA_SINGKAT');
		$data['POSISI'] = $this->session->userdata('POSISI');
		$data['NAMA_LENGKAP'] = $this->session->userdata('NAMA_LENGKAP');
		$data['PASSWORD'] = $this->session->userdata('PASSWORD');
		$data['ALAMAT'] = $this->session->userdata('ALAMAT');
		$data['JAM_KERJA'] = $this->session->userdata('JAM_KERJA');
		$data['photo'] = $this->session->userdata('FOTO');
		$data['KOTA'] = $this->session->userdata('KOTA');
		$data['EMAIL'] = $this->session->userdata('EMAIL');		
		$data['NOMOR_TELEPHON'] = $this->session->userdata('NOMOR_TELEPHON');

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