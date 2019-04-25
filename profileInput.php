<?php
    include 'connect-mysql.php';
    $staticFirstName = $_POST['staticFirstName'];
    $staticLastName = $_POST['staticLastName'];
    $staticEmail = $_POST['staticEmail'];
    $staticBirth = $_POST['staticDateOfBirth'];

    $_SESSION['accountExists'];

    $connection = connectDB();

    $sql = "UPDATE User Set FirstName='$staticFirstName' WHERE PatientID = '$_SESSION[userID]";
    
    header("Location: patientProfile-edit.php");
?>