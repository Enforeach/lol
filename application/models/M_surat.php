<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_surat extends CI_Model
{
  private $level;
  function __construct(){
    parent::__construct();
    $this->level = $this->session->userdata('level');
  }
  function _post($name , $xss = true){
    return $this->input->post($name , $xss);
  }
  public function getCountSurat($db) {
    $this->db->select("count(id_detail) as total");
    $this->db->from($db);
    $q = $this->db->get()->row();
    return $q->total;  
  }
  public function getMax() {
    $this->db->select_max("id_detail");
    $this->db->from("tb_detail_surat");
    $q = $this->db->get()->row();
    return $q->id_detail;  
  }
  public function add_surata($table, $data)
  {
    $this->db->insert($table, $data);
  }
    public function edit_surata($table, $data, $id)
  {
    
    $this->db->where("id_detail", $id);
    $this->db->update("tb_detail_surat", $data);
  }
    function Surat_delete($where,$table){

    $this->db->where($where);
    $this->db->delete($table);
  }
  public function getSurat($nama_singkat)
  {
    $this->db->select("*");
    $this->db->from("tb_detail_surat");
    $this->db->where("id_detail", $nama_singkat);
    return $this->db->get()->row();
  }
  public function getIsi($id) {
    $this->db->select("id_isi");
    $this->db->from("tb_detail_surat");
    $this->db->where('id_detail', $id);
    $q = $this->db->get()->row();
    return $q->id_isi;  
  }
  public function getAll($id)
  {
    $this->db->select("*");
    $this->db->from('tb_isi');
    $this->db->where("id_isi", $id);
    return $this->db->get()->result();
  }    


}
