<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model
{
  private $level;
  function __construct(){
    parent::__construct();
    $this->level = $this->session->userdata('level');
  }
  public function _post($name , $xss = true){
    return $this->input->post($name , $xss);
  }
    public function addPenAng()
  {

    $data = array(
      'username' => strtolower($this->input->post('username')),
      'password' => md5("akusayangkamu:*".$this->input->post('password')),
      'nama_lengkap' => $this->input->post('nama_lengkap')
    );
    return $this->db->insert("tb_siswa", $data);
  }
    public function getUsername($db, $where)
  {
    $this->db->select("count(*) as total");
    $this->db->from($db);
    $this->db->where("username", $where);
    $q = $this->db->get()->row();
    return $q->total;
  }
  public function set($id)
  {
    $this->db->select("*");
    $this->db->from("dsosys_operator");
    $this->db->where("NAMA_SINGKAT", $id);
    $query = $this->db->get()->row();
    $data = array(
      'NAMA_SINGKAT' => $this->input->post('NAMA_SINGKAT'),
      'NAMA_LENGKAP' => $this->input->post('NAMA_LENGKAP'),
      'POSISI' => $this->input->post('POSISI'),
      // 'PASSWORD' => md5($this->input->post('PASSWORD')),
      'ALAMAT' => $this->input->post('ALAMAT'),
      'KOTA' => $this->input->post('KOTA'),
      'EMAIL' => $this->input->post('EMAIL'),
      'NOMOR_TELEPHON' => $this->input->post('NOMOR_TELEPHON'),
      // 'FOTO' => $getFoto,
      // 'PERIODE_AKTIF' => $this->input->post('PERIODE_AKTIF'),
      'COUNTER' => $this->input->post('COUNTER'),
      'KODE_TRANS' => $this->input->post('KODE_TRANS'),
      'JAM_KERJA' => $this->input->post('JAM_KERJA'),
      'WEWENANG' => $this->input->post('WEWENANG'),
      // 'EDIT' => $this->input->post('EDIT'),
      'INDIKATOR' => $this->input->post('INDIKATOR'),
    );
    $this->session->set_userdata($data);
  }
  public function doLogin()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $this->db->select("*");
    $this->db->from("tb_siswa");
    $this->db->where("username", $username);
    $query = $this->db->get()->row();
    if($query != null){
      if(md5("akusayangkamu:*".$password) == $query->password){
        $data = array(
          'isLogin' => true,
          'username' => $query->username,
          'nama_lengkap' => $query->nama_lengkap,
          'foto' => $query->foto.'.'.$ext
        );
        $this->session->set_userdata($data);
        return true;
      }else{
        return false;
      }
    }
  }
  function doLogout()
  {
    $this->session->sess_destroy();
    return true;
  }

  public function getUser($iduser)
  {
    $this->db->select("*");
    $this->db->from("dsosys_operator");
    $this->db->where("NAMA_SINGKAT", $iduser);
    return $this->db->get()->row();
  }

  public function editUser($nama_singkat)
  {
    if (empty($this->input->post('PASSWORD'))) {
     $data = array(
      'NAMA_SINGKAT' => $this->input->post('NAMA_SINGKAT'),
      'NAMA_LENGKAP' => $this->input->post('NAMA_LENGKAP'),
      'POSISI' => $this->input->post('POSISI'),
      'ALAMAT' => $this->input->post('ALAMAT'),
      'KOTA' => $this->input->post('KOTA'),
      'EMAIL' => $this->input->post('EMAIL'),
      'NOMOR_TELEPHON' => $this->input->post('NOMOR_TELEPHON'),
      // 'FOTO' => $getFoto,
      // 'PERIODE_AKTIF' => $this->input->post('PERIODE_AKTIF'),
      'COUNTER' => $this->input->post('COUNTER'),
      'KODE_TRANS' => $this->input->post('KODE_TRANS'),
      'JAM_KERJA' => $this->input->post('JAM_KERJA'),
      'WEWENANG' => $this->input->post('WEWENANG'),
      // 'EDIT' => $this->input->post('EDIT'),
      'INDIKATOR' => $this->input->post('INDIKATOR'),
      'FOTO' => $query->FOTO.'.'.$ext
    );
   }else {
     $data = array(
      'PASSWORD' => md5($this->input->post('PASSWORD')),
    );
   }
   

   $this->db->where("NAMA_SINGKAT", $nama_singkat);
   return $this->db->update("dsosys_operator", $data);
 }
}
