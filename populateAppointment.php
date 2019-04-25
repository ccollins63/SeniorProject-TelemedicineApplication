<?php
include 'connect-mysql.php';

// Create connection
$conn = connectDB();
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $doctorid =  10;
    $patientid = 4;
    $date = '2019-12-25';
    $time = '00:00:00';
    $doctornotes = 'test';
    $patientnotes = 'test';

// sql to delete a record
$sql = "INSERT INTO Appointment (DoctorID, PatientID, Date, Time, DoctorNotes, PatientNotes) VALUES ('$doctorid', '$patientid', '$date', '$time', '$doctornotes', '$patientnotes')";


if (mysqli_query($conn, $sql)) {
    echo "Record uploaded successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>