<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Model
{
  private $level;
  function __construct(){
    parent::__construct();
    $this->level = $this->session->userdata('level');
  }
  function _post($name , $xss = true){
    return $this->input->post($name , $xss);
  }
  public function getAnggota($id)
  {
    $this->db->select("*");
    $this->db->from("dsosys_account");
    $this->db->where("REG_COM", $id);
    return $this->db->get()->row();
  }
  public function getDAnggota($id)
  {
    $this->db->select("*");
    $this->db->from("dsosys_account_detail");
    $this->db->where("REG_COM", $id);
    return $this->db->get()->row();
  }
  public function getWAnggota()
  {
    $this->db->select("dsosys_gol_darah.NAMA as goldar, dsosys_status_kawin.NAMA as kawin, dsosys_agama.NAMA as agama, dsosys_pendidikan.NAMA as pendidikan, dsosys_pekerjaan.NAMA as pekerjaan, dsosys_kota.NAMA as kota, dsosys_provinsi.NAMA as prov, dsosys_status_kewarganegaraan.NAMA as kewarganegaraan, dsosys_status_agt.NAMA as status_anggota, dsosys_kpl_anggota.NAMA as kplanggota, dsosys_kpl_organisasi.NAMA as kplorganisasi, dsosys_pendidikan_kk.NAMA as pendidikan_kk");
    $this->db->from("dsosys_account as coba, dsosys_account_detail as dcoba");
    $this->db->join('dsosys_gol_darah', 'dsosys_gol_darah.ID = coba.ID_GOL_DRH');
    $this->db->join('dsosys_agama', 'dsosys_agama.ID = coba.ID_AGAMA');
    $this->db->join('dsosys_status_kawin', 'dsosys_status_kawin.ID = coba.ID_STATUS_KAWIN');
    $this->db->join('dsosys_pendidikan', 'dsosys_pendidikan.ID = coba.ID_PENDIDIKAN_SEDANG');
    $this->db->join('dsosys_pekerjaan', 'dsosys_pekerjaan.ID = coba.ID_PEKERJAAN');
    $this->db->join('dsosys_kota', 'dsosys_kota.ID = coba.ID_KABNKOTA');
    $this->db->join('dsosys_provinsi', 'dsosys_provinsi.ID = coba.ID_PROVINSI');
    $this->db->join('dsosys_status_kewarganegaraan', 'dsosys_status_kewarganegaraan.ID = coba.ID_KEWARGANEGARAAN');
    $this->db->join('dsosys_status_agt', 'dsosys_status_agt.ID = coba.ID_STATUS_AGT');
    $this->db->join('dsosys_kpl_anggota', 'dsosys_kpl_anggota.ID = dcoba.ID_KA');
    $this->db->join('dsosys_kpl_organisasi', 'dsosys_kpl_organisasi.ID = dcoba.ID_KO');
    $this->db->join('dsosys_pendidikan_kk', 'dsosys_pendidikan_kk.ID = coba.ID_PENDIDIKAN_KK');
    return $this->db->get()->row();
  }
  public function getKota($id)
  {
    $this->db->select("*");
    $this->db->from("dsosys_kota");
    $this->db->where("ID_PROV", $id);
    return $this->db->get()->result();
  }
  function buat_kode()
  {    
    $this->db->select('RIGHT(dsosys_account.REG_COM, 4) as kode', FALSE);
    $this->db->order_by('REG_COM','DESC');    
    $this->db->limit(1);    
    $query = $this->db->get('dsosys_account');
    if($query->num_rows() <> 0){          
      $data = $query->row();      
      $kode = intval($data->kode) + 1;    
    }
    else{
      $kode = 1;    
    }
    $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);    
    return $kodemax;  
  }
  
  public function getAllAnggota()
  {
    $this->db->select("*");
    $this->db->from("dsosys_account");
    return $this->db->get()->result();
  }

  public function getRecentAnggota()
  {
    $this->db->select("*");
    $this->db->from("dsosys_account");
    $this->db->order_by("REG_COM", "DESC");
    $this->db->limit(5);
    return $this->db->get()->result();
  }

  public function getCountAnggota()
  {
    $this->db->select("count(REG_COM) as total");
    $this->db->from("dsosys_account");
    $q = $this->db->get()->row();
    return $q->total;
  }
  public function getFoto($reg, $foto)
  {
    $this->db->select(''.$foto.' as foto');
    $this->db->from("dsosys_account");
    $this->db->where("REG_COM", $reg);
    $q = $this->db->get()->row();
    return $q->foto;
  }  

  public function addAnggota($ext, $ktp)
  {
    if ($ext == 'kosong') {
      $lala = $this->input->post('REG_COM').'.jpg';
    }else{
      $lala = $this->input->post('REG_COM').'.'.$ext;
    }

    if ($ktp == 'aa') {
      $hh = $this->input->post('REG_COM').'.jpg';
    }else{
      $hh = $this->input->post('REG_COM').'.'.$ktp;
    }

    $data = array(
      'REG_COM' => $this->input->post('REG_COM'),
      'RFID' => $this->input->post('RFID'),
      'NO_AGT' => $this->input->post('NO_AGT'),
      'NIK' => $this->input->post('NIK'),
      'TGL_MSK' => date('Y-m-d'),
      // 'TGL_KLR' => $this->input->post('TGL_KLR'),
      // 'TGL_SKAP' => $this->input->post('TGL_SKAP'),
      'NAMA_LENGKAP' => $this->input->post('NAMA_LENGKAP'),
      'TMP_LHR' => $this->input->post('TMP_LHR'),
      'TGL_LHR' => $this->input->post('TGL_LHR'),
      'ID_SEX' => $this->input->post('ID_SEX'),
      'ALMT_JALAN' => $this->input->post('ALMT_JALAN'),
      'KODE_POS' => $this->input->post('KODE_POS'),
      'RT' => $this->input->post('RT'),
      'RW' => $this->input->post('RW'),
      'DUSUN' => $this->input->post('DUSUN'),
      'DESANKELURAHAN' => $this->input->post('DESANKELURAHAN'),
      'KECAMATAN' => $this->input->post('KECAMATAN'),
      'ID_KABNKOTA' => $this->input->post('ID_KABNKOTA'),
      'ID_PROVINSI' => $this->input->post('ID_PROVINSI'),
      'ID_KEWARGANEGARAAN' => $this->input->post('ID_KEWARGANEGARAAN'),
      'TELEPON' => $this->input->post('TELEPON'),
      'ID_AGAMA' => $this->input->post('ID_AGAMA'),
      'ID_PENDIDIKAN_KK' => $this->input->post('ID_PENDIDIKAN_KK'),
      'ID_PENDIDIKAN_SEDANG' => $this->input->post('ID_PENDIDIKAN_SEDANG'),
      'ID_PEKERJAAN' => $this->input->post('ID_PEKERJAAN'),
      'ID_STATUS_KAWIN' => $this->input->post('ID_STATUS_KAWIN'),
      'ID_GOL_DRH' => $this->input->post('ID_GOL_DRH'),
      'ID_STATUS_AGT' => $this->input->post('ID_STATUS_AGT'),
      'FOTO' => $lala,
      'FOTO_KTP' => $hh,
      // 'AKTIF' => $this->input->post('AKTIF'),
      // 'BLOKIR' => $this->input->post('BLOKIR'),
      // 'KET_BLOKIR' => $this->input->post('KET_BLOKIR'),
      'WIL' => $this->input->post('WIL'),
      // 'TGL_UPDATE' => $this->input->post('TGL_UPDATE'),
      'INDIKATOR' => $this->input->post('INDIKATOR'),
    );
    return $this->db->insert("dsosys_account", $data);
  }

  public function addAnggotaDetail()
  {

    $data = array(
      'REG_COM' => $this->input->post('REG_COM'),
      'ID_KO' => $this->input->post('ID_KO'),
      'ID_KA' => $this->input->post('ID_KA'),
      'REFERENSI' => $this->input->post('REFERENSI'),
      'EKSTENSI' => $this->input->post('EKSTENSI'),
      'LEVEL' => $this->input->post('LEVEL'),
      'EMAIL' => $this->input->post('EMAIL'),
      'NIK_AYAH' => $this->input->post('NIK_AYAH'),
      'NIK_IBU' => $this->input->post('NIK_IBU'),
      'NAMA_AYAH' => $this->input->post('NAMA_AYAH'),
      'NAMA_IBU' => $this->input->post('NAMA_IBU'),
      'KODE_BANK' => $this->input->post('KODE_BANK'),
      'REK_BANK' => $this->input->post('REK_BANK'),
      'NAMA_SI' => $this->input->post('NAMA_SI'),
      'PHASIL_SI' => $this->input->post('PHASIL_SI'),

            //Detail Pekerjaan
      'KEAHLIAN' => $this->input->post('KEAHLIAN'),
      'KODE_USAHA' => $this->input->post('KODE_USAHA'),
      'KET_USAHA' => $this->input->post('KET_USAHA'),
      'ALAMAT_KRJ' => $this->input->post('ALAMAT_KRJ'),
      'KOTA_KRJ' => $this->input->post('KOTA_KRJ'),
      'TLP_KTR' => $this->input->post('TLP_KTR'),
      'NPWP' => $this->input->post('NPWP'),
      'KETERANGAN' => $this->input->post('KETERANGAN'),
      'CATATAN' => $this->input->post('CATATAN'),
      'KELORG' => $this->input->post('KELORG'),
      'INDIKATOR' => $this->input->post('INDIKATOR')
    );
    return $this->db->insert("dsosys_account_detail", $data);
  }

  public function editAnggotaDetail($REG_COM)
  {

    $data = array(
      'ID_KO' => $this->input->post('ID_KO'),
      'ID_KA' => $this->input->post('ID_KA'),
      'REFERENSI' => $this->input->post('REFERENSI'),
      'EKSTENSI' => $this->input->post('EKSTENSI'),
      'LEVEL' => $this->input->post('LEVEL'),
      'EMAIL' => $this->input->post('EMAIL'),
      'NIK_AYAH' => $this->input->post('NIK_AYAH'),
      'NIK_IBU' => $this->input->post('NIK_IBU'),
      'NAMA_AYAH' => $this->input->post('NAMA_AYAH'),
      'NAMA_IBU' => $this->input->post('NAMA_IBU'),
      'KODE_BANK' => $this->input->post('KODE_BANK'),
      'REK_BANK' => $this->input->post('REK_BANK'),
      'NAMA_SI' => $this->input->post('NAMA_SI'),
      'PHASIL_SI' => $this->input->post('PHASIL_SI'),

            //Detail Pekerjaan
      'KEAHLIAN' => $this->input->post('KEAHLIAN'),
      'KODE_USAHA' => $this->input->post('KODE_USAHA'),
      'KET_USAHA' => $this->input->post('KET_USAHA'),
      'ALAMAT_KRJ' => $this->input->post('ALAMAT_KRJ'),
      'KOTA_KRJ' => $this->input->post('KOTA_KRJ'),
      'TLP_KTR' => $this->input->post('TLP_KTR'),
      'NPWP' => $this->input->post('NPWP'),
      'KETERANGAN' => $this->input->post('KETERANGAN'),
      'CATATAN' => $this->input->post('CATATAN'),
      'KELORG' => $this->input->post('KELORG'),
      'INDIKATOR' => $this->input->post('INDIKATOR')
    );

    $this->db->where("REG_COM", $REG_COM);
    return $this->db->update("dsosys_account_detail", $data);
  }

  public function editAnggota($ext, $ktp, $REG_COM)
  {
    if ($ext == 'kosong' && $ktp != 'aa') {

    $data = array(
      'RFID' => $this->input->post('RFID'),
      'NO_AGT' => $this->input->post('NO_AGT'),
      'NIK' => $this->input->post('NIK'),
      'TGL_MSK' => date('Y-m-d'),
      // 'TGL_KLR' => $this->input->post('TGL_KLR'),
      // 'TGL_SKAP' => $this->input->post('TGL_SKAP'),
      'NAMA_LENGKAP' => $this->input->post('NAMA_LENGKAP'),
      'TMP_LHR' => $this->input->post('TMP_LHR'),
      'TGL_LHR' => $this->input->post('TGL_LHR'),
      'ID_SEX' => $this->input->post('ID_SEX'),
      'ALMT_JALAN' => $this->input->post('ALMT_JALAN'),
      'KODE_POS' => $this->input->post('KODE_POS'),
      'RT' => $this->input->post('RT'),
      'RW' => $this->input->post('RW'),
      'DUSUN' => $this->input->post('DUSUN'),
      'DESANKELURAHAN' => $this->input->post('DESANKELURAHAN'),
      'KECAMATAN' => $this->input->post('KECAMATAN'),
      'ID_KABNKOTA' => $this->input->post('ID_KABNKOTA'),
      'ID_PROVINSI' => $this->input->post('ID_PROVINSI'),
      'ID_KEWARGANEGARAAN' => $this->input->post('ID_KEWARGANEGARAAN'),
      'TELEPON' => $this->input->post('TELEPON'),
      'ID_AGAMA' => $this->input->post('ID_AGAMA'),
      'ID_PENDIDIKAN_KK' => $this->input->post('ID_PENDIDIKAN_KK'),
      'ID_PENDIDIKAN_SEDANG' => $this->input->post('ID_PENDIDIKAN_SEDANG'),
      'ID_PEKERJAAN' => $this->input->post('ID_PEKERJAAN'),
      'ID_STATUS_KAWIN' => $this->input->post('ID_STATUS_KAWIN'),
      'ID_GOL_DRH' => $this->input->post('ID_GOL_DRH'),
      'ID_STATUS_AGT' => $this->input->post('ID_STATUS_AGT'),
      'FOTO_KTP' => $this->input->post('REG_COM').'.'.$ktp,
      // 'AKTIF' => $this->input->post('AKTIF'),
      // 'BLOKIR' => $this->input->post('BLOKIR'),
      // 'KET_BLOKIR' => $this->input->post('KET_BLOKIR'),
      'WIL' => $this->input->post('WIL'),
      // 'TGL_UPDATE' => $this->input->post('TGL_UPDATE'),
      'INDIKATOR' => $this->input->post('INDIKATOR'),
    );

    }elseif ($ext != 'kosong' && $ktp != 'aa'){
     $data = array(
      'RFID' => $this->input->post('RFID'),
      'NO_AGT' => $this->input->post('NO_AGT'),
      'NIK' => $this->input->post('NIK'),
      'TGL_MSK' => date('Y-m-d'),
      // 'TGL_KLR' => $this->input->post('TGL_KLR'),
      // 'TGL_SKAP' => $this->input->post('TGL_SKAP'),
      'NAMA_LENGKAP' => $this->input->post('NAMA_LENGKAP'),
      'TMP_LHR' => $this->input->post('TMP_LHR'),
      'TGL_LHR' => $this->input->post('TGL_LHR'),
      'ID_SEX' => $this->input->post('ID_SEX'),
      'ALMT_JALAN' => $this->input->post('ALMT_JALAN'),
      'KODE_POS' => $this->input->post('KODE_POS'),
      'RT' => $this->input->post('RT'),
      'RW' => $this->input->post('RW'),
      'DUSUN' => $this->input->post('DUSUN'),
      'DESANKELURAHAN' => $this->input->post('DESANKELURAHAN'),
      'KECAMATAN' => $this->input->post('KECAMATAN'),
      'ID_KABNKOTA' => $this->input->post('ID_KABNKOTA'),
      'ID_PROVINSI' => $this->input->post('ID_PROVINSI'),
      'ID_KEWARGANEGARAAN' => $this->input->post('ID_KEWARGANEGARAAN'),
      'TELEPON' => $this->input->post('TELEPON'),
      'ID_AGAMA' => $this->input->post('ID_AGAMA'),
      'ID_PENDIDIKAN_KK' => $this->input->post('ID_PENDIDIKAN_KK'),
      'ID_PENDIDIKAN_SEDANG' => $this->input->post('ID_PENDIDIKAN_SEDANG'),
      'ID_PEKERJAAN' => $this->input->post('ID_PEKERJAAN'),
      'ID_STATUS_KAWIN' => $this->input->post('ID_STATUS_KAWIN'),
      'ID_GOL_DRH' => $this->input->post('ID_GOL_DRH'),
      'ID_STATUS_AGT' => $this->input->post('ID_STATUS_AGT'),
      'FOTO' => $this->input->post('REG_COM').'.'.$ext,
      'FOTO_KTP' => $this->input->post('REG_COM').'.'.$ktp,
      // 'AKTIF' => $this->input->post('AKTIF'),
      // 'BLOKIR' => $this->input->post('BLOKIR'),
      // 'KET_BLOKIR' => $this->input->post('KET_BLOKIR'),
      'WIL' => $this->input->post('WIL'),
      // 'TGL_UPDATE' => $this->input->post('TGL_UPDATE'),
      'INDIKATOR' => $this->input->post('INDIKATOR'),
    );

    }elseif ($ext != 'kosong' && $ktp == 'aa') {
     $data = array(
      'RFID' => $this->input->post('RFID'),
      'NO_AGT' => $this->input->post('NO_AGT'),
      'NIK' => $this->input->post('NIK'),
      'TGL_MSK' => date('Y-m-d'),
      // 'TGL_KLR' => $this->input->post('TGL_KLR'),
      // 'TGL_SKAP' => $this->input->post('TGL_SKAP'),
      'NAMA_LENGKAP' => $this->input->post('NAMA_LENGKAP'),
      'TMP_LHR' => $this->input->post('TMP_LHR'),
      'TGL_LHR' => $this->input->post('TGL_LHR'),
      'ID_SEX' => $this->input->post('ID_SEX'),
      'ALMT_JALAN' => $this->input->post('ALMT_JALAN'),
      'KODE_POS' => $this->input->post('KODE_POS'),
      'RT' => $this->input->post('RT'),
      'RW' => $this->input->post('RW'),
      'DUSUN' => $this->input->post('DUSUN'),
      'DESANKELURAHAN' => $this->input->post('DESANKELURAHAN'),
      'KECAMATAN' => $this->input->post('KECAMATAN'),
      'ID_KABNKOTA' => $this->input->post('ID_KABNKOTA'),
      'ID_PROVINSI' => $this->input->post('ID_PROVINSI'),
      'ID_KEWARGANEGARAAN' => $this->input->post('ID_KEWARGANEGARAAN'),
      'TELEPON' => $this->input->post('TELEPON'),
      'ID_AGAMA' => $this->input->post('ID_AGAMA'),
      'ID_PENDIDIKAN_KK' => $this->input->post('ID_PENDIDIKAN_KK'),
      'ID_PENDIDIKAN_SEDANG' => $this->input->post('ID_PENDIDIKAN_SEDANG'),
      'ID_PEKERJAAN' => $this->input->post('ID_PEKERJAAN'),
      'ID_STATUS_KAWIN' => $this->input->post('ID_STATUS_KAWIN'),
      'ID_GOL_DRH' => $this->input->post('ID_GOL_DRH'),
      'ID_STATUS_AGT' => $this->input->post('ID_STATUS_AGT'),
      'FOTO' => $this->input->post('REG_COM').'.'.$ext,
      // 'AKTIF' => $this->input->post('AKTIF'),
      // 'BLOKIR' => $this->input->post('BLOKIR'),
      // 'KET_BLOKIR' => $this->input->post('KET_BLOKIR'),
      'WIL' => $this->input->post('WIL'),
      // 'TGL_UPDATE' => $this->input->post('TGL_UPDATE'),
      'INDIKATOR' => $this->input->post('INDIKATOR'),
    );
    }else {
           $data = array(
      'RFID' => $this->input->post('RFID'),
      'NO_AGT' => $this->input->post('NO_AGT'),
      'NIK' => $this->input->post('NIK'),
      'TGL_MSK' => date('Y-m-d'),
      // 'TGL_KLR' => $this->input->post('TGL_KLR'),
      // 'TGL_SKAP' => $this->input->post('TGL_SKAP'),
      'NAMA_LENGKAP' => $this->input->post('NAMA_LENGKAP'),
      'TMP_LHR' => $this->input->post('TMP_LHR'),
      'TGL_LHR' => $this->input->post('TGL_LHR'),
      'ID_SEX' => $this->input->post('ID_SEX'),
      'ALMT_JALAN' => $this->input->post('ALMT_JALAN'),
      'KODE_POS' => $this->input->post('KODE_POS'),
      'RT' => $this->input->post('RT'),
      'RW' => $this->input->post('RW'),
      'DUSUN' => $this->input->post('DUSUN'),
      'DESANKELURAHAN' => $this->input->post('DESANKELURAHAN'),
      'KECAMATAN' => $this->input->post('KECAMATAN'),
      'ID_KABNKOTA' => $this->input->post('ID_KABNKOTA'),
      'ID_PROVINSI' => $this->input->post('ID_PROVINSI'),
      'ID_KEWARGANEGARAAN' => $this->input->post('ID_KEWARGANEGARAAN'),
      'TELEPON' => $this->input->post('TELEPON'),
      'ID_AGAMA' => $this->input->post('ID_AGAMA'),
      'ID_PENDIDIKAN_KK' => $this->input->post('ID_PENDIDIKAN_KK'),
      'ID_PENDIDIKAN_SEDANG' => $this->input->post('ID_PENDIDIKAN_SEDANG'),
      'ID_PEKERJAAN' => $this->input->post('ID_PEKERJAAN'),
      'ID_STATUS_KAWIN' => $this->input->post('ID_STATUS_KAWIN'),
      'ID_GOL_DRH' => $this->input->post('ID_GOL_DRH'),
      'ID_STATUS_AGT' => $this->input->post('ID_STATUS_AGT'),
      // 'AKTIF' => $this->input->post('AKTIF'),
      // 'BLOKIR' => $this->input->post('BLOKIR'),
      // 'KET_BLOKIR' => $this->input->post('KET_BLOKIR'),
      'WIL' => $this->input->post('WIL'),
      // 'TGL_UPDATE' => $this->input->post('TGL_UPDATE'),
      'INDIKATOR' => $this->input->post('INDIKATOR'),
    );
    }



    $this->db->where("REG_COM", $REG_COM);
    return $this->db->update("dsosys_account", $data);
  }

  public function deleteAnggota($REG_COM)
  {
    $this->db->delete("dsosys_account", array('REG_COM' => $REG_COM));
    return true;
  }

  public function datatableAnggota()
  {
    $array = array("REG_COM","NAMA_LENGKAP");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('REG_COM', $key);
      $this->db->or_like('NAMA_LENGKAP', $key);
      $this->db->or_like('ALMT_JALAN', $key);
      $this->db->or_like('WIL', $key);
      $this->db->or_like('AKTIF', $key);
      $this->db->or_like('TGL_MSK', $key);
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS *" ,FALSE);
    $this->db->from("dsosys_account");
    $this->db->order_by("AKTIF", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountAnggota();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      $check = '<input type="checkbox" class="checkitem">';
      $btn = '<div class="btn-group dropdown">
      <button type="button" class="btn btn-success dropdown-toggle btn-sm" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Pilih Aksi
      </button>';

      $btn .= '<div class="dropdown-menu" x-placement="bottom" style="position: absolute;">
      <form action="" method="post" enctype="multipart/form-data">
      <a href="'.site_url('Anggota/detail/'.$val->REG_COM).'" class="dropdown-item"><i class="mdi mdi-eye"></i> Detail</a>
      </form>
      <form action="" method="post" enctype="multipart/form-data" class="mt-1">
      <a href="'.site_url('Anggota/editAnggota/'.$val->REG_COM).'" class="dropdown-item"><i class="mdi mdi-pencil"></i> Edit</a>
      </form>
      <form action="" method="post" enctype="multipart/form-data" class="mt-1">
      <a href="" class="dropdown-item" style="color: red"><i class="mdi mdi-delete"></i> Hapus</a>
      </form>
      </div>
      </div>';

      $output['data'][] = array(
        $check,
        $val->REG_COM,
        $val->NAMA_LENGKAP,
        $val->ALMT_JALAN,
        $val->WIL,
        $val->AKTIF,
        $val->TGL_MSK,
        $btn
      );
    }
    return $output;
  }
}
