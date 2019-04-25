<?php
    include 'connect-mysql.php';

    $connection = connectDB();

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $staticFirstName = $_POST['staticFirstName'];
    $staticLastName = $_POST['staticLastName'];
    $staticEmail = $_POST['staticEmail'];
    $staticBirth = $_POST['staticDateOfBirth'];



    $sql = "UPDATE User SET FirstName='Bob' WHERE PatientID = 10";
    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");

    if (mysqli_query($conn, $sql)) {
        echo "Record uploaded successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);

    header("Location: patientProfile-edit.php");
?>