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

$content = "
<html> 
<body>
<p>".$surat->tempat.", ".$tgl."</p>
<p style='margin-top:40px;'>Untuk ".$surat->nama_tujuan."</p>
<p>Di ".$surat->kota_tujuan."</p>

<p style='margin-top:40px;'>Salam kangen,</p>";
$no = 1;
foreach ($this->m_surat->getAll($surat->id_isi) as $key) {
if ($key->jenis == "par") {
	$content .="<p style='margin-top: 10px;'>".$key->isi."</p>";
	$no = 1;
}else {
	$content .="<p style='margin-top: 10px;'>".$no.".&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$key->isi."</p>";
	$no = $no + 1;
}
}



$content .= "<p style='margin-top:70px;'>".$surat->salam_penutup.",</p>
<p style='margin-top:80px;'>".$surat->nama."</p>
</body>
</html>
";

require_once(APPPATH.'libraries\mpdf_v8.0.3-master\vendor\autoload.php'); 
$mpdf = new \Mpdf\Mpdf();
$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
$mpdf->WriteHTML($content);
$mpdf->Output();
?>