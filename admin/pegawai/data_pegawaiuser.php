<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pegawai</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
			<a href="report/cetakexcel.php" class="btn btn-success">
					<i class="fa fa-print"></i> Cetak </a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Foto</th>
						<th>NUP</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Agama</th>
						<th>Kawin</th>
						<th>Telepon</th>
						<th>E-mail</E-mail></th>
						<th>Alamat</th>
						<th>Pendidikan</th>
						<th>Keterangan</th>
						<th>Status Kepegawaian</th>
						<th>TMT</th>
						<th>Tanggal Pegawai</th>
						<th>Nomor SK</th>
						<th>Jabatan</th>
						<th>Unit/Bagian Kerja</th>
						<th>Pangkat</th>
						<th>Golongan</th>
						<th>Masa Kerja</th>
						<th>Riwayat Pelatihan</th>
						<th>Prestasi Kerja</th>
						<th>Wan Prestasi</th>
						<th>Status Kerja</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $d = mysqli_query($koneksi,"	SELECT 	data_karyawan.id_kar,
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
									FROM data_karyawan 
										INNER JOIN golongan ON data_karyawan.id_gol=golongan.id_gol 
										INNER JOIN jabatan ON data_karyawan.id_jabatan=jabatan.id_jabatan 
										INNER JOIN stat_pegawai ON data_karyawan.id_status=stat_pegawai.id_status 
										iNNER JOIN pangkat ON data_karyawan.id_pangkat=pangkat.id_pangkat 
										INNER JOIN unit_bagian ON data_karyawan.id_bagian=unit_bagian.id_bagian 
									");
			while($data = mysqli_fetch_array($d)){ 
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td align="center">
							<img src="foto/<?php echo $data['foto']; ?>" width="70px" />
						</td>
						<td>
							<?php echo $data['nup']; ?>
						</td>
						<td>
							<?php echo $data['nama']; ?>
						</td>
						<td>
							<?php echo $data['jenis_kelamin']; ?>
						</td>
						<td>
							<?php echo $data['ttl']; ?>
						</td>
						<td>
							<?php echo $data['tgl_lahir']; ?>
						</td>
						<td>
							<?php echo $data['agama']; ?>
						</td>
						<td>
							<?php echo $data['kawin']; ?>
						</td>
						<td>
							<?php echo $data['telepon']; ?>
						</td>
						<td>
							<?php echo $data['email']; ?>
						</td>
						<td>
							<?php echo $data['alamat']; ?>
						</td>
						<td>
							<?php echo $data['pendidikan']; ?>
						</td>
						<td>
							<?php echo $data['keterangan']; ?>
						</td>
						<td>
							<?php echo $data['ket_status']; ?>
						</td>
						<td>
							<?php echo $data['tmt']; ?>
						</td>
						<td>
							<?php echo $data['tgl_angkatan']; ?>
						</td>
						<td>
							<?php echo $data['no_sk']; ?>
						</td>
						<td>
							<?php echo $data['deskripsi_jab']; ?>
						</td>
						<td>
							<?php echo $data['ket_bagian']; ?>
						</td>
						<td>
							<?php echo $data['deskripsi_pang']; ?>
						</td>
						<td>
							<?php echo $data['deskripsi_gol']; ?>
						</td>
						<td>
							<?php echo $data['masa_kerja']; ?>
						</td>
						<td>
							<?php echo $data['pelatihan']; ?>
						</td>
						<td>
							<?php echo $data['prestasi']; ?>
						</td>
						<td>
							<?php echo $data['wan_prestasi']; ?>
						</td>
						<td>
							<?php echo $data['status_pensiun']; ?>
						</td>

						<td>
							<a href="?page=view-pegawai-user&kode=<?php echo $data['id_kar']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
						
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->