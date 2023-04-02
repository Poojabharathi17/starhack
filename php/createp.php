<?php 
include "config.php";

if (isset($_POST['Submit'])) {
		// get variables from the form
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$DOB = $_POST['date'];
		$address = $_POST['address'];
		$phone_number = $_POST['phoneno'];
        $weight = $_POST['weight'];
        $pulse = $_POST['pulse'];
        $hb = $_POST['hb'];
        $bp = $_POST['bp'];
        $temp = $_POST['temperature'];
        $gender = $_POST['gender'];
        $prev_donated = $_POST['fdonation'];
		$last_date_donation = $_POST['lastdate'];
        $recent_surgery = $_POST['recsurgery'];
        $diseases = $_POST['dis'];
        $drug_habits = $_POST['dh'];
        $blood_transfusion = $_POST['bt'];

		//write sql queryb

		$sql = "INSERT INTO `personaldetails`(`firstname`, `lastname`, `date`, `address`, `phoneno`, `weight`, `pulse`, `hb`, `bp`, `temperature`, `gender`, `fdonation`, `lastdate`, `recsurgery`, `dis`, `dh`, `bt`) VALUES ('$first_name','$last_name','$DOB','$address','$phone_number','$weight','$pulse','$hb','$bp','$temp','$gender','$prev_donated','$last_date_donation','$recent_surgery','$diseases','$drug_habits','$blood_transfusion')";
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
