<?php 
require_once "../assets/dompdf/autoload.inc.php";
require_once "function.php";
$nisn = $_GET['nisn'];
$select = select("SELECT * FROM daftar WHERE nisn='$nisn'")or die(mysqli_error($con));

$html2 = '<body>
	<center>
		<table border="0" style="margin-bottom: 2%;">
			<tr>
				<td><img src="http://192.168.43.112/tets/logopenus.png" style="width: 100px; height: auto;"></td>
				<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td style="text-align: center;"><h3>FORMULIR PENDAFTARAN PESERTA DIDIK BARU <br>SMK PELITA NUSA JALANCAGAK <br>TAHUN DIKLAT 2020/2021</h3></td>
			</tr>
		</table>
	</center>
	<table border="0">
		<tr>
			<th>DATA PESERTA DIDIK</th>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td> : </td>
			<td>'.$select['nama'].'</td>
		</tr>
		<tr>
			<td>NISN</td>
			<td> : </td>
			<td>'.$select['nisn'].'</td>
		</tr>
		<tr>
			<td>Asal Sekolah</td>
			<td> : </td>
			<td>'.$select['asal_sekolah'].'</td>
		</tr>
		<tr>
			<td>Tempat, Tanggal Lahir</td>
			<td> : </td>
			<td>'.$select['tempat_lahir'].', '.$select['tanggal_lahir'].'</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td> : </td>
			<td>'.$select['jenis_kelamin'].'</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td> : </td>
			<td>'.$select['agama'].'</td>
		</tr>
		<tr>
			<td>Golongan Darah</td>
			<td> : </td>
			<td>'.$select['golongan_darah'].'</td>
		</tr>
		<tr>
			<td>Tinggal Di/Bersama</td>
			<td> : </td>
			<td>'.$select['tinggal'].'</td>
		</tr>
		<tr>
			<td style="vertical-align: top;">Alamat</td>
			<td style="vertical-align: top;"> : </td>
			<td>
				<table>
					<tr>
						<td>Jalan/Kampung</td>
						<td> : </td>
						<td>'.$select['kampung'].'</td>
					</tr>
					<tr>
						<td>RT</td>
						<td> : </td>
						<td>'.$select['rt'].'</td>
					</tr>
					<tr>
						<td>RW</td>
						<td> : </td>
						<td>'.$select['rw'].'</td>
					</tr>
					<tr>
						<td>Desa</td>
						<td> : </td>
						<td>'.$select['desa'].'</td>
					</tr>
					<tr>
						<td>Kecamatan</td>
						<td> : </td>
						<td>'.$select['kecamatan'].'</td>
					</tr>
					<tr>
						<td>Kabupaten</td>
						<td> : </td>
						<td>'.$select['kabupaten'].'</td>
					</tr>
					<tr>
						<td>Provinsi</td>
						<td> : </td>
						<td>'.$select['provinsi'].'</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<th>DATA ORANG TUA/WALI</th>
		</tr>
		<tr>
			<td>Nama Ayah</td>
			<td> : </td>
			<td>'.$select['nama_ayah'].'</td>
		</tr>
		<tr>
			<td>NIK Ayah</td>
			<td> : </td>
			<td>'.$select['nik_ayah'].'</td>
		</tr>
		<tr>
			<td>Nama Ibu</td>
			<td> : </td>
			<td>'.$select['nama_ibu'].'</td>
		</tr>
		<tr>
			<td>NIK Ibu</td>
			<td> : </td>
			<td>'.$select['nik_ibu'].'</td>
		</tr>
		<tr>
			<td>Nama Wali</td>
			<td> : </td>
			<td>'.$select['nama_wali'].'</td>
		</tr>
		<tr>
			<td>NIK Wali</td>
			<td> : </td>
			<td>'.$select['nik_wali'].'</td>
		</tr>
		<tr>
			<td>Pendidikan Ayah</td>
			<td> : </td>
			<td>'.$select['pend_ayah'].'</td>
		</tr>
		<tr>
			<td>Pendidikan Ibu</td>
			<td> : </td>
			<td>'.$select['pend_ibu'].'</td>
		</tr>
		<tr>
			<td>Pendidikan Wali</td>
			<td> : </td>
			<td>'.$select['pend_wali'].'</td>
		</tr>
		<tr>
			<td>Penghasilan Orang Tua</td>
			<td> : </td>
			<td>'.$select['penghasilan'].'</td>
		</tr>
		<tr>
			<td>Alamat Orang Tua</td>
			<td> : </td>
			<td>'.$select['alamat_ortu'].'</td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<th>DATA JURUSAN YANG DI PILIH</th>
		</tr>
	</table>
	<table>
		<tr>
			<td>Jurusan Yang Di Pilih</td>
			<td> : </td>
			<td>'.$select['kejuruan'].'</td>
		</tr>
		<tr>
			<td>Kesiapan Mondok Pesantren</td>
			<td> : </td>
			<td>'.$select['pondok'].'</td>
		</tr>
	</table>
	<br>
	<br>
		<br>
	<br>

	<br>
	<br>

	<br>
	<br>

	<table>
		<tr>
			<td style="text-align: center;">
				Menyetujui,<br>
				Orang&nbsp;Tua/Wali&nbsp;Siswa&nbsp;Pendaftar <br>	
				<br>
				<br>
				<br>
				<br>
				...........................
			</td>
			<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			
			<td style="text-align: center;">
				Subang, ......................<br>
				Siswa Pendaftar, <br>
				<br>
				<br>
				<br>
				<br>
				...........................
			</td>
		</tr>
	</table>
</body>
';
$html2 = $html2;
$date = date('His');

$nm = strtoupper($select['nama']);
$nm = str_replace(' ', '', $nm);

// $html = new \Mpdf\Mpdf();
// $html->WriteHtml($html2);
// $html->output('laporan.pdf');
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled',TRUE);
$dompdf = new Dompdf($options);
$dompdf->loadhtml($html2);
$dompdf->setPaper('Legal','Potrait');
$dompdf->render();
$dompdf->stream('PN'.'-'.$date.'-'.$nm.'.pdf');
 ?>