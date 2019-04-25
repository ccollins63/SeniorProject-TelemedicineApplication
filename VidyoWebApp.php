<?php
require __DIR__ . '/auth.php';

include 'connect-mysql.php';
$conn = connectDB();

if($conn->connect_error) die ("Unable to connect to database".$conn->connect_error);

$query = "SELECT * FROM User WHERE PatientID = '$_SESSION[userID]'";

console.log($query);

$result = $conn->query($query);
if($result->num_rows > 0)
{
    while($row = $result->fetch_array(MYSQLI_ASSOC))
    {	
        $userFirstName = $row['FirstName'];
        $userLastName = $row['LastName'];
    }
}
?>

<html>
<head>
  <title>Vidyo Sample</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
  <script>
  var vidyoConnector;


    function onVidyoClientLoaded(status) {
      console.log("VidyoClient load state - " + status.state);
      if (status.state == "READY") {
        VC.CreateVidyoConnector({
          viewId:"renderer",
          viewStyle:"VIDYO_CONNECTORVIEWSTYLE_Default",
          remoteParticipants:10,
          logFileFilter:"error",
          logFileName:"",
          userData:""
        }).then(function (vc) {
          console.log("Create success");
          vidyoConnector = vc;
        }).catch(function(error){

        });
      }
    }

    function joinCall(){
      $token = bin2hex(random_bytes(64));
      vidyoConnector.Connect({
        host:"prod.vidyo.io",
        token: $token,          // Add generated token (https://developer.vidyo.io/documentation/4-1-16-8/getting-started#Tokens)
        displayName: $userFirstName,
        resourceId:"room2",
        onSuccess: function(){
          console.log("Connected!! YAY!");
        },
        onFailure: function(reason){
          console.error("Connection failed");
        },
        onDisconnected: function(reason) {
          console.log(" disconnected - " + reason);
        }
      })
    }

  </script>

  <script src="https://static.vidyo.io/latest/javascript/VidyoClient/VidyoClient.js?onload=onVidyoClientLoaded"></script>
 <h3>Equinox Healthcare Video Appointment</h3>
 <button onclick="joinCall()">Connect</button>

 <div id="renderer"></div>
</body>
</html>
