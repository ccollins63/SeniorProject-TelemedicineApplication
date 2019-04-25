<?php
    include 'connect-mysql.php';
    $firstName = $_POST['inputName'];
    $lastName = $_POST['inputLastName'];
    $email = $_POST['emailAddress'];
    $pass = $_POST['password'];
    $address = $_POST['inputAddress'] . ' ' . $_POST['inputAddress2'];
    $city = $_POST['inputCity'];
    $state = $_POST['inputState'];
    $zip = $_POST['inputZip'];
    $_SESSION['accountExists'];


    $connection = connectDB();

    $query = "SELECT Email FROM User WHERE $email = Email";
    $sql = "INSERT INTO User (FirstName, LastName, Address, City, State, DateOfBirth, Gender, PhoneNumber, Email, Password, Position) VALUES ('$firstName', '$lastName', '$address', '$city', '$state', '2000-12-25', 'male', '1234123123', '$email', '$pass', '3')";
    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");
    header("Location: login.php");
?>