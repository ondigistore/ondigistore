<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
                                        <th>Transaksi ID</th>
                                        <th>Product ID</th>
										<th>Pembayaran ID</th>
                                        <th>User ID</th>
										<th>Game ID</th>
										<th>Nama Product</th>
										<th>Total Harga</th>
										<th>Tanggal</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $transaksi_id=1; foreach ($transaksi as $transaksi): ?>
									<tr>
										<td width="150">
											<?php echo $transaksi_id++ ?>
										</td>
                                        <td>
											<?php echo $transaksi->product_id ?>
										</td>
										<td>
											<?php echo $transaksi->pembayaran_id ?>
										</td>
                                        <td>
											<?php echo $transaksi->user_id ?>
										</td>
										<td>
											<?php echo $transaksi->game_id ?>
										</td>
										<td>
											<?php echo $transaksi->name ?>
										</td>
										<td>
											<?php echo $transaksi->price ?>
										</td>

										<td>
											<?php echo $transaksi->tanggal ?>
										</td>
										<td>
											<a onclick="deleteConfirm('<?php echo site_url('admin/transaksi/delete/'.$transaksi->transaksi_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>
    <script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

</body>

</html>