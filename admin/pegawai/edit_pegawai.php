<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM data_karyawan WHERE id_kar='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

		<input type='hidden' class="form-control" name="id_kar" value="<?php echo $data_cek['id_kar']; ?>"
			 readonly/>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">NUP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nup" name="nup" value="<?php echo $data_cek['nup']; ?>"
					 />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Nama Pegawai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-5">
					<select name="jenis_kelamin" id="jenis_kelamin" class="form-control"> value="<?php echo $data_cek['jenis_kelamin']; ?>"
						<option>- Pilih -</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['jenis_kelamin'] == "Laki-Laki") echo "<option value='Laki-Laki' selected>Laki-Laki</option>";
                else echo "<option value='Laki-Laki'>Laki-Laki</option>";

                if ($data_cek['jenis_kelamin'] == "Perempuan") echo "<option value='Perempuan' selected>Perempuan</option>";
                else echo "<option value='Perempuan'>Perempuan</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Tempat Lahir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="ttl" name="ttl" value="<?php echo $data_cek['ttl']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $data_cek['tgl_lahir']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Agama</label>
				<div class="col-sm-5">
					<select name="agama" id="agama" class="form-control"> 
						<option>- Pilih -</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['agama'] == "Islam") echo "<option value='Islam' selected>Islam</option>";
                else echo "<option value='Islam'>Islam</option>";

                if ($data_cek['agama'] == "Kristen") echo "<option value='Kristen' selected>Kristen</option>";
                else echo "<option value='Kristen'>Kristen</option>";

				if ($data_cek['agama'] == "Khatolik") echo "<option value='Khatolik' selected>Khatolik</option>";
                else echo "<option value='Khatolik'>Khatolik</option>";

				if ($data_cek['agama'] == "Hindu") echo "<option value='Hindu' selected>Hindu</option>";
                else echo "<option value='Hindu'>Hindu</option>";

				if ($data_cek['agama'] == "Budha") echo "<option value='Budha' selected>Budha</option>";
                else echo "<option value='Budha'>Budha</option>";

				if ($data_cek['agama'] == "Khonghucu") echo "<option value='Khonghucu' selected>Khonghucu</option>";
                else echo "<option value='Khonghucu'>Khonghucu</option>";
						?>
						</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Status Perkawinan</label>
				<div class="col-sm-5">
					<select name="kawin" id="kawin" class="form-control">
						<option>- Pilih -</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['kawin'] == "Sudah Kawin") echo "<option value='Sudah Kawin' selected>Sudah Kawin</option>";
                else echo "<option value='Sudah Kawin'>Sudah Kawin</option>";

                if ($data_cek['kawin'] == "Belum Kawin") echo "<option value='Belum Kawin' selected>Belum Kawin</option>";
                else echo "<option value='Belum Kawin'>Belum Kawin</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">No Telepon</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $data_cek['telepon']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Email</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="email" name="email" value="<?php echo $data_cek['email']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Alamat</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Pendidikan</label>
				<div class="col-sm-5">
					<select name="pendidikan" id="pendidikan" class="form-control">
						<option>- Pilih -</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['pendidikan'] == "SMA") echo "<option value='SMA' selected>SMA</option>";
                else echo "<option value='SMA'>SMA</option>";

                if ($data_cek['pendidikan'] == "SMK") echo "<option value='SMK' selected>SMK</option>";
                else echo "<option value='SMK'>SMK</option>";

				if ($data_cek['pendidikan'] == "Perguruan Tinggi") echo "<option value='Perguruan Tinggi' selected>Perguruan Tinggi</option>";
                else echo "<option value='Perguruan Tinggi'>Perguruan Tinggi</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Keterangan Pendidikan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $data_cek['keterangan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Status Kepegawaian</label>
			<div class="col-sm-5">
						<p>
							<select name="id_status" class="form-control" placeholder="Status" required="required">
								<?PHP
								$status = $data_cek['id_status'];
								$q2 = mysqli_query($koneksi,"select * from stat_pegawai order by ket_status asc");
								while($dt2 = mysqli_fetch_array($q2)){
								?>
								<option value='<?= $dt2['id_status'];?>' <?php if($dt2['id_status'] ==$status){echo "selected";} ?>><?= $dt2['id_status']." - ".$dt2['ket_status']; ?></option>
								<?php } 
								?> 
							</select>
						</p>
						</div>
				</div>
			
			<div class="form-group row">
				<label class="col-sm-3 col-form-label">TMT</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt" name="tmt" value="<?php echo $data_cek['tmt']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Tanggal Pegawai</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_angkatan" name="tgl_angkatan" value="<?php echo $data_cek['tgl_angkatan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">NO SK</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_sk" name="no_sk" value="<?php echo $data_cek['no_sk']; ?>"
					/>
				</div>
			</div>
			
			

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Jabatan</label>
				<div class="col-sm-5">
						<p>
							<select name="id_jabatan" class="form-control" placeholder="Jabatan" required="required">
								<?PHP
								$id_jabatan = $data_cek['id_jabatan'];
								$q1 = mysqli_query($koneksi,"select * from jabatan order by deskripsi_jab asc");
								while($dt1 = mysqli_fetch_array($q1)){
								?>
								<option value='<?= $dt1['id_jabatan'];?>' <?php if($dt1['id_jabatan'] ==$id_jabatan){echo "selected";}?> ><?= $dt1['id_jabatan']." - ".$dt1['deskripsi_jab']; ?></option>
								<?php } 
								?> 
							</select>
						</p>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Unit / Bagian Kerja</label>
					<div class="col-sm-5">
						<p>
							<select name="id_bagian" class="form-control" placeholder="Unit Bagian" required="required">
								<?PHP
								$id_bagian=$data_cek['id_bagian'];
								$q = mysqli_query($koneksi,"select * from unit_bagian order by ket_bagian asc");
								while($data = mysqli_fetch_array($q)){
								?>
								<option value='<?= $data['id_bagian'];?>'<?php if($data['id_bagian'] ==$id_bagian){echo "selected";}?> ><?= $data['id_bagian']." - ".$data['ket_bagian']; ?></option>
								<?php } 	
								?> 
							</select>
						</p>
					</div>
				</div>

				<div class="form-group row">
				<label class="col-sm-3 col-form-label">Pangkat</label>
				<div class="col-sm-5">
					<p>
						<select name="id_pangkat" class="form-control" placeholder="Pangkat" required="required">
							<?PHP
							$id_pangkat=$data_cek['id_pangkat'];
							$q = mysqli_query($koneksi,"select * from pangkat order by deskripsi_pang asc");
							while($data = mysqli_fetch_array($q)){
							?>
							<option value='<?= $data['id_pangkat'];?>'<?php if($data['id_pangkat'] ==$id_pangkat){echo "selected";}?> ><?= $data['id_pangkat']." - ".$data['deskripsi_pang']; ?></option>
							<?php }
							?> 
							</select>
						</p>
					</div>
				</div>

				
				<div class="form-group row">
				<label class="col-sm-3 col-form-label">Golongan</label>
				<div class="col-sm-5">
						<p>
							<select name="id_gol" class="form-control" placeholder="Golongan" required="required">
								<?PHP
								$id_gol = $data_cek['id_gol'];
								$q5 = mysqli_query($koneksi,"select * from golongan order by deskripsi_gol asc");
								while($dt5 = mysqli_fetch_array($q5)){
								?>
								<option value='<?= $dt5['id_gol'];?>' <?php if($dt5['id_gol'] ==$id_gol){echo "selected";} ?>><?= $dt5['id_gol']." - ".$dt5['deskripsi_gol']; ?></option>
								<?php } 
								?> 
							</select>
						</p>
						</div>
				</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Masa Kerja</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="masa_kerja" name="masa_kerja" value="<?php echo $data_cek['masa_kerja']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Riwayat Pelatihan</label>
				<div class="col-sm-6">
				<textarea class="form-control" name="pelatihan"><?php echo $data_cek['pelatihan']; ?></textarea>
				</div>
			</div>

			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Prestasi Kerja</label>
				<div class="col-sm-6">
				<textarea class="form-control" name="prestasi" ><?php echo $data_cek['prestasi']; ?></textarea>
				</div>
			</div>
			<div class="form-group row">
			<label class="col-sm-3 col-form-label">WanPrestasi</label>
				<div class="col-sm-6">
				<textarea class="form-control" name="wan_prestasi"><?php echo $data_cek['wan_prestasi']; ?></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Status Kerja</label>
				<div class="col-sm-5">
					<select name="status_pensiun" id="status_pensiun" class="form-control">
						<option>- Pilih -</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['status_pensiun'] == "Aktif") echo "<option value='Aktif' selected>Aktif</option>";
                else echo "<option value='Aktif'>Aktif</option>";

                if ($data_cek['status_pensiun'] == "Pensiun") echo "<option value='Pensiun' selected>Pensiun</option>";
                else echo "<option value='Pensiun'>Pensiun</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Foto Pegawai</label>
				<div class="col-sm-6">
					<img src="foto/<?php echo $data_cek['foto']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Ubah Foto</label>
				<div class="col-sm-6">
					<input type="file" id="foto" name="foto">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pegawai" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = 'foto/';
	$nama_file = @$_FILES['foto']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

	
