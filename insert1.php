

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
		// here our table name is user
		$sql = "INSERT INTO user (name, email, pass, cpass, user_type) 
        VALUES ('$name', '$email', '$password', '$cpassword', '$user_type')";

		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$sql="INSERT INTO user (name, email, pass, cpass, user_type)
		VALUES ('$name', '$email', '$password', '$cpassword', '$user_type')";

		if ($result=mysqli_query($conn, $sql))
		  {
		  // Return the number of rows in result set
		  $affectedRows = mysqli_affected_rows($conn);
		  header('location: login_form.php');
		  }

		mysqli_close($conn);
		
		
		?>

