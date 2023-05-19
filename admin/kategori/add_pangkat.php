<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Id Pangkat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id_pangkat" name="id_pangkat" placeholder="ID Pangkat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi Pangkat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="deskripsi_pang" name="deskripsi_pang" placeholder="Deskripsi Pangkat">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=pangkat" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
        $sql_simpan = "INSERT INTO pangkat (id_pangkat,deskripsi_pang) VALUES (
        '".$_POST['id_pangkat']."',
        '".$_POST['deskripsi_pang']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=pangkat';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-pangkat';
          }
      })</script>";
    }}
     //selesai proses simpan data
