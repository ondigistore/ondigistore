	<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
                                <th>No</th>
                                <th>Detail ID </th>
                                <th>Pembayaran ID</th>
                                <th>Product ID</th>
                                <th>Game ID</th>
                                <th>Total Harga</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach ($laporan as $laporan): ?>
									<tr>
										<td width="150">
											<?php echo $no++ ?>
										</td>
                                        <td>
											<?php echo $laporan->detail_id ?>
										</td>
										<td>
											<?php echo $laporan->pembayaran_id ?>
										</td>
                                        <td>
											<?php echo $laporan->product_id ?>
										</td>
										<td>
											<?php echo $laporan->game_id ?>
										</td>
										<td>
											<?php echo $laporan->total_harga ?>
										</td>

										<td>
											<a onclick="deleteConfirm('<?php echo site_url('admin/laporan/delete/'.$laporan->detail_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
    <script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>