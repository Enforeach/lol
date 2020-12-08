<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_online extends Core {
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
		$data['AllPenline'] = $this->m_penline->getAllPenline();
		$this->renderpage('pend_online/show', $data);
	}

	public function penline_datatable()
	{
		$penline = $this->m_penline->datatablePenline();
		echo json_encode($penline);
		die();
	}
	public function acc()
	{
		$id = $this->input->post('id');

		$reg = $this->m_anggota->buat_kode();
		$foto = $this->m_penline->getFoto($id, 'FOTO');
		$foto_ktp = $this->m_penline->getFoto($id, 'FOTO_KTP');
		if (!empty($id)) {
			$file_ext = "kosong";

			$ktp_ext = "kosong";
			if (!empty($foto)) {
				$file_ext = explode('.', $foto);
				$file_ext = strtolower(end($file_ext));
				rename("./images/anggota/p_online/".$foto , "./images/anggota/".$foto.".".$file_ext);
			}
			if (!empty($foto_ktp)) {
				$ktp_ext = explode('.', $foto_ktp);
				$ktp_ext = strtolower(end($ktp_ext));
				rename("./images/anggota/p_online/ktp/".$foto_ktp , "./images/anggota/ktp/".$reg.".".$ktp_ext);
			}
			$this->m_penline->acc($id, $reg, $file_ext, $ktp_ext);
			$this->m_penline->acc_det($reg);
			$this->m_penline->up_penline($id);

			
			  $pesan = "a";
			json_encode($pesan);
		}

	}

	public function detail()
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$this->renderpage('pend_online/view');
	}
}
