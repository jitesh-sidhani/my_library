<?php 
include "db_conn.php";

if (isset($_POST['submit']))
{
    $user_name=$_POST['uname'];
    $password=$_POST['password'];
    $mobile_number=$_POST['mobile_number'];
    

    $sql="INSERT INTO users(user_name,password,mobile_number)
          values('$user_name','$password','$mobile_number')";
    if(mysqli_query($conn,$sql)){

        echo"<script>alert('new record insert success')</script>";
        echo "<script>window.open('welcome.php','_self')</script>";
    }else
    {
        echo"error:".mysqli_error($conn);
    }
    mysqli_close($conn);

}
?>