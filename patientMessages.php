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

<!doctype html>
<html><!-- InstanceBegin template="/Templates/Tem2.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<!-- InstanceBeginEditable name="doctitle" -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PatientPrescriptionView</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">

<!-- InstanceEndEditable -->
<link href="patientCSS.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<script>
var source, chattext, last_data, chat_btn, conx_btn, disconx_btn, text;
var hr = new XMLHttpRequest();
function connect(){
    if(window.EventSource){
        source = new EventSource("messengerServer.php");
        source.addEventListener("message", function(event){
            if(event.data != last_data && event.data != ""){
                chattext.innerHTML += event.data+"<hr>";
            }
            last_data = event.data;
        });
        chat_btn.disabled = false;
        conx_btn.disabled = true;
        disconx_btn.disabled = false;
    } else {
        alert("event source does not work in this browser, author a fallback technology");
    }
}
function disconnect(){
    source.close();
    disconx_btn.disabled = true;
    conx_btn.disabled = false;
    chat_btn.disabled = true;
}
function chatPost(){
    chat_btn.disabled = true;
    hr.open("POST", "messengerIntake.php", true);
    hr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            chat_btn.disabled = false;
            text.value = "";
        }
    }
    hr.send("text="+text.value);
}
var promptValue = prompt('Enter your name:', '');
if(promptValue != null){
	hr.open("POST", "messengerIntake.php", true);
	hr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    if(hr.responseText == "success"){
				chattext = document.getElementById("chattext");
				chat_btn = document.getElementById("chat_btn");
				conx_btn = document.getElementById("conx_btn");
				disconx_btn = document.getElementById("disconx_btn");
				text = document.getElementById("text");
				conx_btn.disabled = false;
				alert("Welcome to the chat "+promptValue+", press connect when ready.");
			}
	    }
    }
	hr.send("uname="+promptValue);
}
</script>
<style>
div#chatbox{
    width: 500px;
    height: 300px;
    padding: 20px;
    background:#e0e0e0;
    border-radius: 5px;
}
div#chatbox > #chattext{
    height: 200px;
    padding: 10px;
    background: #FFF;
    margin: 10px 0px;
    overflow-y: auto;
}
div#chatbox > #text{
	width: 100%;
}
</style>
</head>

<body>

<table width="90%" border="0" cellpadding="5">
 
  <tbody>
    <tr>
    <td class="companylogo"><a href="index.php"><img src="images/logo.png" width="150"></a></td>
      <td class="EqunioxTitle">Equinox Medicine Health Portal</td>
      <td align="center" class="signOut">
            <img src="images/man.png" alt="man" height="90px" width="90px" ><br>
            <span><?php echo "$userFirstName $userLastName"; ?></span><br>
            <a href="login.php">Sign Out</a>
          </td>
    </tr>
   
    
    
    <tr>
      <td align="center">
    
      <table width="90%" border="0" cellpadding="0">
        <tbody>
         
          <tr class="navcenter">
            <td>
   
                <p>
                    <a href="index.php">
                      <button>Home</button>
                    </a>
                  </p>
    
                  <p>
                    <a href="patientAppointment.php">
                      <button>Appointments</button>
                    </a>
                  </p>
    
                  <p>
                    <a href="patientPrescription.php">
                      <button>Prescriptions</button>
                    </a>
                  </p>
    
                  <p>
                    <a href="patientMessages.php">
                        <button>Messages</button>
                    </a>
                </p>
    
                  <p>
                    <a href="patientProfile.php">
                      <button>Patient Profile</button>
                    </a>
                  </p>
      
            	
            </td>
          </tr>
        </tbody>
      </table>
      
      </td>
      
      <td colspan="2"><!-- InstanceBeginEditable name="MainBody" -->
      <!--Patient View Dashboard-->

                <!--Messages-->
                
          <div id="chatbox">
          <b>SSE Chatbox <small>shared hosting test</small></b>
          <div id="chattext"></div>
          <textarea id="text"></textarea>
          <input type="button" id="chat_btn" onclick="chatPost()" value="Submit Text" disabled> &nbsp; &nbsp;
          <input type="button" id="conx_btn" onclick="connect()" value="Connect" disabled>
          <input type="button" id="disconx_btn" onclick="disconnect()" value="Disconnect" disabled>
        </div>

</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

$("#save").click(function () {
  var textReply = $("#replyTextArea").val();

  if (textReply == ''){

    swal({
      title: "No Reply",
      text: "No reply was written",
      icon: "warning",
      button: "Ok",
      data-dismiss="modal"

    });
  } else {
    swal({
      title: "Reply was sent!",
      icon: "success",
      button: "Ok",
      data-dismiss="modal"

    });






  }




})

</script>
<!-- InstanceEnd --></html>