if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $foto= $data_cek['foto'];
            if (file_exists("foto/$foto")){
            unlink("foto/$foto");}

        $sql_ubah = "UPDATE data_karyawan SET
			nama='".$_POST['nama']."',
			nup='".$_POST['nup']."',
			jenis_kelamin='".$_POST['jenis_kelamin']."',
			ttl='".$_POST['ttl']."',
			tgl_lahir='".$_POST['tgl_lahir']."',
			agama='".$_POST['agama']."',
			kawin='".$_POST['kawin']."',
			telepon='".$_POST['telepon']."',
			email='".$_POST['email']."',
			alamat='".$_POST['alamat']."',
			pendidikan='".$_POST['pendidikan']."',
			keterangan='".$_POST['keterangan']."',
			id_status='".$_POST['id_status']."',
			tmt='".$_POST['tmt']."',
			tgl_angkatan='".$_POST['tgl_angkatan']."',
			no_sk='".$_POST['no_sk']."',
			id_jabatan='".$_POST['id_jabatan']."',
			id_bagian='".$_POST['id_bagian']."',
			id_pangkat='".$_POST['id_pangkat']."',
			id_gol='".$_POST['id_gol']."',
			masa_kerja='".$_POST['masa_kerja']."',
			pelatihan='".$_POST['pelatihan']."',
			prestasi='".$_POST['prestasi']."',
			wan_prestasi='".$_POST['wan_prestasi']."',
			status_pensiun='".$_POST['status_pensiun']."',
			foto='".$nama_file."'		
            WHERE id_kar='".$_POST['id_kar']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
		$sql_ubah = "UPDATE data_karyawan SET
			nup='".$_POST['nup']."',
			nama='".$_POST['nama']."',
			jenis_kelamin='".$_POST['jenis_kelamin']."',
			ttl='".$_POST['ttl']."',
			tgl_lahir='".$_POST['tgl_lahir']."',
			agama='".$_POST['agama']."',
			kawin='".$_POST['kawin']."',
			telepon='".$_POST['telepon']."',
			email='".$_POST['email']."',
			alamat='".$_POST['alamat']."',
			pendidikan='".$_POST['pendidikan']."',
			keterangan='".$_POST['keterangan']."',
			id_status='".$_POST['id_status']."',
			tmt='".$_POST['tmt']."',
			tgl_angkatan='".$_POST['tgl_angkatan']."',
			no_sk='".$_POST['no_sk']."',
			id_jabatan='".$_POST['id_jabatan']."',
			id_bagian='".$_POST['id_bagian']."',
			id_pangkat='".$_POST['id_pangkat']."',
			id_gol='".$_POST['id_gol']."',
			masa_kerja='".$_POST['masa_kerja']."',
			pelatihan='".$_POST['pelatihan']."',
			prestasi='".$_POST['prestasi']."',
			wan_prestasi='".$_POST['wan_prestasi']."',
			status_pensiun='".$_POST['status_pensiun']."',
			foto='".$nama_file."'		
            WHERE id_kar='".$_POST['id_kar']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pegawai';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pegawai';
            }
        })</script>";
    }
}

