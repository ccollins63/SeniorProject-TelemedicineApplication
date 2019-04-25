<?php
    include 'connect-mysql.php';
    $staticFirstName = $_POST['staticFirstName'];
    $staticLastName = $_POST['staticLastName'];
    $staticEmail = $_POST['staticEmail'];
    $staticBirth = $_POST['staticDateOfBirth'];

    $_SESSION['accountExists'];

    $connection = connectDB();

    $sql = "UPDATE User SET FirstName='Bob' WHERE PatientID = 10";
    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");

    header("Location: patientProfile-edit.php");
?>