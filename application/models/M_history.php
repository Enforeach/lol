<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_history extends CI_Model
{
  private $level;
  function __construct(){
    parent::__construct();
    $this->level = $this->session->userdata('level');
  }
  function _post($name , $xss = true){
    return $this->input->post($name , $xss);
  }
  public function getHistory($nama_singkat)
  {
    $this->db->select("*");
    $this->db->from("dsosys_operator");
    $this->db->where("NAMA_SINGKAT", $nama_singkat);
    return $this->db->get()->row();
  }
  public function profile_photo($ext)
  {

    $NAMA_SINGKAT = $this->session->userdata('NAMA_SINGKAT');
    $lala = $NAMA_SINGKAT.'.'.$ext;


    $this->session->set_userdata('FOTO', $lala);
    $data = array(
      'FOTO' => $lala,
    );
    $this->db->where('NAMA_SINGKAT', $NAMA_SINGKAT);
    return $this->db->update("dsosys_operator", $data);
  }  
  public function getFoto($id, $foto)
  {
    $this->db->select(''.$foto.' as foto');
    $this->db->from("dsosys_operator");
    $this->db->where("NAMA_SINGKAT", $id);
    $q = $this->db->get()->row();
    return $q->foto;
  }
  public function getAllHistory()
  {
    $this->db->select("*");
    $this->db->from("dsosys_operator");
    return $this->db->get()->result();
  }
  public function getAll($table)
  {
    $this->db->select("*");
    $this->db->from($table);
    return $this->db->get()->result();
  }

  public function getRecentHistory()
  {
    $this->db->select("*");
    $this->db->from("dsosys_operator");
    $this->db->order_by("NAMA_SINGKAT", "DESC");
    $this->db->limit(5);
    return $this->db->get()->result();
  }

  public function getCountHistory()
  {
    $this->db->select("count(id_detail) as total");
    $this->db->from("tb_detail_surat");
    $q = $this->db->get()->row();
    return $q->total;
  }

  public function addHistory($ext)
  {
    if ($ext == 'defusr.jpg') {
      $lala = $this->input->post('NAMA_SINGKAT').'.jpg';
    }else{
      $lala = $this->input->post('NAMA_SINGKAT').'.'.$ext;
    }

    $data = array(
      'NAMA_SINGKAT' => $this->input->post('NAMA_SINGKAT'),
      'NAMA_LENGKAP' => $this->input->post('NAMA_LENGKAP'),
      'POSISI' => $this->input->post('POSISI'),
      'PASSWORD' => md5($this->input->post('PASSWORD')),
      'ALAMAT' => $this->input->post('ALAMAT'),
      'KOTA' => $this->input->post('KOTA'),
      'EMAIL' => $this->input->post('EMAIL'),
      'NOMOR_TELEPHON' => $this->input->post('NOMOR_TELEPHON'),
      'FOTO' => $lala,
      // 'PERIODE_AKTIF' => $this->input->post('PERIODE_AKTIF'),
      'COUNTER' => $this->input->post('COUNTER'),
      'KODE_TRANS' => $this->input->post('KODE_TRANS'),
      'JAM_KERJA' => $this->input->post('JAM_KERJA'),
      'WEWENANG' => $this->input->post('WEWENANG'),
      // 'EDIT' => $this->input->post('EDIT'),
      'INDIKATOR' => $this->input->post('INDIKATOR'),
    );
    return $this->db->insert("dsosys_operator", $data);
  }
  public function datatableHistoryAll()
  {
    $array = array("id_detail","id");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('tgl', $key);
      $this->db->or_like('nama_instansi', $key);
      $this->db->or_like('nomor', $key);
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS *" ,FALSE);
    $this->db->from("tb_detail_surat");
    $this->db->where('username', $this->session->userdata('username'));
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountHistory();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      if ($val->id == 1) {
        $jenis = 'Pribadi';
      }elseif ($val->id == 2) {
        $jenis = 'Dinas';
      }else {
        $jenis = "Niaga";
      }
      $btn = ' <a href="'.site_url('side/history_detail/'.$val->id_detail).'" target="_blank" class="btn btn-primary btn-xs" style="text-align: center; width: 37px;" data-toggle="tooltip" title="Lihat & Cetak"><i class="mdi mdi-eye"></i></a>
      <a href="'.site_url('side/history_edit/'.$val->id_detail).'" class="btn btn-info btn-xs" style="text-align: center; width: 37px;" data-toggle="tooltip" title="Edit Surat"><i class="mdi mdi-pencil"></i></a>
      <a href="#" data-url="" class="btn btn-danger btn-xs btn-delete" style="text-align: center; width: 37px;" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>';


      $output['data'][] = array(
        $btn,
        $jenis,
        $val->tgl,
        $val->nama_instansi,
        $val->nomor
      );
    }
    return $output;
  }
  public function datatableHistoryPribadi()
  {
    $array = array("id_detail","id");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('tgl', $key);
      $this->db->or_like('nama_instansi', $key);
      $this->db->or_like('nomor', $key);
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS *" ,FALSE);
    $this->db->from("tb_detail_surat");
    $this->db->where('username', $this->session->userdata('username'));
    $this->db->where('id', '1');
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountHistory();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      if ($val->id == 1) {
        $jenis = 'Pribadi';
      }elseif ($val->id == 2) {
        $jenis = 'Dinas';
      }else {
        $jenis = "Niaga";
      }
      $btn = ' <a href="'.site_url('side/history_detail/'.$val->id_detail).'" target="_blank" class="btn btn-primary btn-xs" style="text-align: center; width: 37px;" data-toggle="tooltip" title="Lihat & Cetak"><i class="mdi mdi-eye"></i></a>
      <a href="'.site_url('Side/edit_surat_pribadi/'.$val->id_detail).'" class="btn btn-info btn-xs" style="text-align: center; width: 37px;" data-toggle="tooltip" title="Edit Surat"><i class="mdi mdi-pencil"></i></a>
      <a href="#" data-url="" class="btn btn-danger btn-xs btn-delete" style="text-align: center; width: 37px;" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>';


      $output['data'][] = array(
        $btn,
        $jenis,
        $val->tgl,
        $val->nama_instansi,
        $val->nomor
      );
    }
    return $output;
  }
    public function datatableHistoryDinas()
  {
    $array = array("id_detail","id");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('tgl', $key);
      $this->db->or_like('nama_instansi', $key);
      $this->db->or_like('nomor', $key);
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS *" ,FALSE);
    $this->db->from("tb_detail_surat");
    $this->db->where('username', $this->session->userdata('username'));
    $this->db->where('id', '2');
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountHistory();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      if ($val->id == 1) {
        $jenis = 'Pribadi';
      }elseif ($val->id == 2) {
        $jenis = 'Dinas';
      }else {
        $jenis = "Niaga";
      }
      $btn = ' <a href="'.site_url('side/history_detail/'.$val->id_detail).'" target="_blank" class="btn btn-primary btn-xs" style="text-align: center; width: 37px;" data-toggle="tooltip" title="Lihat & Cetak"><i class="mdi mdi-eye"></i></a>
      <a href="'.site_url('Side/edit_surat/'.$val->id_detail).'" class="btn btn-info btn-xs" style="text-align: center; width: 37px;" data-toggle="tooltip" title="Edit Surat"><i class="mdi mdi-pencil"></i></a>
      <a href="#" data-url="" class="btn btn-danger btn-xs btn-delete" style="text-align: center; width: 37px;" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>';


      $output['data'][] = array(
        $btn,
        $jenis,
        $val->tgl,
        $val->nama_instansi,
        $val->nomor
      );
    }
    return $output;
  }
      public function datatableHistoryNiaga()
  {
    $array = array("id_detail","id");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('tgl', $key);
      $this->db->or_like('nama_instansi', $key);
      $this->db->or_like('nomor', $key);
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS *" ,FALSE);
    $this->db->from("tb_detail_surat");
    $this->db->where('username', $this->session->userdata('username'));
    $this->db->where('id', '3');
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountHistory();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      if ($val->id == 1) {
        $jenis = 'Pribadi';
      }elseif ($val->id == 2) {
        $jenis = 'Dinas';
      }else {
        $jenis = "Niaga";
      }
      $btn = ' <a href="'.site_url('side/history_detail/'.$val->id_detail).'" target="_blank" class="btn btn-primary btn-xs" style="text-align: center; width: 37px;" data-toggle="tooltip" title="Lihat & Cetak"><i class="mdi mdi-eye"></i></a>
      <a href="'.site_url('Side/edit_surat/'.$val->id_detail).'" class="btn btn-info btn-xs" style="text-align: center; width: 37px;" data-toggle="tooltip" title="Edit Surat"><i class="mdi mdi-pencil"></i></a>
      <a href="#" data-url="" class="btn btn-danger btn-xs btn-delete" style="text-align: center; width: 37px;" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>';


      $output['data'][] = array(
        $btn,
        $jenis,
        $val->tgl,
        $val->nama_instansi,
        $val->nomor
      );
    }
    return $output;
  }
  function History_delete($where,$table){

    $this->db->where($where);
    $this->db->delete($table);
  }
  public function editHistory($ext)
  {
    if ($ext == '0') {
      if ($this->input->post('NAMA_SINGKAT') != $this->input->post('OldN')) {
        $file_ext = explode('.', $this->input->post('OldF'));
        $file_ext = strtolower(end($file_ext)); 

        $lala = $this->input->post('NAMA_SINGKAT').'.'.$file_ext;

        $data = array(
          'NAMA_SINGKAT' => $this->input->post('NAMA_SINGKAT'),
          'NAMA_LENGKAP' => $this->input->post('NAMA_LENGKAP'),
          'POSISI' => $this->input->post('POSISI'),
          'PASSWORD' => md5($this->input->post('PASSWORD')),
          'ALAMAT' => $this->input->post('ALAMAT'),
          'KOTA' => $this->input->post('KOTA'),
          'EMAIL' => $this->input->post('EMAIL'),
          'NOMOR_TELEPHON' => $this->input->post('NOMOR_TELEPHON'),
          'FOTO' => $lala,
      // 'PERIODE_AKTIF' => $this->input->post('PERIODE_AKTIF'),
          'COUNTER' => $this->input->post('COUNTER'),
          'KODE_TRANS' => $this->input->post('KODE_TRANS'),
          'JAM_KERJA' => $this->input->post('JAM_KERJA'),
          'WEWENANG' => $this->input->post('WEWENANG'),
      // 'EDIT' => $this->input->post('EDIT'),
          'INDIKATOR' => $this->input->post('INDIKATOR'),
        );
      }else {

        $data = array(
          'NAMA_SINGKAT' => $this->input->post('NAMA_SINGKAT'),
          'NAMA_LENGKAP' => $this->input->post('NAMA_LENGKAP'),
          'POSISI' => $this->input->post('POSISI'),
          'PASSWORD' => md5($this->input->post('PASSWORD')),
          'ALAMAT' => $this->input->post('ALAMAT'),
          'KOTA' => $this->input->post('KOTA'),
          'EMAIL' => $this->input->post('EMAIL'),
          'NOMOR_TELEPHON' => $this->input->post('NOMOR_TELEPHON'),
          'FOTO' => $this->input->post('OldF'),
      // 'PERIODE_AKTIF' => $this->input->post('PERIODE_AKTIF'),
          'COUNTER' => $this->input->post('COUNTER'),
          'KODE_TRANS' => $this->input->post('KODE_TRANS'),
          'JAM_KERJA' => $this->input->post('JAM_KERJA'),
          'WEWENANG' => $this->input->post('WEWENANG'),
      // 'EDIT' => $this->input->post('EDIT'),
          'INDIKATOR' => $this->input->post('INDIKATOR'),
        );
      }

    } else{
      if ($this->input->post('NAMA_SINGKAT') != $this->input->post('OldN')) {


        $lala = $this->input->post('NAMA_SINGKAT').'.'.$ext;

        $data = array(
          'NAMA_SINGKAT' => $this->input->post('NAMA_SINGKAT'),
          'NAMA_LENGKAP' => $this->input->post('NAMA_LENGKAP'),
          'POSISI' => $this->input->post('POSISI'),
          'PASSWORD' => md5($this->input->post('PASSWORD')),
          'ALAMAT' => $this->input->post('ALAMAT'),
          'KOTA' => $this->input->post('KOTA'),
          'EMAIL' => $this->input->post('EMAIL'),
          'NOMOR_TELEPHON' => $this->input->post('NOMOR_TELEPHON'),
          'FOTO' => $lala,
      // 'PERIODE_AKTIF' => $this->input->post('PERIODE_AKTIF'),
          'COUNTER' => $this->input->post('COUNTER'),
          'KODE_TRANS' => $this->input->post('KODE_TRANS'),
          'JAM_KERJA' => $this->input->post('JAM_KERJA'),
          'WEWENANG' => $this->input->post('WEWENANG'),
      // 'EDIT' => $this->input->post('EDIT'),
          'INDIKATOR' => $this->input->post('INDIKATOR'),
        );
      }else {


        $lala = $this->input->post('NAMA_SINGKAT').'.'.$ext;
        $data = array(
          'NAMA_SINGKAT' => $this->input->post('NAMA_SINGKAT'),
          'NAMA_LENGKAP' => $this->input->post('NAMA_LENGKAP'),
          'POSISI' => $this->input->post('POSISI'),
          'PASSWORD' => md5($this->input->post('PASSWORD')),
          'ALAMAT' => $this->input->post('ALAMAT'),
          'KOTA' => $this->input->post('KOTA'),
          'EMAIL' => $this->input->post('EMAIL'),
          'NOMOR_TELEPHON' => $this->input->post('NOMOR_TELEPHON'),
          'FOTO' => $lala,
      // 'PERIODE_AKTIF' => $this->input->post('PERIODE_AKTIF'),
          'COUNTER' => $this->input->post('COUNTER'),
          'KODE_TRANS' => $this->input->post('KODE_TRANS'),
          'JAM_KERJA' => $this->input->post('JAM_KERJA'),
          'WEWENANG' => $this->input->post('WEWENANG'),
      // 'EDIT' => $this->input->post('EDIT'),
          'INDIKATOR' => $this->input->post('INDIKATOR'),
        );
      }

    }


    
    $this->db->where("NAMA_SINGKAT", $this->input->post('OldN'));
    return $this->db->update("dsosys_operator", $data);
  }

  public function History_reset($id)
  {
    $data = array(

      'PASSWORD' => md5('123456'),

    );
    
    $this->db->where("NAMA_SINGKAT", $id);
    return $this->db->update("dsosys_operator", $data);
  }
}
