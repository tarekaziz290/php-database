<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
</head>
<body>
	<?php
	include 'database.php';



	if (isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
	    $user_search= "select * from registration where username='$username'";
		$query = mysqli_query($con,$user_search);
		$user_count = mysqli_num_rows($query);
		if ($user_count) {
			$user_pass = mysqli_fetch_assoc($query);
			$dbpass = $user_pass['password'];


			


			if ($dbpass) {
				
				echo "log in succesful";
				
			}else
			{
				echo "password in correct";
			}
		}
		else{
			echo "invaild username";
		}
	
    }



	?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
	<label for="username">username:</label>
	<input type="username" name="username"  placeholder="enter your username"required >
	<br>
	<label for="password">Password:</label>
	<input type="password" name="password" placeholder="enter the password" required>
	<br>
	<button type="submit" name="submit">log in</button>


</form>



</body>
</html>