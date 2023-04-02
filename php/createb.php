<?php
include "config.php";
if (isset($_POST['SEARCH'])) {
    // get variables from the form
    $state = $_POST['statename'];
    $district = $_POST['distname'];
    $blood_group = $_POST['bloodtype'];
    $whole_blood = $_POST['wholename'];


    //write sql queryb

    $sql = "INSERT INTO `bloodstk`(`statename`, `distname`, `bloodtype`, `wholename`) VALUES ('$state','$district','$blood_group','$whole_blood')";
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