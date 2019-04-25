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
$sql = "UPDATE Prescription SET RequestConfirm = '$RequestConfirm' WHERE PrescriptionID ='3'";


if (mysqli_query($conn, $sql)) {
    echo "Record uploaded successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>