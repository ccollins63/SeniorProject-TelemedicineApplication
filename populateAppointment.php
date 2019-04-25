<?php
include 'connect-mysql.php';

// Create connection
$conn = connectDB();
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

while ($i < 20)
{
    $doctorid = $i + 1;
    $patientid = $i;
    $date = '2019-12-25';
    $time = '00:00:00';
    $doctornotes = 'test';
    $patientnotes = 'test';

// sql to delete a record
$sql = "INSERT INTO APPOINTMENT (DoctorID, PatientID, Date, Time, DoctorNotes, PatientNotes) VALUES ('$doctorid', '$patientid', '$date', '$time', '$doctornotes', '$patientnotes')";


if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
$i++;
}

mysqli_close($conn);
?>