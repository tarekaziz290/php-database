<?php

session_start();


?>




<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>


<?php

include 'database.php';

if (isset($_POST['submit']))
{
	$username= mysqli_real_escape_string($con,$_POST['username']);
	$password= mysqli_real_escape_string($con,$_POST['password']);
	$cpassword= mysqli_real_escape_string($con,$_POST['cpassword']);

	

    $user_search= "select * from registration where username='$username'";
	$query = mysqli_query($con,$user_search);
	$user_count = mysqli_num_rows($query);
	if ($user_count)
    {
    	echo "username is already use";

    }
    else
    {
    	if ($password===$cpassword) {
    		
    		$insertquery = "insert into registration (username,password,cpassword) values('$username','$pass','$cpass') ";
    		$iquery = mysqli_query($con,$insertquery);
			   if($iquery){
				?>
				<script>
					alert("insert successful");
				</script>



				<?php
			}else{
				?>
				<script>
					alert("insert is not successful");
				</script>



				<?php
			}

    	}
    	else
    	{
    		?>
				<script>
					alert("password is not matching");
				</script>



				<?php
    	}
    }


}



?>


	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
		<label for="fullname">Full Name:</label>
		<input type="text" name="username" placeholder="enter the fullname" required>
		<br>
		<label for="password">Password:</label>
		<input type="password" name="password" placeholder="enter the password" required>
		<br>
		<label for="cpassword">Confirm Password:</label>
		<input type="password" name="cpassword" placeholder="Confirm password" required>
		<br>
		<button type="submit" name="submit">Create account </button>
		
	</form>

</body>
</html>