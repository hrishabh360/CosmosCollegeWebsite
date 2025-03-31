<!--database-->
<?php
$con= mysqli_connect('localhost','root','');
if($con){
	echo "You are signed in";

}
else{
	echo "Error";
}

mysqli_select_db($con, 'cosmoswebsite');
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];


$query= "insert into userinfodata(first_name, last_name, email, password)
values('$first_name','$last_name','$email','$password')";


$result  = mysqli_query($con, $query);



if($result) {
	header('location:index.php');
}
else {
	echo "Error: " . $query . "<br>" . mysqli_error($con);
}
?>
