<?php
    include 'connect-mysql.php';
    $date = $_POST['date'];
    //if($_POST['time'] >= )
    $time = $_POST['time'];
    $extraNotes = $_POST['patientNotes'];

    echo $time;
echo $date;


    $connection = connectDB();

    $sql = "INSERT INTO Appointment (DoctorID, PatientID, Date, Time, PatientNotes) VALUES (11, $_SESSION[userID], '$date', '$time', '$extraNotes')";
    $result = $connection->query($sql) or trigger_error($connection->error."[$sql]");

    if ($result === TRUE) {
        echo "Record uploaded successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }

    mysqli_close($connection);

    header("Location: patientAppointment.php");
?>