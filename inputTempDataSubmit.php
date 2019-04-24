<?php
    include 'connect-mysql.php';
    $scriptID = $_POSt['scriptID'];
    $patientID = $_POST['patientID'];
    $doctorID = $_POST['doctorID'];
    $scriptName = $_POST['scriptName'];
    $scriptDate = $_POST['scriptDate'];
    $scriptNotes = $_POST['scriptNotes'];
    $scriptQuantity = $_POST['scriptQuantity'];

    $connection = connectDB();

    $sql = "INSERT INTO Prescription (PatientID, DoctorID, PrescriptionName, PrescriptionDate, PrescriptionNotes, PrescriptionQuantity) VALUES ('$scriptID', '$patientID', '$doctorID', '$scriptName', '$scriptDate', '$scriptNotes', '$scriptQuantity')";

    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");
    header("Location: index.php");
?>