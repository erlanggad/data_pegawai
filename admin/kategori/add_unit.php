<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Id Unit</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id_bagian" name="id_bagian" placeholder="ID Unit" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi Golongan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="ket_bagian" name="ket_bagian" placeholder="Unit/Bagian">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=unit" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
        $sql_simpan = "INSERT INTO unit_bagian (id_bagian,ket_bagian) VALUES (
        '".$_POST['id_bagian']."',
        '".$_POST['ket_bagian']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=unit';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-unit';
          }
      })</script>";
    }}
     //selesai proses simpan data
