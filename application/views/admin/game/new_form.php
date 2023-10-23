<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/game/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/game/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="game_id">Game ID*</label>
								<input class="form-control <?php echo form_error('game_id') ? 'is-invalid':'' ?>"
								 type="text" name="game_id" id="game_id" placeholder="Game ID">
								<div class="invalid-feedback">
									<?php echo form_error('game_id') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jenis_game">Jenis Game*</label>
								<input class="form-control <?php echo form_error('jenis_game') ? 'is-invalid':'' ?>"
								 type="text" name="jenis_game" id="jenis_game" placeholder="Jenis Game">
								<div class="invalid-feedback">
									<?php echo form_error('jenis_game') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="nama_game">Nama Game*</label>
								<input class="form-control <?php echo form_error('nama_game') ? 'is-invalid':'' ?>"
								 name="nama_game" id="nama_game" placeholder="Nama Game">
								<div class="invalid-feedback">
									<?php echo form_error('nama_game') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="gambar">Gambar*</label>
								<input class="form-control <?php echo form_error('gambar') ? 'is-invalid':'' ?>"
								 name="gambar" id="gambar" placeholder="gambar.jpg">
								<div class="invalid-feedback">
									<?php echo form_error('gambar') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save">
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>