
<!DOCTYPE html>
<html>

<head>
<center>
	<title>SI Data Pegawai</title>
	<h3>DATA REKAP PEGAWAI PDAM KAB. PROBOLINGGO TAHUN <?php echo date("Y");?></h3>
	</center>
</head>
</br>
<body>
	<?php 
	header("Content-type:application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pegawai.xls");
	$koneksi = new mysqli ("localhost","root","","data_pegawai");
	?>
 	<table border="1" style="width: 100%">
			<tr style="text-align:center;">
				<th width="3%" >No</th>
				<th width="5%">NUP</th>
				<th width="7%">Nama</th>
				<th width="5%">Jenis Kelamin</th>
				<th width="5%">TTL</th>
				<th width="5%">Agama</th>
				<th width="5%">Kawin</th>
				<th width="5%">Telepon</th>
				<th width="5%">Email</th>
				<th width="15%">Alamat</th>
				<th width="5%">Pendidikan</th>
				<th width="5%">Status</th>           
				<th width="5%">TMT</th>           
				<th width="5%">Tgl.Pegawai</th>           
				<th width="5%">No.SK</th>
				<th width="5%">Jabatan</th>
				<th width="5%">Unit Bagian</th>
				<th width="5%">Pangkat</th>
				<th width="5%">Golongan</th>
				<th width="5%">Masa Kerja</th>
				<th width="5%">Pelatihan</th>
				<th width="5%">Prestasi</th>
				<th width="5%">Wan Prestasi</th>
				<th width="5%">Ket. Pensiun</th>
			</tr>
		<?php 
		$no = 1;
		$sql_cek = mysqli_query($koneksi,"	SELECT data_karyawan.id_kar,
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
					FROM data_karyawan 
						INNER JOIN golongan ON data_karyawan.id_gol=golongan.id_gol 
						INNER JOIN jabatan ON data_karyawan.id_jabatan=jabatan.id_jabatan 
						INNER JOIN stat_pegawai ON data_karyawan.id_status=stat_pegawai.id_status 
						iNNER JOIN pangkat ON data_karyawan.id_pangkat=pangkat.id_pangkat 
						INNER JOIN unit_bagian ON data_karyawan.id_bagian=unit_bagian.id_bagian
					");
		while($dataa = mysqli_fetch_array($sql_cek)){
		?>
		
		<tr>
				<td style="text-align:center;"><?php echo $no++;?></td>
				<td style="text-align:center;"><?php echo $dataa['nup'];?></td>
				<td><?php echo $dataa['nama'];?></td>
				<td><?php echo $dataa['jenis_kelamin'];?></td>
				<td>
					<?php echo $dataa['ttl'];?>,<br><?php echo $dataa['tgl_lahir'];?>
				</td>
				<td style="text-align:center;"><?php echo $dataa['agama'];?></td>
				<td style="text-align:center;"><?php echo $dataa['kawin'];?></td>
				<td><?php echo $dataa['telepon'];?></td>
				<td><?php echo $dataa['alamat'];?></td>
				<td style="text-align:center;"><?php echo $dataa['pendidikan'];?></br><?php echo $dataa['keterangan'];?></td>
				<td style="text-align:center;"><?php echo $dataa['id_status'];?></td>
				<td style="text-align:center;"><?php echo $dataa['tmt'];?></td>
				<td style="text-align:center;"><?php echo $dataa['tgl_angkatan'];?></td>
				<td style="text-align:center;"><?php echo $dataa['no_sk'];?></td>
				<td style="text-align:center;"><?php echo $dataa['deskripsi_jab'];?></td>
				<td style="text-align:center;"><?php echo $dataa['ket_bagian'];?></td>
				<td style="text-align:center;"><?php echo $dataa['deskripsi_pang'];?></td>
				<td style="text-align:center;"><?php echo $dataa['deskripsi_gol'];?></td>
				<td><?php echo $dataa['masa_kerja'];?></td>
				<td><?php echo $dataa['pelatihan'];?></td>
				<td><?php echo $dataa['prestasi'];?></td>
				<td><?php echo $dataa['wan_prestasi'];?></td>
				<td style="text-align:center;"><?php echo $dataa['status_pensiun'];?></td>
				
		   </tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 </body>
</html>