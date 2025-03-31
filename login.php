<!-- this is a login Form
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php #include'menu.php' ?>
	<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>

	<div class="container">
		<h2 align="center">LOGIN FORM</h2><br>
		<br>


		<form action="validation.php" method="post">
		<div class="form-group">
				<label>Email</label>
				<input type="email" id="emails" name="email" autocomplete="off" class="form-control">

		</div>
		<div class="form-group">
				<label>Password</label>
				<input type="password" id="pass1" name="password" autocomplete="off" class="form-control">
		</div>
		
		<button type="submit" class="btn btn-success">Login</button>
		</form>
	</div>

		
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
-->

<!-- bishal sir-->
<?php
/**
 * Created by PhpStorm.
 * User: Uv
 * Date: 11/27/2018
 * Time: 7:41 PM
 */
include('MainController.php') ?>

<html>
<head>
    <title>Register User</title>
    <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body class="table-light btn-outline-red">
<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-weight-bold">Login Demo</h4>
</div>

<form method="post" action="login.php">
    <?php include('errors.php'); ?>


    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <img src="bishal.jpg"
                     alt="avatar" class="rounded-circle img-responsive">
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" name="username" class="form-control validate" placeholder="Email">
                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>

            </div>
            <div class="text-center mt-4">
                <button class="btn btn-red mt-1" type="submit" name="login_user">Login
                    <i class="fa fa-sign-in ml-1"></i></button>
            </div>
        </div>
    </div>

    <div class="modal-footer d-flex justify-content-center">
        Not yet a member? <a href="register.php">Sign up</a>
    </div>
</form>
</body>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>