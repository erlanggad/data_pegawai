<?php
	include "../inc/koneksi.php";
	
	$nup = $_GET['nup'];

	$sql_cek = "SELECT * FROM tb_profil";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
	{
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CETAK DATA PEGAWAI</title>
	<link rel="icon" href="dist/img/logopdam.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
	
</head>

<body>
	<center>

		<h2>
			<?php echo $data_cek['nama_profil']; ?>
		</h2>
		<h3>
			<?php echo $data_cek['alamat']; ?>
			<hr / size="2px" color="black">

			<?php
			}

			$sql_tampil = "SELECT data_karyawan.id_kar,
						data_karyawan.foto, 
						data_karyawan.nup, 
						data_karyawan.nama, 
						data_karyawan.jenis_kelamin, 
						data_karyawan.ttl, 
						data_karyawan.tgl_lahir, 
						data_karyawan.agama, 
						data_karyawan.kawin, 
						data_karyawan.telepon, 
						data_karyawan.email, 
						data_karyawan.alamat, 
						data_karyawan.pendidikan, 
						data_karyawan.keterangan,
						data_karyawan.id_status, 											
						data_karyawan.tmt,
						data_karyawan.tgl_angkatan,
						data_karyawan.no_sk, 
						data_karyawan.id_jabatan, 
						data_karyawan.id_bagian, 
						data_karyawan.id_pangkat, 
						data_karyawan.id_gol, 
						data_karyawan.masa_kerja, 
						data_karyawan.pelatihan, 
						data_karyawan.prestasi, 
						data_karyawan.wan_prestasi, 
						data_karyawan.status_pensiun, 
						golongan.id_gol, 
						golongan.deskripsi_gol, 
						jabatan.id_jabatan, 
						jabatan.deskripsi_jab, 
						stat_pegawai.id_status, 
						stat_pegawai.ket_status, 
						pangkat.id_pangkat, 
						pangkat.deskripsi_pang, 
						unit_bagian.id_bagian, 
						unit_bagian.ket_bagian
			from data_karyawan 
						INNER JOIN golongan ON data_karyawan.id_gol=golongan.id_gol 
						INNER JOIN jabatan ON data_karyawan.id_jabatan=jabatan.id_jabatan 
						INNER JOIN stat_pegawai ON data_karyawan.id_status=stat_pegawai.id_status 
						iNNER JOIN pangkat ON data_karyawan.id_pangkat=pangkat.id_pangkat 
						INNER JOIN unit_bagian ON data_karyawan.id_bagian=unit_bagian.id_bagian 
			where nup='$nup'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>DATA PEGAWAI</u>
		</h4>
	</center>

	<table border="1" cellspacing="0" style="width: 60%" align="center">
		<tbody>
			<tr>
				<td>NUP</td>
				<td>:</td>
				<td>
					<?php echo $data['nup']; ?>
				</td>
				<td rowspan="6" align="center">
					<img src="../foto/<?php echo $data['foto']; ?>" width="200px" />
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<?php echo $data['jenis_kelamin']; ?>
				</td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td>
					<?php echo $data['ttl']; ?>
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td>
					<?php echo $data['agama']; ?>
				</td>
			</tr>
			<tr>
				<td>Status Perkawinan</td>
				<td>:</td>
				<td>
					<?php echo $data['kawin']; ?>
				</td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td>:</td>
				<td>
					<?php echo $data['telepon']; ?>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<?php echo $data['email']; ?>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<?php echo $data['alamat']; ?>
				</td>
			</tr>
			<tr>
				<td>Pendidikan</td>
				<td>:</td>
				<td>
					<?php echo $data['pendidikan']; ?>
				</td>
			</tr>
			<tr>
				<td>Keterangan Pendidikan</td>
				<td>:</td>
				<td>
					<?php echo $data['keterangan']; ?>
				</td>
			</tr>
			<tr>
				<td>Status Kepegawaian</td>
				<td>:</td>
				<td>
					<?php echo $data['ket_status']; ?>
				</td>
			</tr>
			<tr>
				<td>TMT</td>
				<td>:</td>
				<td>
					<?php echo $data['tmt']; ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Pegawai</td>
				<td>:</td>
				<td>
					<?php echo $data['tgl_angkatan']; ?>
				</td>
			</tr>
			<tr>
				<td>No SK</td>
				<td>:</td>
				<td>
					<?php echo $data['no_sk']; ?>
				</td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td>
					<?php echo $data['deskripsi_jab']; ?>
				</td>
			</tr>
			<tr>
				<td>Unit / Bagian Kerja</td>
				<td>:</td>
				<td>
					<?php echo $data['ket_bagian']; ?>
				</td>
			</tr>
			<tr>
				<td>Pangkat</td>
				<td>:</td>
				<td>
					<?php echo $data['deskripsi_pang']; ?>
				</td>
			</tr>
			<tr>
				<td>Golongan</td>
				<td>:</td>
				<td>
					<?php echo $data['deskripsi_gol']; ?>
				</td>
			</tr>
			<tr>
				<td>Masa Kerja</td>
				<td>:</td>
				<td>
					<?php echo $data['masa_kerja']; ?>
				</td>
			</tr>
			<tr>
				<td>Pelatihan</td>
				<td>:</td>
				<td>
					<?php echo $data['pelatihan']; ?>
				</td>
			</tr>
			<tr>
				<td>Prestasi</td>
				<td>:</td>
				<td>
					<?php echo $data['prestasi']; ?>
				</td>
			</tr>
			<tr>
				<td>Wan Prestasi</td>
				<td>:</td>
				<td>
					<?php echo $data['wan_prestasi']; ?>
				</td>
			</tr>
			<tr>
				<td>Status Kerja</td>
				<td>:</td>
				<td>
					<?php echo $data['status_pensiun']; ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>


	<script>
		window.print();
	</script>

</body>

</html>