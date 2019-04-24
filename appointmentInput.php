<?php
    include 'connect-mysql.php';
    $date = $_POST['bday'];
    $time = $_POST['time'];
    $extraNotes = $_POST['extraNotes'];
    $_SESSION['accountExists'];


    $connection = connectDB();

    $sql = "INSERT INTO Appointment (DoctorID, PatientID, Date, Time, DoctorNotes, PatientNotes) VALUES ('1', '$_SESSION[userID]', '$date', '$time', '', '$extraNotes')";

    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");
    header("Location: patientAppointment.php");
?>