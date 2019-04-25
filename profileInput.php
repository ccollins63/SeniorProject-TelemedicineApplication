<?php
    include 'connect-mysql.php';
    $staticFirstName = $_POST['firstName'];
    $staticLastName = $_POST['lastName'];
    $staticEmail = $_POST['email'];
    $staticBirth = $_POST['dateOfBirth'];

    $_SESSION['accountExists'];

    $connection = connectDB();

    $sql = "INSERT INTO Prescription (FirstName, LastName, Email, DateOfBirth) VALUES ('$staticFirstName', '$staticLastName', '$staticEmail', '$staticBirth')";

    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");
    header("Location: patientPrescription.php");
?>