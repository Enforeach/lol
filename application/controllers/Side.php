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
	public function delete_surat ($nama_s)
	{

		$id_isi = $this->m_surat->getIsi($nama_s);
		$where = array('id_detail' => $nama_s);

		$where2 = array('id_isi' => $id_isi);

		if (file_exists("./images/logo_surat/".$this->m_surat->getFoto($nama_s, 'logo'))) {
			unlink("./images/logo_surat/".$this->m_surat->getFoto($nama_s, 'logo'));
		}
		$this->m_surat->Surat_delete($where,'tb_detail_surat');

		$this->m_surat->Surat_delete($where2,'tb_isi');
		return true;

	}

	public function detail_surat($title)
	{
		$data['title'] = $title; //dinas/niaga
		$data['surat'] = $this->m_surat->getSurat($title);

		$data['isi'] = $this->m_surat->getAll($this->m_surat->getIsi($title));
		$this->renderpage('surat/detail_surat', $data);
	}
	public function Rujukan()
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$this->renderpage('side/rujukan');
	}

	public function History($tipe)
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$data['tipe'] = $tipe;
		$this->renderpage('side/history', $data);
	}

	public function edit_surat_pribadi()
	{
		$this->renderpage('surat/edit_pribadi');
	}

	public function edit_surat($title)
	{
		$data['title'] = $title; //dinas/niaga
		$data['tipe'] = 'ben gak muncul error';
		$data['surat'] = $this->m_surat->getSurat($title);

		$data['isi'] = $this->m_surat->getAll($this->m_surat->getIsi($title));
		$this->renderpage('surat/edit_surat_d_n', $data);
	}

	public function history_datatableAll()
	{
		$history = $this->m_history->datatableHistoryAll();
		echo json_encode($history);
		die();
	}
	public function history_datatablePribadi()
	{
		$history = $this->m_history->datatableHistoryPribadi();
		echo json_encode($history);
		die();
	}
	public function history_datatableDinas()
	{
		$history = $this->m_history->datatableHistoryDinas();
		echo json_encode($history);
		die();
	}
	public function history_datatableNiaga()
	{
		$history = $this->m_history->datatableHistoryNiaga();
		echo json_encode($history);
		die();
	}
}
