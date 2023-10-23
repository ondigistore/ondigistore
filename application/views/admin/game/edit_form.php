<!DOCTYPE html>
<html lang="en">
<a class="navbar-brand text-white" href="<?php echo site_url('admin')?>">GameStock</a>
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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/game/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->
							
							<input type="hidden" name="game_id" value="<?php echo $game->game_id?>" />

							<div class="form-group">
								<label for="jenis_game">Jenis Game*</label>
								<input class="form-control <?php echo form_error('jenis_game') ? 'is-invalid':'' ?>"
								 type="text" name="jenis_game" id="jenis_game" placeholder="Jenis Game" value="<?php echo $game->jenis_game ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jenis_game') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="nama_game">Nama Game*</label>
								<input class="form-control <?php echo form_error('nama_game') ? 'is-invalid':'' ?>"
								 type="text" name="nama_game" id="nama_game" placeholder="Nama Game" value="<?php echo $game->nama_game ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_game') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="gambar">Gambar*</label>
								<input class="form-control <?php echo form_error('gambar') ? 'is-invalid':'' ?>"
								 type="text" name="gambar" id="gambar" placeholder="gambar.jpg" value="<?php echo $game->gambar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('gambar') ?>
								</div>
							</div>


								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
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