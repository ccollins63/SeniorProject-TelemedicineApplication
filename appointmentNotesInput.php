<?php
    include 'connect-mysql.php';
    $patientNotes = $_POST['patientNotes'];
    $staticLastName = $_POST['staticLastName'];
    $staticEmail = $_POST['staticEmail'];
    $staticBirth = $_POST['staticDateOfBirth'];
    $appointmentID = $_POST['appointID'];
    $extraNotes = $_POST['extraNotes'];

    $_SESSION['accountExists'];

    $connection = connectDB();

    $sql = "UPDATE Appointment SET PatientNotes='$patientNotes' WHERE  AppointmentID = $appointmentID";
    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");

    header("Location: patientAppointmentPatientView.php");
?>