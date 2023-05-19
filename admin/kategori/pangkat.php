<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pangkat</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-pangkat" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Id Pangkat</th>
						<th>Deskripsi Pangkat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
              $sql = $koneksi->query("select * from pangkat");
              while ($data= $sql->fetch_assoc()) {
            ?>
					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['id_pangkat']; ?>
						</td>
						<td>
							<?php echo $data['deskripsi_pang']; ?>
						</td>
						<td>
							<a href="?page=edit-pangkat&kode=<?php echo $data['id_pangkat']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-pangkat&kode=<?php echo $data['id_pangkat']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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