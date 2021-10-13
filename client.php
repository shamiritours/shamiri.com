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


		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];

		//Mail Sender
		$to = $email; 
		$from = 'shamiri@microdam.co.ke'; 
		$fromName = 'Tour Manager';

		$subject = "Hello ". $lname. " Thank you for enquiring Shamiri "; 
 
		$message = "Your Request has been recieved.\nOur Team will contact you shortly"; 
 
		//Actual sending		
		if(mail($to, $subject, $message)){
			echo 'We have sent an Email to you.';
		}else{
			echo 'Email sending failed';

		}


		//Post to DB
		$sql = "INSERT INTO clients (fname, lname, email)
		VALUES ('$fname', '$lname', '$email')";

		if ($conn->query($sql) === TRUE){
			echo "Thank You, We will be in touch shortly";

		}else {

			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();


?>
