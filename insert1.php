<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>


		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff

        include 'config.php';
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST ['name'];
        $email = $_REQUEST ['email'];
        $password = $_REQUEST ['pass'];
        $cpassword = $_REQUEST ['cpass'];
        $user_type = $_REQUEST['user_type'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO user (name, email, pass, cpass, user_type) 
        VALUES ('$name', '$email', '$password', '$cpassword', '$user_type')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$name\n $email\n "
				. "$password\n $cpassword\n $user_type");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>

</body>

</html>
