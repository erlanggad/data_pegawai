<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Unit</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-unit" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Id Unit</th>
						<th>Deskripsi Unit</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
              $sql = $koneksi->query("select * from unit_bagian");
              while ($data= $sql->fetch_assoc()) {
            ?>
					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['id_bagian']; ?>
						</td>
						<td>
							<?php echo $data['ket_bagian']; ?>
						</td>
						<td>
							<a href="?page=edit-unit&kode=<?php echo $data['id_bagian']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-unit&kode=<?php echo $data['id_bagian']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
								</>
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