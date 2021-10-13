<html>	
<body>

		<center>
		<form action="client.php" name="reach" method="POST">
		<br>
		<h2>Let us reach you</h2>
		<br>
	    <label for="fname">First name:</label>
	    <input type="text" id="fname" name="fname" value="John"><br>
	    <label for="lname">Last name:</label>
	    <input type="text" id="lname" name="lname" value="Doe"><br>
	    <label for="email">Your Email:</label>
	    <input type="email" id="email" name="email" value="someone@example.com"><br><br>
	    <input type="submit" value="Submit">
</form> 
</center>


<?php  
		
		$servername = "localhost:3306";
		$username = "microdam_shamiri";
		$password = "Microsecure69";
		$dbname   = "microdam_shamiriDB";

		//Create Connection

		$conn = new mysqli($servername, $username, $password, $dbname);

		//Check connection status

		if ($conn->connect_error){
			die("Connection Failed: " . $conn->connect_error);

		}

		;


		$destination = $_POST['destination'];
		$destLocation = $_POST['destLocation'];
		$check_in = $_POST['check_in'];
		$check_out = $_POST['check_out'];
		$members = $_POST['members'];
		


		$sql = "INSERT INTO bookings (destination, destLocation, check_in, check_out, members)
		VALUES ('$destination', '$destLocation', $check_in, $check_out, $members)";

		if ($conn->query($sql) === TRUE){
			;

		}else {

			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();


?>
</body>
</html>