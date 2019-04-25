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
<title>DoctorAppointmentView</title>
<!-- InstanceEndEditable -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
<link href="patientCSS.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

<style type="text/css">
    @media screen and (min-width: 768px) {
        .modal-dialog {
          width: 700px; /* New width for default modal */
        }
        .modal-sm {
          width: 350px; /* New width for small modal */
        }
    }
    @media screen and (min-width: 992px) {
        .modal-lg {
          width: 1020px; /* New width for large modal */
        }
    }
</style>

</head>

<body>

<table width="90%" border="0" cellpadding="5">
 
  <tbody>
    <tr>
      <td class="companylogo"><a href="doctorIndex.php"><img src="images/logo.png" width="150"></a></td>
      <td class="EqunioxTitle">Equinox Medicine Health Portal</td>
      <td align="center" class="signOut">
          <img src="images/man.png" alt="man" height="90px" width="90px" >
          <p> Dr. <span><?php echo "$userFirstName $userLastName"; ?></span></p>
          <a href="login.php">Sign Out</a>
      </td>
    </tr>
    
    
    <tr>
      <td align="center">
    
      <table width="90%" border="0" cellpadding="0">
        <tbody>
         
          <tr class="navcenter">
            <td>
   
               <!--Doctor Navigation-->
               <p>
                    <a href="doctorIndex.php">
                      <button>Home</button>
                    </a>
                  </p>

                  <p>
                    <a href="doctorAppointment.php">
                      <button>Appointments</button>
                    </a>
                  </p>

                  <p>
                    <a href="doctorMessages.php">
                      <button>Messages</button>
                    </a>
                  </p>
                  <p>
                    <a href="doctorPrescriptionRequest.php">
                      <button>Refill Requests</button>
                    </a>
                  </p>

                  <p>
                  <a href="VidyoWebApp.html">
                      <button>Video Call</button>
                    </a>
                  </p>
                <!--End Doctor Navigation-->
            </td>
          </tr>
        </tbody>
      </table>
      
      </td>
      
      <td colspan="2">
      <table width="90%" border="0" cellpadding="0">
        <tbody>
          <tr class="banner">
           
           <td class="appTitle">Appointments</td>

           </tr>
        </tbody>
      </table>
      <!--Appointment Content-->
      <table width="90%" border="0" cellpadding="0" style="padding: 0px 10px 0px 10px;">
        <tbody>
          <tr>
             <div id="textContainer">
                <td class="mainBodyTitle">
                   
                </td>




                <?php
            $appointmentQuery = "SELECT * FROM Appointment WHERE PatientID = '$_SESSION[userID]'";

            console.log($appointmentQuery);
            
            $appointmentResult = $conn->query($appointmentQuery);
            
            if($appointmentResult->num_rows > 0)
            {
              while($row = mysqli_fetch_array($appointmentResult))
              {	
                    $appointmentID = $row['AppointmentID'];
                    $appointmentPatientID = $row['PatientID'];
                    $appointmentDate     = $row['Date'];
                    $appointmentTime    = $row['Time'];
                    $appointmentPatientNotes = $row['PatientNotes'];
                    $appointmentDoctorID = $row['DoctorID'];
                    $appointmentPatientNameResult = mysqli_query($conn,"SELECT * FROM User WHERE PatientID = '$appointmentPatientID'");
                    while($appointmentPatientNameRow = mysqli_fetch_array($appointmentPatientNameResult))
                    {
                      $appointmentPatientFirstName = $appointmentPatientNameRow['FirstName'];
                      $appointmentPatientLastName = $appointmentPatientNameRow['LastName'];
                    }
      ?>
          <tr class="info">
          
          	<td> 
         
             <p><?php echo "$appointmentDate"?> at <?php echo "$appointmentTime"?> with <?php echo "$appointmentPatientFirstName $appointmentPatientLastName"?> </p>
             
          	  </td>
          	  
          	<td id="rightInfoCenter">

            
             <p>

            
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewApp">
               view
              </button>

              


             <!-- Modal -->
             <div class="modal fade" id="viewApp" tabindex="-1" role="dialog" aria-labelledby="viewAppLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                    
                      <h4 class="modal-title" id="viewAppLabel"> Doctors Name:</h4> <span><?php echo "$userFirstName $userLastName"; ?></span>

                      
                    </div>
                      <form action="patientAppointmentPatientView.php" method="post">
                    <div class="modal-body">
                    <div class="row justify-content-center">
                <div class="col-5">
                    <h4>Patient Name:</h4> <span><?php echo "$appointmentPatientFirstName $appointmentPatientLastName"; ?></span>
                    <h4>Patient Notes:</h4> <span><?php echo "$appointmentPatientNotes";?></span>
                </div>
                <div class="col-5">
                        <h4>Date of Appointment:</h4> <span><?php echo "$appointmentDate";?></span>
                        <h4>Time of Appointment:</h4> <span><?php echo "$appointmentTime";?></span>   
                </div>
                        <br>
                        
                      
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editNotesModal">Edit Notes</button>
                    <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#cancelConfirmModal">Cancel Appointment</button>
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
                      
                    </div>
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



                      </form>
                  </div>
                </div>
              </div>
          
            </td>
            
          </tr>
          <!--End of Section 1 Appointments-->
             </p>

          	  
          	  </td>
          </tr>
          <?php
          }
      }?>
          <!--End of Section 3 Messages-->
        </tbody>
      </table>
      <!--End appointment content-->
      <p>&nbsp;</p>
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
