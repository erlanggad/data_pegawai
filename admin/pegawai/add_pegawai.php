<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">NUP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nup" name="nup" placeholder="NUP" required="required">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Nama Pegawai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pegawai" required>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-5">
					<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
						<option>- Pilih -</option>
						<option>Laki-Laki</option>
						<option>Perempuan</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Tempat Lahir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="ttl" name="ttl" placeholder="Tempat Lahir" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Agama</label>
				<div class="col-sm-5">
					<select name="agama" id="agama" class="form-control">
						<option>- Pilih -</option>
						<option>Islam</option>
						<option>Kristen</option>
						<option>Khatolik</option>
						<option>Hindu</option>
						<option>Budha</option>
						<option>Khonghucu</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Status Perkawinan</label>
				<div class="col-sm-5">
					<select name="kawin" id="kawin" class="form-control">
						<option>- Pilih -</option>
						<option>Sudah Kawin</option>
						<option>Belum Kawin</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">No Telepon</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="telepon" name="telepon" placeholder="No Telepon" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Email</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Alamat</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Pendidikan</label>
				<div class="col-sm-5">
					<select name="pendidikan" id="pendidikan" class="form-control">
						<option>- Pilih -</option>
						<option>SMA</option>
						<option>SMK</option>
						<option>Perguruan Tinggi</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Keterangan Pendidikan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan Pendidikan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Status Kepegawaian</label>
				<div class="col-sm-5">
					<select name="id_status" class="form-control" placeholder="Status" required="required">
						<?PHP
						$q = mysqli_query($koneksi,"select * from stat_pegawai order by ket_status asc");
						while($data = mysqli_fetch_array($q)){
						?>
						<option value='<?= $data['id_status'];?>'><?= $data['ket_status']; ?></option>
						<?php } 
						?> 
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">TMT</label>
				<div class="col-sm-5">
					<input type="DATE" class="form-control" id="tmt" name="tmt" placeholder="Tanggal CAOEG" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Tanggal Pegawai</label>
				<div class="col-sm-5">
					<input type="DATE" class="form-control" id="tgl_angkatan" name="tgl_angkatan" placeholder="Tanggal Pegawai" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Nomor SK</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_sk" name="no_sk" placeholder="NO SK Pegawai" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Jabatan</label>
				<div class="col-sm-5">
					<select name="id_jabatan" class="form-control" placeholder="Jabatan" required="required">
						<?PHP
						$q = mysqli_query($koneksi,"select * from jabatan order by deskripsi_jab asc");
						while($data = mysqli_fetch_array($q)){
						?>
						<option value='<?= $data['id_jabatan'];?>'><?= $data['deskripsi_jab']; ?></option>
						<?php } 
						?> 
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Unit / Bagian Kerja</label>
				<div class="col-sm-5">
					<select name="id_bagian" class="form-control" placeholder="Unit Bagian" required="required">
						<?PHP
						$q = mysqli_query($koneksi,"select * from unit_bagian order by ket_bagian asc");
						while($data = mysqli_fetch_array($q)){
						?>
						<option value='<?= $data['id_bagian'];?>'><?= $data['ket_bagian']; ?></option>
						<?php } 	
						?> 
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Pangkat</label>
				<div class="col-sm-5">
					<select name="id_pangkat" class="form-control" placeholder="Pangkat" required="required">
						<?PHP
						$q = mysqli_query($koneksi,"select * from pangkat order by deskripsi_pang asc");
						while($data = mysqli_fetch_array($q)){
						?>
						<option value='<?= $data['id_pangkat'];?>'><?= $data['deskripsi_pang']; ?></option>
						<?php }
						?> 
						</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Golongan</label>
				<div class="col-sm-5">
					<select name="id_gol" class="form-control" placeholder="Golongan" required="required">
							<?PHP
							$q = mysqli_query($koneksi,"select * from golongan order by deskripsi_gol asc");
							while($data = mysqli_fetch_array($q)){
							?>
							<option value='<?= $data['id_gol'];?>'><?= $data['deskripsi_gol']; ?></option>
							<?php } 
							?> 
						</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Masa Kerja </label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="masa_kerja" name="masa_kerja" placeholder="Masa Kerja" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Riwayat Pelatihan </label>
				<div class="col-sm-5">
					<textarea class="form-control" id="pelatihan" name="pelatihan" placeholder="Riwayat Pelatihan"></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Prestasi Kerja </label>
				<div class="col-sm-5">
					<textarea class="form-control" id="prestasi" name="prestasi" placeholder="Prestasi Kerja" ></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Wan Prestasi</label>
				<div class="col-sm-5">
					<textarea class="form-control" id="wan_prestasi" name="wan_prestasi" placeholder="Wan Prestasi Kerja"></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Status Kerja</label>
				<div class="col-sm-5">
					<select name="status_pensiun" id="status_pensiun" class="form-control">
						<option>- Pilih -</option>
						<option>Aktif</option>
						<option>Pensiun</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Foto Pegawai</label>
				<div class="col-sm-6">
					<input type="file" id="foto" name="foto">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pegawai" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>
<?php
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = 'foto/';
	$nama_file = @$_FILES['foto']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

    if (isset ($_POST['Simpan'])){

		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO data_karyawan (nup, nama, jenis_kelamin, ttl, tgl_lahir, agama, kawin, telepon, email, 
		alamat, pendidikan, keterangan, id_status, tmt, tgl_angkatan, no_sk, id_jabatan, id_bagian, id_pangkat, id_gol, masa_kerja, pelatihan, prestasi, wan_prestasi, status_pensiun, foto) VALUES (
            '".$_POST['nup']."',
			'".$_POST['nama']."',
			'".$_POST['jenis_kelamin']."',
			'".$_POST['ttl']."',
			'".$_POST['tgl_lahir']."',
			'".$_POST['agama']."',
			'".$_POST['kawin']."',
			'".$_POST['telepon']."',
			'".$_POST['email']."',
			'".$_POST['alamat']."',
			'".$_POST['pendidikan']."',
			'".$_POST['keterangan']."',
			'".$_POST['id_status']."',
			'".$_POST['tmt']."',
			'".$_POST['tgl_angkatan']."',
			'".$_POST['no_sk']."',
			'".$_POST['id_jabatan']."',
			'".$_POST['id_bagian']."',
			'".$_POST['id_pangkat']."',
			'".$_POST['id_gol']."',
			'".$_POST['masa_kerja']."',
			'".$_POST['pelatihan']."',
			'".$_POST['prestasi']."',
			'".$_POST['wan_prestasi']."',
			'".$_POST['status_pensiun']."',
            '".$nama_file."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pegawai';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-pegawai';
          }
      })</script>";
	}
	}elseif(empty($sumber)){
		echo "<script>
		Swal.fire({title: 'Gagal, Foto Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {
			if (result.value) {
				window.location = 'index.php?page=add-pegawai';
			}
		})</script>";
	}
	}
     //selesai proses simpan data
