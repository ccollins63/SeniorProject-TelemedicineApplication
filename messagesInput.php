<?php
    include 'connect-mysql.php';
    $messageSubject = $_POST['bday'];
    $recipientID = $_POST['date'];
    $messageBody = $_POST['notes'];
    $dateCreated = $_POST['dateCreated'];
    $_SESSION['accountExists'];

    $connection = connectDB();

    $sql = "INSERT INTO Prescription (Subject, SenderID, RecipientID, MessageBody, DateCreated) VALUES ('$messageSubject', '$_SESSION[userID]', '$recipientID', '$messageBody', '$dateCreated')";

    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");
    header("Location: patientMessages.php");
?>