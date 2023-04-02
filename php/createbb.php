<?php
include "config.php";
if (isset($_POST['Submit'])) {
			// get variables from the form
			$State = $_POST['state'];
			$District = $_POST['dist'];
			$City = $_POST['city'];
			$Bloodbank_name = $_POST['bbname'];
            $Parenthospital_name = $_POST['phname'];
			$Short_name = $_POST['shortname'];
			$Category = $_POST['category'];
			$Contact_person = $_POST['contact_person'];
            $Email = $_POST['email'];
			$Contact_no = $_POST['cno'];
			$Fax_no = $_POST['fno'];
			$License_no = $_POST['lno'];
            $From_date = $_POST['fdate'];
			$To_date = $_POST['todate'];
			$Component_facility = $_POST['cfac'];
			$Apheresis_facility = $_POST['afac'];
            $Helpline_no = $_POST['hno'];
			$Donor_type = $_POST['drtype'];
			$Donation_type = $_POST['dntype'];
			$Component_type = $_POST['ctype'];
            $Bag_type = $_POST['bagtype'];
			$TTI_type = $_POST['ttitype'];
			$Remark = $_POST['remark'];
	
		
	
			//write sql queryb
			
			$sql = "INSERT INTO `bloodbankinfo`() VALUES ('$State','$District','$City','$Bloodbank_name','$Parenthospital_name','$Short_name','$Category','$Contact_person','$Email','$Contact_no','$Fax_no','$License_no','$From_date','$To_date','$Component_facility','$Apheresis_facility','$Helpline_no','$Donor_Type','$Donation_type','$Component_type','$Bag_type','$TTI_type','$Remark')";
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