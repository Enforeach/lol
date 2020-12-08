<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends Core {
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
		$data['allOperator'] = $this->m_operator->getAllOperator();
		$this->renderpage('operator/show', $data);
	}

	public function detailOperator($id)
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}	
		$data['Operator'] = $this->m_operator->getOperator($id);
		$this->renderpage('operator/detail', $data);

	}
		public function getAll()
	{
		$op = $this->m_operator->getAll("dsosys_operator");
		echo json_encode($op);

	}
	public function Operator_reset($id)
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$this->m_operator->Operator_reset($id,'dsosys_operator');
		return true;

	}
	public function addOperator()
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$this->form_validation->set_rules('NAMA_SINGKAT', 'Nama Singkat', 'required');
		$this->form_validation->set_rules('NAMA_LENGKAP', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('EMAIL', 'Email', 'required');

		$data['edit'] = false;

		if($this->form_validation->run() == false){
			$data['alert'] = '';
		}else{
			if($this->upload_images($this->input->post('NAMA_SINGKAT'), './images/operator', 'FOTO')){
				$file_ext = explode('.', $_FILES['FOTO']['name']);
				$file_ext = strtolower(end($file_ext));

				$add = $this->m_operator->addOperator($file_ext);
					$data['alert'] = 'success'; // sweet alert
				}elseif (empty($this->upload_images($_FILES['FOTO']['name'], './images/operator', 'FOTO'))) {
					$file_ext = 'defusr.jpg';
					$add = $this->m_operator->addOperator($file_ext);
					$data['alert'] = 'success'; // sweet alert
				}
			}
			$this->renderpage('operator/create', $data);
		}

		public function operator_datatable()
		{
			$operator = $this->m_operator->datatableOperator();
			echo json_encode($operator);
			die();
		}
		public function Operator_delete ($nama_s)
		{
			$where = array('NAMA_SINGKAT' => $nama_s);
			$this->m_operator->Operator_delete($where,'dsosys_operator');
			return true;
			
		}
		public function del_bulk ()
		{
			$data    = $_POST["result"];
			$data    = json_decode("$data", true);

			  foreach($data as $d){
			     
					$where = array('NAMA_SINGKAT' => $d);
					$this->m_operator->Operator_delete($where,'dsosys_operator');
			  }
			  $pesan = "a";
			json_encode($pesan);
			
		}
		public function Operator_edit($namas)
		{
			if(!$this->isLogin){
				redirect('Auth');
				die();
			}
			$this->form_validation->set_rules('NAMA_SINGKAT', 'Nama Singkat', 'required');
			$this->form_validation->set_rules('NAMA_LENGKAP', 'Nama Lengkap', 'required');
			$this->form_validation->set_rules('EMAIL', 'Email', 'required');


			$data['operatoy'] = $this->m_operator->getOperator($namas);
			$data['edit'] = true;


			if($this->form_validation->run() == false){
				$data['alert'] = '';
			}else{
				if($this->input->post('NAMA_SINGKAT') != $this->input->post('OldN')){
					$lol = explode('.', $this->input->post('OldF'));
					$lol = strtolower(end($lol));
					if (file_exists("./images/operator/".$this->input->post('OldF'))) {
						rename("./images/operator/".$this->input->post('OldF'),"./images/operator/".$this->input->post('NAMA_SINGKAT').".".$lol);
					}
					if ($_FILES['FOTO']['name'] != null) {
						if (file_exists("./images/operator/".$this->input->post('OldF'))) {
							unlink("./images/operator/".$this->input->post('OldF'));
						}
						if($this->upload_images($this->input->post('NAMA_SINGKAT'), './images/operator', 'FOTO')){
							$file_ext = explode('.', $_FILES['FOTO']['name']);
							$file_ext = strtolower(end($file_ext)); 

						}
					}else {
						$file_ext = "0";
					}
				}else {
					if ($_FILES['FOTO']['name'] != null) {						
						if (file_exists("./images/operator/".$this->input->post('OldF'))) {
							unlink("./images/operator/".$this->input->post('OldF'));
						}
						if($this->upload_images($this->input->post('NAMA_SINGKAT'), './images/operator', 'FOTO')){
							$file_ext = explode('.', $_FILES['FOTO']['name']);
							$file_ext = strtolower(end($file_ext)); 

						}
					}else {
						$file_ext = "0";
					}
				}

				$edit = $this->m_operator->editOperator($file_ext);
						$data['alert'] = 'success_edit'; // sweet alert
					}
					$this->renderpage('operator/create', $data);
				}
			}
