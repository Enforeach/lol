<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penline extends CI_Model
{
  private $level;
  function __construct(){
    parent::__construct();
    $this->level = $this->session->userdata('level');
  }
  function _post($name , $xss = true){
    return $this->input->post($name , $xss);
  }
  public function getPenline($id)
  {
    $this->db->select("*");
    $this->db->from("dsosys_pendaftaran_online");
    $this->db->where("ID", $id);
    return $this->db->get()->row();
  }
  public function getKota($id)
  {
    $this->db->select("*");
    $this->db->from("dsosys_kota");
    $this->db->where("ID_PROV", $id);
    return $this->db->get()->result();
  }

  public function getAllPenline()
  {
    $this->db->select("*");
    $this->db->from("dsosys_pendaftaran_online");
    return $this->db->get()->result();
  }
  public function getFoto($id, $foto)
  {
    $this->db->select(''.$foto.' as foto');
    $this->db->from("dsosys_pendaftaran_online");
    $this->db->where("ID", $id);
    $q = $this->db->get()->row();
    return $q->foto;
  }
  public function getRecentPenline()
  {
    $this->db->select("*");
    $this->db->from("dsosys_pendaftaran_online");
    $this->db->order_by("ID", "DESC");
    $this->db->limit(5);
    return $this->db->get()->result();
  }

  public function getCountPenline()
  {
    $this->db->select("count(ID) as total");
    $this->db->from("dsosys_pendaftaran_online");
    $q = $this->db->get()->row();
    return $q->total;
  }  
  public function getCountPlus()
  {
    $this->db->select("count(ID) as total");
    $this->db->from("dsosys_pendaftaran_online");
    $this->db->where("STATUS_ACC = 1");
    $q = $this->db->get()->row();
    return $q->total;
  }
    public function up_penline($id)
  {
    $data = array(
      'STATUS_ACC' => '2',
      'NAMA_ACC' => $this->session->userdata('NAMA_SINGKAT'),
      'UPDATE_AT' => date('Y-m-d H:i:s')
    );
    $this->db->where("ID", $id);
    return $this->db->update("dsosys_pendaftaran_online", $data);
  }
public function acc($id, $reg, $ext, $ktp)
  {
    if ($ext == 'kosong') {
      $lala = $reg.'.jpg';
    }else{
      $lala = $reg.'.'.$ext;
    }

    if ($ktp == 'kosong') {
      $hh = $reg.'.jpg';
    }else{
      $hh = $reg.'.'.$ktp;
    }
    $ha = $this->getPenline($id);


    $data = array(
      'REG_COM' => $reg,
      // 'RFID' => $this->input->post('RFID'),
      // 'NO_AGT' => $this->input->post('NO_AGT'),
      'NIK' => $ha->NIK,
      'TGL_MSK' => date('Y-m-d'),
      // 'TGL_KLR' => $this->input->post('TGL_KLR'),
      // 'TGL_SKAP' => $this->input->post('TGL_SKAP'),
      'NAMA_LENGKAP' => $ha->NAMA_LENGKAP,
      'TMP_LHR' => $ha->TEMPAT_LAHIR,
      'TGL_LHR' => $ha->TANGGAL_LAHIR,
      'ID_SEX' => $ha->ID_SEX,
      'ALMT_JALAN' => $ha->ALMT_JALAN,
      'KODE_POS' => $ha->KODE_POS,
      'RT' => $ha->RT,
      'RW' => $ha->RW,
      'DUSUN' => $ha->DUSUN,
      'DESANKELURAHAN' => $ha->DESANKELURAHAN,
      'KECAMATAN' => $ha->KECAMATAN,
      'ID_KABNKOTA' => $ha->ID_KABNKOTA,
      'ID_PROVINSI' => $ha->ID_PROVINSI,
      'ID_KEWARGANEGARAAN' => $ha->ID_KEWARGANEGARAAN,
      'TELEPON' => $ha->TELEPON,
      'ID_AGAMA' => $ha->ID_AGAMA,
      'ID_PENDIDIKAN_KK' => $ha->ID_PENDIDIKAN_KK,
      'ID_PENDIDIKAN_SEDANG' => $ha->ID_PENDIDIKAN_SEDANG,
      'ID_PEKERJAAN' => $ha->ID_PEKERJAAN,
      'ID_STATUS_KAWIN' => $ha->ID_STATUS_KAWIN,
      'ID_GOL_DRH' => $ha->ID_GOL_DRH,
      'ID_STATUS_AGT' => "1",
      'FOTO' => $lala,
      'FOTO_KTP' => $hh
      // 'AKTIF' => $this->input->post('AKTIF'),
      // 'BLOKIR' => $this->input->post('BLOKIR'),
      // 'KET_BLOKIR' => $this->input->post('KET_BLOKIR'),
      // 'TGL_UPDATE' => $this->input->post('TGL_UPDATE'),
    
    );
    return $this->db->insert("dsosys_account", $data);
  }
    public function acc_det($reg)
  {

    $ha = $this->getPenline($id);
    $data = array(
      'REG_COM' => $reg,
      'NIK_AYAH' => $ha->NIK_AYAH,
      'NIK_IBU' => $ha->NIK_IBU,
      'NAMA_AYAH' => $ha->NAMA_AYAH,
      'NAMA_IBU' => $ha->NAMA_IBU
    );
    return $this->db->insert("dsosys_account_detail", $data);
  }

  public function addPenAng($ext, $ktp)
  {
    if ($ext == 'kosong') {
      $lala = $this->input->post('NIK').'.jpg';
    }else{
      $lala = $this->input->post('NIK').'.'.$ext;
    }

    if ($ktp == 'aa') {
      $hh = $this->input->post('NIK').'.jpg';
    }else{
      $hh = $this->input->post('NIK').'.'.$ktp;
    }

    $data = array(
      'NAMA_LENGKAP' => $this->input->post('NAMA_LENGKAP'),
      'NIK' => $this->input->post('NIK'),
      'ID_SEX' => $this->input->post('ID_SEX'),
      'TEMPAT_LAHIR' => $this->input->post('TEMPAT_LAHIR'),
      'TANGGAL_LAHIR' => $this->input->post('TANGGAL_LAHIR'),
      'ALMT_JALAN' => $this->input->post('ALMT_JALAN'),
      'KODE_POS' => $this->input->post('KODE_POS'),
      'RT' => $this->input->post('RT'),
      'RW' => $this->input->post('RW'),
      'DUSUN' => $this->input->post('DUSUN'),
      'DESANKELURAHAN' => $this->input->post('DESANKELURAHAN'),
      'KECAMATAN' => $this->input->post('KECAMATAN'),
      'ID_PROVINSI' => $this->input->post('ID_PROVINSI'),
      'ID_KABNKOTA' => $this->input->post('ID_KABNKOTA'),
      'ID_KEWARGANEGARAAN' => $this->input->post('ID_KEWARGANEGARAAN'),
      'ID_AGAMA' => $this->input->post('ID_AGAMA'),
      'ID_PENDIDIKAN_KK' => $this->input->post('ID_PENDIDIKAN_KK'),
      'ID_PENDIDIKAN_SEDANG' => $this->input->post('ID_PENDIDIKAN_SEDANG'),
      'ID_PEKERJAAN' => $this->input->post('ID_PEKERJAAN'),
      'ID_STATUS_KAWIN' => $this->input->post('ID_STATUS_KAWIN'),
      'NIK_AYAH' => $this->input->post('NIK_AYAH'),
      'NIK_IBU' => $this->input->post('NIK_IBU'),
      'NAMA_AYAH' => $this->input->post('NAMA_AYAH'),
      'NAMA_IBU' => $this->input->post('NAMA_IBU'),
      'FOTO' => $lala,
      'FOTO_KTP' => $hh,
      'TELEPON' => $this->input->post('TELEPON'),
      'STATUS_ACC' => '1',
      'NAMA_ACC' => $this->input->post('NAMA_ACC'),
      // 'CREATED_AT' => date('Y-m-d H:i:s'),
      // 'UPDATE_AT' => date('0000-00-00 00:00:00'),
    );
    return $this->db->insert("dsosys_pendaftaran_online", $data);
  }

  public function addPenBak($id)
  {


    $ha = $this->getPenline($id);

    $data = array(
      'NAMA_LENGKAP' => $ha->NAMA_LENGKAP,
      'NIK' => $ha->NIK,
      'ID_SEX' => $ha->ID_SEX,
      'TEMPAT_LAHIR' => $ha->TEMPAT_LAHIR,
      'TANGGAL_LAHIR' => $ha->TANGGAL_LAHIR,
      'ALMT_JALAN' => $ha->ALMT_JALAN,
      'KODE_POS' => $ha->KODE_POS,
      'RT' => $ha->RT,
      'RW' => $ha->RW,
      'DUSUN' => $ha->DUSUN,
      'DESANKELURAHAN' => $ha->DESANKELURAHAN,
      'KECAMATAN' => $ha->KECAMATAN,
      'ID_PROVINSI' => $ha->ID_PROVINSI,
      'ID_KABNKOTA' => $ha->ID_KABNKOTA,
      'ID_KEWARGANEGARAAN' => $ha->ID_KEWARGANEGARAAN,
      'ID_AGAMA' => $ha->ID_AGAMA,
      'ID_PENDIDIKAN_KK' => $ha->ID_PENDIDIKAN_KK,
      'ID_PENDIDIKAN_SEDANG' => $ha->ID_PENDIDIKAN_SEDANG,
      'ID_PEKERJAAN' => $ha->ID_PEKERJAAN,
      'ID_STATUS_KAWIN' => $ha->ID_STATUS_KAWIN,
      'NIK_AYAH' => $ha->NIK_AYAH,
      'NIK_IBU' => $ha->NIK_IBU,
      'NAMA_AYAH' => $ha->NAMA_AYAH,
      'NAMA_IBU' => $ha->NAMA_IBU,
      'FOTO' => $ha->FOTO,
      'FOTO_KTP' => $ha->FOTO_KTP,
      'TELEPON' => $ha->TELEPON,
      'STATUS_ACC' =>$ha->STATUS_ACC,
      'NAMA_ACC' => $ha->NAMA_ACC,
      'CREATED_AT' => $ha->CREATED_AT
    );
    return $this->db->insert("dsosys_pendaftaran_online_bak", $data);
  }
  public function deleteAnggota($ID)
  {
    $this->db->delete("dsosys_pendaftaran_online", array('ID' => $ID));
    return true;
  }
  public function datatablePenline()
  {
    $array = array("ID","NAMA_LENGKAP");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('ID', $key);
      $this->db->or_like('NAMA_LENGKAP', $key);
      $this->db->or_like('CREATED_AT', $key);
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS *" ,FALSE);
    $this->db->from("dsosys_pendaftaran_online");
    $this->db->order_by("STATUS_ACC", "ASC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountPenline();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      $check = '<input type="checkbox" class="checkitem">';

      $btn = '<a href="'.site_url('P_online/detail/'.$val->ID).'" class="btn btn-primary btn-xs" 
      style="text-align: center; width: 37px;" 
      data-toggle="tooltip" title="lihat data"><i class="mdi mdi-eye"></i>
      </a>
      <a href="#" class="btn btn-danger btn-xs" 
      style="text-align: center; width: 37px;" 
      data-toggle="tooltip" title="hapus"><i class="mdi mdi-delete"></i>
      </a>';
      if ($val->STATUS_ACC == "1") {
        $btn .= ' <a OnClick="acc('.$val->ID.', \''.$val->NAMA_LENGKAP.'\')" class="btn btn-success btn-xs" 
      style="text-align: center; width: 37px;" 
      data-toggle="tooltip" title="setujui"><i class="mdi mdi-account-plus"></i>
      </a>';
      }

      $output['data'][] = array(
        $check,
        $val->ID,
        $val->NAMA_LENGKAP,
        $val->ID_SEX,
        $val->CREATED_AT,
        $val->STATUS_ACC,
        $btn
      );
    }
    return $output;
  }
}