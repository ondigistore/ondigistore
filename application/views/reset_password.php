<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-center mt-5 mx-auto p-4">
                <h1 class="h2">Reset Password</h1>
                <span class="m-2"><?php echo $this->session->flashdata('pesan')?></span>
                <p class="lead"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 mx-auto mt-5">
                <form action="<?php echo base_url('auth/reset_password_action') ?>" method="POST">
                    <div class="form-group">
                        <label for="password_baru">Password Baru</label>
                        <input id="password_baru" type="password" class="form-control" name="password_baru">
                        <?php echo form_error('password_baru','<div class="text-danger text-small">', '</div>')?>
                    </div>
                    <div class="form-group">
                        <label for="konfir_password">Konfirmasi Password</label>
                        <input id="konfir_password" type="password" class="form-control" name="konfir_password">
                        <?php echo form_error('konfirmasi_password', '<div class="text-danger text-small">', '</div>')?>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-success w-100" value="Reset Password" >
                    </div>
                    

                </form>
            </div>
        </div>
    </div>

</body>

</html>