<?php
    include 'connect-mysql.php';
    $patientNotes = $_POST['extraNotes'];
    $staticLastName = $_POST['staticLastName'];
    $staticEmail = $_POST['staticEmail'];
    $staticBirth = $_POST['staticDateOfBirth'];

    $_SESSION['accountExists'];

    $connection = connectDB();

    $sql = "UPDATE Appointment SET PatientNotes='$patientNotes' WHERE  = 10";
    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");

    header("Location: patientAppointmentPatientView.php");
?>