<?php
    include 'connect-mysql.php';

    $connection = connectDB();

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $staticFirstName = $_POST['staticFirstName'];
    $staticLastName = $_POST['staticLastName'];
    $staticEmail = $_POST['staticEmail'];
    $staticBirth = $_POST['staticBirth'];



    $sql = "UPDATE User SET FirstName='$staticFirstName' WHERE PatientID = $_SESSION[userID]";
    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");

    $sql = "UPDATE User SET LastName='$staticLastName' WHERE PatientID = $_SESSION[userID]";
    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");

    $sql = "UPDATE User SET Email='$staticEmail' WHERE PatientID = $_SESSION[userID]";
    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");

    $sql = "UPDATE User SET PhoneNumber='$staticPhoneNumber' WHERE PatientID = $_SESSION[userID]";
    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");

    $sql = "UPDATE User SET DateOfBirth='$staticBirth' WHERE PatientID = $_SESSION[userID]";
    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");
    if ($result === TRUE) {
        echo "Record uploaded successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($connection);

    header("Location: patientProfile-edit.php");
?>