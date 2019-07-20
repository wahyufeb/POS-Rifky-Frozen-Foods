<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Masuk </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/custom/css/login.css">
</head>
<body>
    <div class="col-lg-4 col-md-10 col-sm-10 col-12 wrapper">
    <center>
    <span><h1>Login </h1>untuk melanjutkan</span>
    </center>
        <form action="<?=base_url()?>Login/proses_login" method="post">
            <div class="row" id="form-login">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button class="btn btn-primary" type="submit" id="masuk">Masuk</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="<?=base_url()?>assets/jquery/jquery.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</html>