<?php
$content = "
<html> 
<body>
<div style='position: absolute;'>
<img id='profileImage' width='80' height='80' src='".site_url('images/logo.png')."'
                                                          style='border: 1px solid gray;
                                                          margin-left: 100px;
                                                          margin-right: auto;
                                                          border-radius: 50%;'/>
                                                          </div>
<p style='text-align: center; font-size:17px;'>PT. LALALA LILILI</p>
<p style='text-align: center; line-height: 1px;padding-top: -10px'>Jl. Nusantara No. 189</p>
<p style='text-align: center; line-height: 1px;padding-top: -3px'>Telp (021)674853 Fax. (021). 654321</p>
<p style='text-align: center; line-height: 1px;padding-top: -3px'>Jakarta Selatan</p>
<div style='height: 2px; background-color: black; margin:0px 10px; '>
</div>
<table>
		<tr>
			<td style='height: 10px;'> </td>
		</tr>
		<tr>
			<td><p>5 Desember 2020</p></td>
		</tr>
</table>
<table style='width:100%;'>
		<tr>
			<td style='height: 10px;'> </td>
		</tr>
		<tr>
			<td style='width:10%'><p>Nomor</p></td>
			<td style='width:2%'><p>:</p></td>
			<td><p>187/AM/IX/2015</p></td>
		</tr>
		<tr>
			<td style='height: 10px;'> </td>
		</tr>
		<tr>
			<td><p>Lamp</p></td>
			<td><p>:</p></td>
			<td colspan='2'><p> -</p></td>
		</tr>
		<tr>
			<td><p>Hal</p></td>
			<td><p>:</p></td>
			<td colspan='2'><p> Pemberitahuan</p></td>
		</tr>
</table>
		<!-- KEDUA -->
<table>
		<tr>
			<td style='height: 20px;'> </td>
		</tr>
		<tr>
			<td><p>PT KARYA JAYA</p></td>
		</tr>
		<tr>
			<td><p>JL. Pahlawan No. 75</p></td>
		</tr>
		<tr>
			<td><p>Kebumen</p></td>
		</tr>

		<!-- SALAM PEMBUKA -->
		<tr>
			<td style='height: 20px;'> </td>
		</tr>
		<tr>
			<td><p>Dengan hormat</p></td>
		</tr>
		<tr>
			<td style='height: 10px;'> </td>
		</tr>
</table>

<!-- PARAGRAF -->

<table>
		<tr>
			<td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></td>
		</tr>
		<tr>
			<td style='height: 10px;'> </td>
		</tr>
		<tr>
			<td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p></td>
		</tr>
</table>
<!-- LIST -->

<table>
<tr>
			<td style='height: 10px;'> </td>
		</tr>
		<tr>
			<td style='vertical-align: top;'><p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
			<td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></td>
		</tr>
		<tr>
			<td style='vertical-align: top;'><p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
			<td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></td>
		</tr>
</table>

<!-- Penutup -->

<table>
		<tr>
			<td style='height: 10px;'> </td>
		</tr>
		<tr>
			<td><p>Demikian persoalan ini, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p></td>
		</tr>
</table>

<!-- PENUTUPAN -->
<br><br><br>
<table>
		<tr>
			<td style='height: 10px;'> </td>
		</tr>
		<tr>
			<td><p>Hormat aku,</p></td>
		</tr>
		<br><br><br><br><br>
		<tr>
			<td><p>Sapipana lala lala</p></td>
		</tr>
		<tr>
			<td><p>Pembantu</p></td>
		</tr>
</table>

</body>
</html>
";

require_once(APPPATH.'libraries\mpdf_v8.0.3-master\vendor\autoload.php'); 
$mpdf = new \Mpdf\Mpdf();
$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
$mpdf->WriteHTML($content);
$mpdf->Output();
?>