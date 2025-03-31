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
 <?php include'menu.php' ?>

<br>
<h2 align="center"> Fill in the following form to contact us. </h2><br><br>

<div class="w-50 m-auto">
<form method="post" action="contactinfo.php">

	<div class="form-group">
    	<label for="exampleInputfname1">First Name</label>
    	<input type="text" name="firstname" class="form-control" id="exampleInputfname1" placeholder="Enter First Name">
  	</div>

  	<div class="form-group">
    	<label for="exampleInputlname1">Last Name</label>
    	<input type="text" name="lastname" class="form-control" id="exampleInputlname1" placeholder="Enter Last Name">
  	</div>

  	<div class="form-group">
    	<label for="exampleInputEmail1">Email address</label>
    	<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    	<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  	</div>
  	<div class="form-group">
    	<label for="exampleInputphn1">Contact Number</label>
    	<input type="txt" name="numb" class="form-control" id="exampleInputphn1" placeholder="contact number">
    	<small class="form-text text-muted">We'll never share your contact information with anyone else.</small>
  	</div>

  	<div class="form-group">
      <label>Enter your comment here:</label>
  		<textarea name="comment" class="form-control"> </textarea>
  	</div>
  	
  	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>