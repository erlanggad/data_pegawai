<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM golongan WHERE id_gol='".$_GET['kode']."'";
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

        <input type='hidden' class="form-control" name="id_gol" value="<?php echo $data_cek['id_gol']; ?>"
			 readonly/>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi Golongan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="deskripsi_gol" name="deskripsi_gol" value="<?php echo $data_cek['deskripsi_gol']; ?>"
					/>
				</div>
			</div>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=golongan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php

    if (isset ($_POST['Ubah'])){
        $sql_ubah = "UPDATE golongan SET
        deskripsi_gol='".$_POST['deskripsi_gol']."'
        WHERE id_gol='".$_POST['id_gol']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=golongan';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=golongan';
        }
      })</script>";
    }}
?>

<script type="text/javascript">
    function change()
    {
    var x = document.getElementById('pass').type;

    if (x == 'password')
    {
        document.getElementById('pass').type = 'text';
        document.getElementById('mybutton').innerHTML;
    }
    else
    {
        document.getElementById('pass').type = 'password';
        document.getElementById('mybutton').innerHTML;
    }
    }
</script>