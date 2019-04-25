<?php
    include 'connect-mysql.php';
    $date = $_POST['date'];
    $time = $_POST['time'];
    $extraNotes = $_POST['extraNotes'];
    $_SESSION['accountExists'];


    $connection = connectDB();

    $sql = "DELETE FROM Appointment WHERE PatientID = $_SESSION[userID] AND Date = $date AND Time = $time";

    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");
    header("Location: patientAppointment.php");
?>