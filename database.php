<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "project";


$con = mysqli_connect($server,$user,$password,$db);

if($con){
	?>
	<script>
		alert("connection successful");
	</script>



	<?php
}else{
	?>
	<script>
		alert("connection is successful");
	</script>



	<?php
}


?>