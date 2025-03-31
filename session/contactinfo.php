/*-- contact database--*/
<?php
$con= mysqli_connect('localhost','root','');
if($con){
	echo "Your message has been sent. We will contact you soon.";

}
else{
	echo "Error";
}

mysqli_select_db($con, 'cosmoswebsite');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$numb = $_POST['numb'];
$comment = $_POST['comment'];



$query= "insert into contact_info(firstname, lastname, email, numb, comment)
values('$firstname','$lastname','$email','$numb', '$comment')";


$result  = mysqli_query($con, $query);



if($result) {
	header('location:contact.php');
}
else {
	echo "Error: " . $query . "<br>" . mysqli_error($con);
}
?>
