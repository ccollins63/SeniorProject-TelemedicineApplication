<?php
    include 'connect-mysql.php';
    $staticFirstName = $_POST['staticFirstName'];
    $staticLastName = $_POST['staticLastName'];
    $staticEmail = $_POST['staticEmail'];
    $staticBirth = $_POST['staticDateOfBirth'];

    $_SESSION['accountExists'];

    $connection = connectDB();

    $sql = "UPDATE User Set FirstName='$staticFirstName' WHERE PatientID = '$_SESSION[userID];
            UPDATE User Set LastName='$staticLastName' WHERE PatientID = '$_SESSION[userID];
            UPDATE User Set Email='$staticEmail' WHERE PatientID = '$_SESSION[userID];
            UPDATE User Set DateOfBirth='$staticBirth' WHERE PatientID = '$_SESSION[userID]";


    mysqli_close($connection);
    header("Location: patientProfile-edit.php");
?>