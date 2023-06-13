<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT data_karyawan.id_kar,
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
		WHERE id_kar='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="card-header">
					<a href="?page=data-pegawai" class="btn btn-warning">Kembali</a>
					<a href="./report/cetak-pegawai.php?nup=<?php echo $data_cek['id_kar']; ?>" target=" _blank"
					 title="Cetak Data Pegawai" class="btn btn-primary">Print</a>
				</div>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Pegawai</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>NUP</b>
							</td>
							<td>:
								<?php echo $data_cek['nup']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama</b>
							</td>
							<td>:
								<?php echo $data_cek['nama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenis Kelamin</b>
							</td>
							<td>:
								<?php echo $data_cek['jenis_kelamin']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tempat Lahir</b>
							</td>
							<td>:
								<?php echo $data_cek['ttl']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Lahir</b>
							</td>
							<td>:
								<?php echo $data_cek['tgl_lahir']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Agama</b>
							</td>
							<td>:
								<?php echo $data_cek['agama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Status Perkawinan</b>
							</td>
							<td>:
								<?php echo $data_cek['kawin']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>No Telepon</b>
							</td>
							<td>:
								<?php echo $data_cek['telepon']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 200px">
								<b>Email</b>
							</td>
							<td>:
								<?php echo $data_cek['email']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alamat</b>
							</td>
							<td>:
								<?php echo $data_cek['alamat']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Pendidikan</b>
							</td>
							<td>:
								<?php echo $data_cek['pendidikan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 220px">
								<b>Keterangan Pendidikan</b>
							</td>
							<td>:
								<?php echo $data_cek['keterangan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Status Kepegawaian</b>
							</td>
							<td>:
								<?php echo $data_cek['ket_status']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>TMT</b>
							</td>
							<td>:
								<?php echo $data_cek['tmt']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Pegawai</b>
							</td>
							<td>:
								<?php echo $data_cek['tgl_angkatan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>No SK</b>
							</td>
							<td>:
								<?php echo $data_cek['no_sk']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jabatan</b>
							</td>
							<td>:
								<?php echo $data_cek['deskripsi_jab']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Unit / Bagian Kerja</b>
							</td>
							<td>:
								<?php echo $data_cek['ket_bagian']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Pangkat</b>
							</td>
							<td>:
								<?php echo $data_cek['deskripsi_pang']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Golongan</b>
							</td>
							<td>:
								<?php echo $data_cek['deskripsi_gol']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Masa Kerja</b>
							</td>
							<td>:
								<?php echo $data_cek['masa_kerja']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Pelatihan</b>
							</td>
							<td>:
								<?php echo $data_cek['pelatihan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Prestasi</b>
							</td>
							<td>:
								<?php echo $data_cek['prestasi']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Wan Prestasi</b>
							</td>
							<td>:
								<?php echo $data_cek['wan_prestasi']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Status Kerja</b>
							</td>
							<td>:
								<?php echo $data_cek['status_pensiun']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">
				<center>
					<h3 class="card-title">
					Foto Pegawai
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
					<img src="foto/<?php echo $data_cek['foto']; ?>" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['nup']; ?>
					-
					<?php echo $data_cek['nama']; ?>
				</h3>
			</div>
		</div>
	</div>

</div>