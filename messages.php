<?php
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
                    <a href="appointment.php">
                      <button>Appointments</button>
                    </a>
                  </p>
    
                  <p>
                    <a href="prescription.php">
                      <button>Prescriptions</button>
                    </a>
                  </p>
    
                  <p>
                    <a href="messages.php">
                        <button>Messages</button>
                    </a>
                </p>
    
                  <p>
                    <a href="profile.php">
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
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <p class="appTitle">Messages</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                  <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><strong>Dr. Mitchell</strong></h5>
                            <small>3 days ago</small>
                          </div>
                          <p class="mb-1">Mr. Doe, thank you for your prompt reply to my message...</p>
                          <small>Subject: Yesterday's appointment</small>
                    </a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><strong>Equinox Prescription Services</strong></h5>
                            <small>03/12/19</small>
                          </div>
                          <p class="mb-1">Prescription Penicillin has been refilled. If you have...</p>
                          <small>Subject: Your Prescription Has Been Refilled</small>
                    </a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><strong>Dr. Johnson</strong></h5>
                            <small>03/01/19 days ago</small>
                          </div>
                          <p class="mb-1">Mr. Doe, thank you for your prompt reply to my message...</p>
                          <small>Subject: Yesterday's appointment</small>
                    </a>
                  </div>
                </div>
                <div class="col-5">
                  <div class="tab-content" id="nav-tabContent" style="max-width: 400px">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                      <strong>Yesterday's appointment</strong>
                      <p>Dr. Mitchell</p>
                      <p>Mr. Doe, thank you for your prompt reply to my message. Regarding your question, your lab results should show up in the next 3 business days.</p>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#replyMessage">reply</button>
                    </div>
                    <!--Modal-->
                    <div class="modal fade" id="replyMessage" tabindex="-1" role="dialog" aria-labelledby="replyLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="replyLabel">Reply</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="replyLabel">Message</label>
                                        <textarea class="form-control" id="replyTextArea" rows="3"></textarea>
                                      </div>  
                                </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Deny</button>
                              <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--End Modal-->
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                      <strong>Your Prescription Has Been Refilled</strong>
                      <p>Equinox Prescription Services</p>
                      <p>Prescription Penicillin has been fulfilled. If you have any questions please reach out to your doctor or nurse.</p>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#replyMessage">reply</button>
                    </div>
        
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                      <strong>Yesterday's appointment</strong>
                      <p>Dr. Johnson</p>
                      <p>Mr. Doe, thank you for your prompt reply to my message. Regarding your question, your lab results should show up in the next 3 business days.</p>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#replyMessage">reply</button>
                    </div>
                  </div>
                </div>
              </div>
            <!-- InstanceEndEditable -->
        </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<!-- InstanceEnd --></html>
