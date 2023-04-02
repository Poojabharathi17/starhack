<?php 
include "config.php";

// if the form's signup  button is clicked, we need to process the form
	if (isset($_POST['Sign up'])) {
		// get variables from the form
		$Name = $_POST['name'];
		$Age= $_POST['age'];
		$Gender = $_POST['gender'];
		$Father_name = $_POST['fname'];
		$Mobile_no = $_POST['phno'];
        $Email = $_POST['email'];
        $State = $_POST['state'];
        $District = $_POST['dist'];
        $Address = $_POST['addr'];
        $Pincode = $_POST['pc'];
        $Username = $_POST['uname'];
        $Password = $_POST['pass'];

		//write sql queryb

		$sql = "INSERT INTO `signup`(`name`, `age`, `gender`, `fname`, `phno`, `email`, `state`, `dist`, `addr`, `pc`, `uname`, `pass`) VALUES ('$Name','$Age','$Gender','$Father_name','$Mobile_no','$Email','$State','$District','$Address','$Pincode','$Username','$Password')";
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


