<!--this is for form
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>

	<h3 align="center">Cosmos College Of Management and Technology</h3>
	<h4 align="center">Enter the follwing form to Sign up.</h4>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post" onsubmit="return validation()">
			<div class="form-group">
				<label>First Name</label>
				<input type="text" id="finame" name="fname" autocomplete="off" class="form-control">
				<span id="firstname" class="text-danger font-weight-bold"></span>
			</div>
			<div class="form-group">
				<label>Last Name</label>
				<input type="text" id="laname" name="lname" autocomplete="off" class="form-control">
				<span id="lastname" class="text-danger font-weight-bold"></span>

			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" id="emails" name="email" autocomplete="off" class="form-control">
				<span id="emailname" class="text-danger font-weight-bold"></span>

			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" id="pass1" name="password" autocomplete="off" class="form-control">
				<span id="pass" class="text-danger font-weight-bold"></span>

			</div>
			<div class="form-group">
				<label>Enter Password Again</label>
				<input type="password" id="pass2" name="password" autocomplete="off" class="form-control">
				<span id="conpass" class="text-danger font-weight-bold"></span>

			</div>

			<button type="submit" class="btn btn-success">Sign Up</button>

		</form>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</body>
</html>
-->

<!-- Font Awesome
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/css/mdb.min.css" rel="stylesheet">-->

<?php
/**
 * Created by PhpStorm.
 * User: Uv
 * Date: 11/27/2018
 * Time: 7:41 PM
 */
include('MainController.php')
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-weight-bold">Register Demo</h4>
</div>
<form method="post" action="register.php">
    <?php include('errors.php'); ?>


    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="orangeForm-name" name="username" value="<?php echo $username; ?>" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-name">Your Name</label>
                </div>
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="orangeForm-email" name="email" value="<?php echo $email; ?>" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-email">Your Email</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="orangeForm-pass" name="password_1" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-pass">Your Password</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="orangeForm-pass" name="password_2" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-pass">confirm Password</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange" class="btn" name="reg_user">Sign up</button>
            </div>
        </div>
    </div>

    <div class="modal-footer d-flex justify-content-center">
        Already a member? <a href="login.php">Sign in</a>
    </div>

</form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
</html>