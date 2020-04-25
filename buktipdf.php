<?php 
require_once __DIR__ . '/vendor/autoload.php';

require 'admin/koneksi2.php';


$mpdf = new \Mpdf\Mpdf([
				'mode' => 'utf-8',
				'format' => 'A4-L',
				'orientation' => 'L']);


$html = '<!DOCTYPE html>
<html>
<head>
	<title>Bukti</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bukti.css">
<body>';

		$data = mysqli_query($koneksi1,"select * from pengunjung order by nama desc limit 1 ");
		while ($d = mysqli_fetch_array($data)) {
			$html .='
		<table class="reservasi">
			<tr>
				<td width="320" class="text">'. $d['waktu'] .'</td>
				<td width="300" class="text">'. $d['jumlah_orang'] .'</td>
				<td width="255" class="text">'. $d['tanggal'] .'</td>
			</tr>
		</table>';

			$html.='
		<table class="penginap">
			<tr>
				<td width="310" class="text-ii">'. $d['nama'] .'</td>
				<td width="320" class="text-ii">'. $d['email'] .'</td>
				<td width="315" class="text-ii">'. $d['telepon'] .'</td>
			</tr>
		</table>';
		
		}
$html .='	
	
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->output();
 ?>