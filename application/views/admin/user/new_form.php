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
						<a href="<?php echo site_url('admin/users/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/users/add') ?>" method="POST" enctype="multipart/form-data" >
						<div class="form-group">
								<label for="user_id">User ID*</label>
								<input class="form-control <?php echo form_error('user_id') ? 'is-invalid':'' ?>"
								 type="text" name="user_id" id="user_id" placeholder="User ID" />
								<div class="invalid-feedback">
									<?php echo form_error('user_id') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="username">Username*</label>
								<input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
								 type="text" name="username" id="username" placeholder="Username" />
								<div class="invalid-feedback">
									<?php echo form_error('username') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="password">Password*</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="text" name="password" id="password" placeholder="Password" />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="email">Email*</label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="text" name="email" id="email" placeholder="Email" />
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="full_name">Full Name*</label>
								<input class="form-control <?php echo form_error('full_name') ? 'is-invalid':'' ?>"
								 type="text" name="full_name" id="full_name" placeholder="Full Name" />
								<div class="invalid-feedback">
									<?php echo form_error('full_name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="phone">Phone*</label>
								<input class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>"
								 type="number" name="phone" id="phone" placeholder="Phone Number" />
								<div class="invalid-feedback">
									<?php echo form_error('phone') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="role">Role*</label>
								<input class="form-control <?php echo form_error('role') ? 'is-invalid':'' ?>"
								 type="number" name="role" id="role" min="1" max="2" placeholder="Role" />
								<div class="invalid-feedback">
									<?php echo form_error('role') ?>
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