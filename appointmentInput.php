<?php
    include 'connect-mysql.php';
    $date = $_POST['date'];
    $time = $_POST['time'];
    $extraNotes = $_POST['extraNotes'];
    $_SESSION['accountExists'];


    $connection = connectDB();

    $sql = "INSERT INTO Appointment (PatientID, Date, Time, PatientNotes) VALUES ($_SESSION[userID]', '$date', '$time', '$extraNotes')";

    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");
    header("Location: patientAppointment.php");
?>