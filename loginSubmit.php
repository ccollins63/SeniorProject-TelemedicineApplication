<?php
require_once 'connect-mysql.php';

console.log("Inside loginSubmit");

console.log($email." - ".$pass);

$connection = connectDB();
if($connection->connect_error) die ("Unable to connect to database".$connection->connect_error);

$email = $_POST['inputEmail'];
$pass = $_POST['inputPassword'];

$query = "SELECT * FROM User WHERE Email = '$email' AND Password = '$pass'";

console.log($query);

$result = $connection->query($query);
if($result->num_rows > 0)
{
    while($row = $result->fetch_array(MYSQLI_ASSOC))
    {	
        $_SESSION['userID'] = $row['PatientID'];
        $userFirstName = $row['FirstName'];
        $userLastName = $row['LastName'];
    }
    //document.getElementById("failedLoginMessage").style.visibility = "hidden";
    header("Location: index.php");
}
else
{
    //document.getElementById("failedLoginMessage").style.visibility = "visible";
    header("Location: login.php");
}
?>