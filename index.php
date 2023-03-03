<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	label{
		color:black
	}
</style>
<body>
     <form action="loginDB.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" name="submit">Login</button>
     </form>

	 
	 <label >Don't have an account?</label>
	 <a href="registrationPage.php">
	 <button type="submit" >SignIn</button>
	

</body>
</html>