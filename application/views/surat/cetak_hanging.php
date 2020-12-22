<?php
$bulan = array (
	1 =>   'Januari',
	'Februari',
	'Maret',
	'April',
	'Mei',
	'Juni',
	'Juli',
	'Agustus',
	'September',
	'Oktober',
	'November',
	'Desember'
);
$pecahkan = explode('-', $surat->tgl);

$tgl = $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
if ($surat->lampiran == 0) {
	$l = "-";
}else {
	$l = $surat->lampiran;
}
$content = "
<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <title>S I P S</title>
  <!-- plugins:css -->
  <link rel='stylesheet' href='<?= site_url('assets/css/vendors/iconfonts/mdi/css/materialdesignicons.min.css'); ?>'>
  <link rel='stylesheet' href='<?= site_url('assets/css/vendors/iconfonts/puse-icons-feather/feather.css'); ?>'>
  <link rel='stylesheet' href='<?= site_url('assets/css/vendors/css/vendor.bundle.base.css'); ?>'>
  <link rel='stylesheet' href='<?= site_url('assets/css/vendors/css/vendor.bundle.addons.css'); ?>'>
  <link rel='stylesheet' href='<?= site_url('assets/css/style.css'); ?>'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='<?= site_url('assets/css/select2.css'); ?>'>
  <link rel='stylesheet' href='<?= site_url('assets/css/dataTables.bootstrap4.min.css'); ?>'>
  <link rel='stylesheet' href='<?= site_url('assets/sweetalert/sweetalert.css'); ?>'>

  <link href='https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css' rel='stylesheet' />
  <script src='https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js'></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css'>
</head>
<body>


";
if (!empty($surat->logo)) {
$content .= "<div style='position: absolute;'>
<img id='profileImage' width='80' height='80' src='".site_url('images/logo_surat/').$surat->logo."'
                                                          style='border: 1px solid gray;
                                                          margin-left: 100px;
                                                          margin-right: auto;
                                                          border-radius: 50%;'/>
                                                          </div>";

}

$content .= "
<p style='text-align: center; font-size:17px;'>".$surat->nama_instansi."</p>
<p style='text-align: center; line-height: 1px;padding-top: -10px'>".$surat->alamat."</p>
<p style='text-align: center; line-height: 1px;padding-top: -3px'>Telp. ".$surat->telp."</p>
<p style='text-align: center; line-height: 1px;padding-top: -3px'>".$surat->kota."</p>
<div style='height: 2px; background-color: black; margin:0px 10px; '>
</div>
<table style='width:100%;'>
<tr>
<td style='height: 10px;'> </td>
</tr>
<tr>
<td style='width:10%'><p>Nomor</p></td>
<td style='width:2%'><p>:</p></td>
<td><p>".$surat->nomor."</p></td>
<td style='text-align:right;'><p>".$tgl."</p></td>
</tr>
<tr>
<td style='height: 10px;'> </td>
</tr>
<tr>
<td><p>Lamp</p></td>
<td><p>:</p></td>
<td colspan='2'><p>".$l."</p></td>
</tr>
<tr>
<td><p>Hal</p></td>
<td><p>:</p></td>
<td colspan='2'><p>".$surat->perihal."</p></td>
</tr>
</table>
<!-- KEDUA -->
<table>
<tr>
<td style='height: 20px;'> </td>
</tr>
<tr>
<td><p>".$surat->nama_tujuan."</p></td>
</tr>
<tr>
<td><p>".$surat->alamat_tujuan."</p></td>
</tr>
<tr>
<td><p>".$surat->kota_tujuan."</p></td>
</tr>

<!-- SALAM PEMBUKA -->
<tr>
<td style='height: 20px;'> </td>
</tr>
<tr>
<td><p>".$surat->salam_pembuka.",</p></td>
</tr>
<tr>
<td style='height: 10px;'> </td>
</tr>
</table>";

$no = 1;
foreach ($this->m_surat->getAll($surat->id_isi) as $key) {
	if ($key->jenis == "par") {
		$content .="<table>
		<tr>
		<td><p>".$key->isi."</p></td>
		</tr>
		<tr>
		<td style='height: 10px;'> </td>
		</tr>
		</table>";
		$no = 1;
	}else {
		$content .="<table>
		<tr>
		<td style='height: 10px;'> </td>
		</tr>
		<tr>
		<td style='vertical-align: top;'><p>".$no.".&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
		<td><p>".$key->isi."</p></td>
		</tr>
		</table>";
		$no = $no + 1;
	}
}

$content .="<div style='width: 100%;'>
<div style='width: 30%; text-align: center; float:right;'>
<p style='margin-top:70px; '>".$surat->salam_penutup.",</p>
<p style='margin-top:90px;'>".$surat->nama."</p>
<p style='padding-top: -15px;'>".$surat->jabatan."</p>
</div>
</div>
</body>
</html>
";

require_once(APPPATH.'libraries\mpdf_v8.0.3-master\vendor\autoload.php'); 
$mpdf = new \Mpdf\Mpdf();
$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
$mpdf->WriteHTML($content);
$mpdf->Output();
?>