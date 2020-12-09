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
}
