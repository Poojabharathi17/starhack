<?php
include "config.php";
if (isset($_POST['SEARCH'])) {
			// get variables from the form
			$State = $_POST['statename'];
			$District = $_POST['distname'];
			$Blood_Group = $_POST['bloodtype'];
			$Organ = $_POST['organname'];
		
	
			//write sql queryb
	
			$sql = "INSERT INTO `organstk`(`statename`, `distname`, `bloodtype`, `organname`) VALUES ('$State','$District','$Blood_Group','$Organ')";
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