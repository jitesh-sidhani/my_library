<?php 
include "db_conn.php";

if (isset($_POST['submit'])) {

	$user_name =$_POST['uname'];
	$password=$_POST['password'];

	$sql="SELECT * FROM users WHERE user_name='$user_name'and password='$password'";
	$que=mysqli_query($conn,$sql);

	if(mysqli_num_rows($que)>0){
		echo "<script> alert('LOgin ok')</script>";

		echo "<script>window.open('welcome.php','_self')</script>";
	}else{

		echo "<script> alert('Wrong username or password')</script>";
	}

}