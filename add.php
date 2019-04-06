<?php

if(isset($_POST["name"])&&isset($_POST["phone"])&&isset($_POST["email"])){
	$connect = mysqli_connect("localhost","root","","txt");	
	
	$arr =array(
	$name=$_POST['name'],
	$phone=$_POST['phone'],
	$email=$_POST['email']);

	$insert ="INSERT INTO client (name ,phone,email) VALUES ('".$name."','".$phone."','".$email."')";
	$result = mysqli_query($connect,$insert);
	
	echo json_encode($arr);
	$connect ->close();
}

?>