<!--
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

</head>
<body>

<?php #include'menu.php' ?>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center"> Cosmos College Of Management and Technology</h2>
		<h3 class="text-center"> Tutepani, Satdobato, Lalitpur</h3>
		
	</div>

	<div class="container-fluid">
		<h2 align="center">Welcome to Cosmos College</h2>
		<p class="py-5">Cosmos College of Management and Technology was established in the year 2001 AD and it has successfully completed ten glorious years in providing competent education in the engineering and management sectors. The college has been established under the chairmanship of Prof. Dr. Uttam N. Shrestha, (former Dean, IOE Pulchowk).</p>
		
	</div>
</section>


<section class="my-5">
			
	</div>


	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-6 col-12">
				<img src="images/principal.jpg" class="img-fluid aboutimg">
			</div>

			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-6">From the Principal's Desk</h2>
				<p class="py-3">
					Dear Prospective Students,
				It gives me immense pride and pleasure to welcome you to Cosmos College of Management and Technology (CCMT), a Premier institution for imparting quality learning to young aspirants of 21st Century. It is a matter of great pride that the College has made consistent progress, in last fifteen years, in academic and co-curricular activities. The level of education offered by this college is up-to- date, comparable to those of the best institutions anywhere in the world and justifiably appropriate to the needs of the country. 
				</p>
				<a href="about.php" class="btn btn-success"> More</a>


			</div>
		</div>
	</div>
	
</section>

<section class="my-5">

<div class="row">
  <div class="col-sm-6">
    <div class="card">
    	<img src="images/one.jpg" class="card-img-top" >
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
    	<img src="images/two.jpg" class="card-img-top" >
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>

</section>
<br><br>

<?php #include'form.php' ?> <br>

<footer>
<p class="p-3 bg-dark text-white text-center">@CosmosCollegeWebsiteMinorProject</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
-->

<?php
/**
 * Created by PhpStorm.
 * User: Uv
 * Date: 11/27/2018
 * Time: 7:41 PM
 */
include('MainController.php');
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">


</head>
<body>

<!--Main Navigation-->
<header>

    <nav class="navbar navbar-expand-lg navbar-dark btn-green scrolling-navbar">
        <a class="navbar-brand" href="#"><strong>Demo Home</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Opinions</a>
                </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </nav>

</header>
<!--Main Navigation-->



<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>
    <?php
    viewUsers();
    ?>
    ?>
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>
  



