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

$appointmentQuery = "SELECT * FROM Appointment WHERE PatientID = '$_SESSION[userID]'";

  console.log($appointmentQuery);
            
  $appointmentResult = $conn->query($appointmentQuery);
            
  if($appointmentResult->num_rows > 0)
  {
      while($row = mysqli_fetch_array($appointmentResult))
      {	
        $appointmentID = $row['AppointmentID'];
        $appointmentDate     = $row['Date'];
        $appointmentTime    = $row['Time'];
        $appointmentDoctorID = $row['DoctorID'];
        $appointmentDoctorNameResult = mysqli_query($conn,"SELECT * FROM User WHERE PatientID = '$appointmentDoctorID'");
        while($appointmentDoctorNameRow = mysqli_fetch_array($appointmentDoctorNameResult))
        {
            $appointmentDoctorLastName = $appointmentDoctorNameRow['LastName'];
        }
?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/Tem2.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>PatientAppointmentView</title>
<!-- InstanceEndEditable -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
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
      
      <td colspan="2">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <p class="appTitle">Appointment View</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <h4>Patient Name:</h4> <span><?php echo "$userFirstName $userLastName"; ?></span>
                    <h4>Patient Notes:</h4> <span><?php echo "$appointmentPatientNotes";?></span>
                </div>
                <div class="col-5">
                        <h4>Date of Appointment:</h4> <span><?php echo "$appointmentDate";?></span>
                        <h4>Time of Appointment:</h4> <span><?php echo "$appointmentDate";?></span>   
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 buttonContainer">
                        <button type="button" class="btn btn-primary btn-lg sideButtons" data-toggle="modal" data-target="#editNotesModal">Edit Notes</button>
                  
                  <!-- Edit Notes Modal -->
                  <div class="modal fade" id="editNotesModal" tabindex="-1" role="dialog" aria-labelledby="editNotesModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editNotesModal">Edit Notes</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action=".php" method="post">
                            <div class="form-group">
                                <label for="extraNotes">Extra Notes</label>
                                <textarea class="form-control" id="extraNotes" rows="3"></textarea>
                            </div>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Submit Edits</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--End Edit Notes Modal-->
                        <button type="button" class="btn btn-secondary btn-lg sideButtons" disabled>Video Call</button>
                        <button type="button" class="btn btn-danger btn-lg sideButtons" data-toggle="modal" data-target="#cancelConfirmModal">Cancel Appointment</button>
                        <!--Modal-->
                        <div class="modal fade" id="cancelConfirmModal" tabindex="-1" role="dialog" aria-labelledby="cancelConfirmModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="refillLabel">Confirm</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    Are you sure you want to cancel this appointment?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Deny</button>
                                    <button type="button" class="btn btn-danger">Yes, Cancel</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!--End Modal-->
                </div>
            </div>
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
