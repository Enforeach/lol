<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Core {
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
		$this->renderpage('dashboard');
	}

	public function Materi()
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$this->renderpage('materi');
	}
}
