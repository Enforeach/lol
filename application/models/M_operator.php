<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_operator extends CI_Model
{
  private $level;
  function __construct(){
    parent::__construct();
    $this->level = $this->session->userdata('level');
  }
  function _post($name , $xss = true){
    return $this->input->post($name , $xss);
  }
  public function getOperator($nama_singkat)
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
  public function getAllOperator()
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

  public function getRecentOperator()
  {
    $this->db->select("*");
    $this->db->from("dsosys_operator");
    $this->db->order_by("NAMA_SINGKAT", "DESC");
    $this->db->limit(5);
    return $this->db->get()->result();
  }

  public function getCountOperator()
  {
    $this->db->select("count(NAMA_SINGKAT) as total");
    $this->db->from("dsosys_operator");
    $q = $this->db->get()->row();
    return $q->total;
  }

  public function addOperator($ext)
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

  public function datatableOperator()
  {
    $array = array("NAMA_SINGKAT","NAMA_LENGKAP");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('NAMA_SINGKAT', $key);
      $this->db->or_like('NAMA_LENGKAP', $key);
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS *" ,FALSE);
    $this->db->from("dsosys_operator");
    $this->db->order_by("PERIODE_AKTIF", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountOperator();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      // $check = '<input type="checkbox" class="checkitem" id="lala" value="'.$val->NAMA_SINGKAT.'"  >' ;
      $check = '<input type="checkbox" id="'.$val->NAMA_SINGKAT.'" class="checkitem" name="cek[]" onclick="la(\'' .$val->NAMA_SINGKAT. '\', \'' .$val->FOTO. '\')" />' ;
      $btn = '';
      if($this->session->userdata('NAMA_SINGKAT') != $val->NAMA_SINGKAT){
      $btn .= '<a href="'.site_url('Operator/detailOperator/'.$val->NAMA_SINGKAT).'" class="btn btn-primary btn-xs" style="text-align: center; width: 37px;" data-toggle="tooltip" title="Detail"><i class="mdi mdi-eye"></i></a>';
        $btn .= '<a href="'.site_url('Operator/Operator_edit/'.$val->NAMA_SINGKAT).'" class="btn btn-info btn-xs" style="text-align: center; width: 37px;" data-toggle="tooltip" title="Edit"><i class="mdi mdi-pencil"></i></a>
        <a href="#" data-url="'.site_url('Operator/Operator_delete/'.$val->NAMA_SINGKAT).'" class="btn btn-danger btn-xs btn-delete" style="text-align: center; width: 37px;" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a> ';
        $btn .= '<a href="#" data-url="'.site_url('Operator/Operator_reset/'.$val->NAMA_SINGKAT).'" class="btn btn-warning btn-xs btn-reset" style="text-align: center; width: 37px;" data-toggle="tooltip" title="Reset Password"><i class="mdi mdi-key"></i></a>';

      }else{
        $btn .= '<a href="#" class="btn btn-success btn-xs" style="text-align: center; width: 70px;" data-toggle="tooltip" title="Online"><i class="mdi mdi-circle">&nbsp;online</i></a> ';
      }

      $output['data'][] = array(
        $check,
        $val->NAMA_SINGKAT,
        $val->NAMA_LENGKAP,
        $val->POSISI,
        $val->EMAIL,
        $btn
      );
    }
    return $output;
  }
  function Operator_delete($where,$table){

    $this->db->where($where);
    $this->db->delete($table);
  }
  public function editOperator($ext)
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

  public function Operator_reset($id)
  {
    $data = array(

      'PASSWORD' => md5('123456'),

    );
    
    $this->db->where("NAMA_SINGKAT", $id);
    return $this->db->update("dsosys_operator", $data);
  }
}
