<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-center mt-5 mx-auto p-4">
                <h1 class="h2">Login</h1>
                <span class="m-2"><?php echo $this->session->flashdata('pesan')?></span>
                <p class="lead"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 mx-auto mt-5">
                <form action="<?php echo base_url('auth/login') ?>" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username..">
                        <?php echo form_error('username','<div class="text-danger text-small">', '</div>')?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password..">
                        <?php echo form_error('password', '<div class="text-danger text-small">', '</div>')?>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                                <a href="<?php echo base_url('register') ?>">Register Account</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success w-100" value="Login" />
                    </div>
                    

                </form>
            </div>
        </div>
    </div>

</body>

</html>