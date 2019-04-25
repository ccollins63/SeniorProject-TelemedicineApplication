<?php
    include 'connect-mysql.php';
    $date = $_POST['date'];
    $time = $_POST['time'];
    $extraNotes = $_POST['extraNotes'];


    $connection = connectDB();

    $sql = "INSERT INTO Appointment (PatientID, Date, Time, PatientNotes) VALUES ($_SESSION[userID]', '$date', '$time', '$extraNotes')";
    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");

    if ($result === TRUE) {
        echo "Record uploaded successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($connection);

    header("Location: patientAppointment.php");
?>