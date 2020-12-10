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
  public function add_surata($table, $data)
  {
    $this->db->insert($table, $data);
  }

}
