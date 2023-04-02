<?php
include "config.php";
if (isset($_POST['SEARCH'])) {
			// get variables from the form
			$State = $_POST['statename'];
			$District = $_POST['distname'];
			$Date = $_POST['date'];
		
	
			//write sql queryb
	
			$sql = "INSERT INTO `bloodcamps`(`statename`, `distname`, `date`) VALUES ('$State','$District','$Date')";
			// execute the query
	
			$result = $conn->query($sql);
	
			if ($result == TRUE) {
				echo "New record created successfully.";
			}
			else
			{
				echo "Error:". $sql . "<br>". $conn->error;
			}
	
			$conn->close();
		}
        
?>