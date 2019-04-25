<?php
include 'connect-mysql.php';

// Create connection
$conn = connectDB();
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $PrescriptionRequest =  TRUE;
    $RequestConfirm = TRUE;
    

// sql to delete a record
$sql = "INSERT INTO Appointment (DoctorID, PatientID, Date, Time, DoctorNotes, PatientNotes) VALUES ('11', '9', '2019-06-03', '12:30:00', '', '')";


if (mysqli_query($conn, $sql)) {
    echo "Record uploaded successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>