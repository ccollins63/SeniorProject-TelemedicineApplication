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
    <meta charset="UTF-8">

    <title>Login to Equinox</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
    <link href="patientCSS.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container, whiteContainer">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <a href="index.php"><img src="images/logo.png" width="150"></a>
                </div>
                <div class="col, justifyCenter">
                    <h1>Equinox Medicine Health Portal</h1>
                </div>
            </div>
            
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
            
                  vidyoConnector.Connect({
                    host:"prod.vidyo.io",
                    token:"cHJvdmlzaW9uAENhbUA4NzgwYTQudmlkeW8uaW8ANjM3MjM0Mzk4OTAAADgwODI5ZDcwNDAwNDlmMGJmZmRmZjZkNjcwMDg1YzQ0ZGNhOTQwNWRhMmEzYzZkYzRmMDAwZGVmMGVjMWQ3NmQyZTgwN2ExMWY4NGU4OTNlODcwMjg3MGNkZTVjZGJjYw==",          // Add generated token (https://developer.vidyo.io/documentation/4-1-16-8/getting-started#Tokens)
                    displayName: "<?php echo "$userFirstName $userLastName";?>",
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
        </div>
    </div>

</body>
</html>