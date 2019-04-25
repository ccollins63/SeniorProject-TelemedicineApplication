<?php
    include 'connect-mysql.php';
    $prescriptionName = $_POST['bday'];
    $prescriptionDate = $_POST['date'];
    $prescriptionNotes = $_POST['notes'];
    $prescriptionQuantity = $_POST['quantity'];

    $_SESSION['accountExists'];

    $connection = connectDB();

    $sql = "INSERT INTO Prescription (PatientID, DoctorID, PrescriptionName, PrescriptionDate, PrescriptionNotes, PrescriptionQuantity) VALUES ('$_SESSION[userID]', '', '$prescriptionName', '$prescriptionDate', '$prescriptionNotes', '$prescriptionQuantity')";

    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");
    header("Location: patientPrescription.php");
?>