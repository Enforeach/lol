<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Side extends Core {
	private $level;
	function __construct()
	{
		parent::__construct();
		$this->level = $this->session->userdata('level');
	}

	public function Biodata()
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$this->renderpage('side/biodata');
	}

	public function Rujukan()
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$this->renderpage('side/rujukan');
	}

	public function History()
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$this->renderpage('side/history');
	}
}
