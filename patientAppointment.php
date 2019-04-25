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
      
      <td colspan="2"><!-- InstanceBeginEditable name="MainBody" -->
      <!--Patient View Dashboard-->
      <table width="90%" border="0" cellpadding="0">
        <tbody>
          <tr class="banner">
           
           <td class="appTitle">Appointments</td>

            <!-- Button trigger modal -->
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Schedule Appointment
              </button>
              
              </td>

           </tr>
        </tbody>
      </table>
      <!--Patient View Dashboard Part 2-->
      <table width="90%" border="0" cellpadding="0" style="padding: 0px 10px 0px 10px;">
        <tbody>
          <!--Section 1 Appointments-->
         
            <tr>
            <div id="textContainer">
            	 <td class="mainBodyTitle">
        
            	
            </div>
           
            <td>
             
          
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Schedule your Appointment</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                      <form action="appointmentInput.php" method="post">
                    <div class="modal-body">
                       What date works for you? <input type="date" name="date"><br>
                       What time? 
                       <input type="time" id="time" name="time" min="9:00" max="18:00" required>
                        <br>
                        (Office hours are 9am to 6pm)<br><br>
                        <div class="form-group">
                            <label for="extraNotes">Extra Notes</label>
                            <textarea class="form-control" id="extraNotes" name="extraNotes" rows="3"></textarea>
                        </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="alert('Thank you, your request has been submitted!')" >Submit Request</button>
                    </div>
                      </form>
                  </div>
                </div>
              </div>
          
            </td>
            
          </tr>
          <!--End of Section 1 Appointments-->
          
          <!--End of Section 2 Prescriptions-->
          <!--Section 3 Messages-->
          <tr>
            <td class="mainBodyTitle">
            
          
          </tr>

          <?php
            $appointmentQuery = "SELECT * FROM Appointment WHERE PatientID = '$_SESSION[userID]'";

            console.log($appointmentQuery);
            
            $appointmentResult = $conn->query($appointmentQuery);
            
            if($appointmentResult->num_rows > 0)
            {
              while($row = mysqli_fetch_array($appointmentResult))
              {	
                    $appointmentID = $row['AppointmentID'];
                    $userFirstName = $row['FirstName'];
                    $userLastName = $row['LastName'];
                    $appointmentDate     = $row['Date'];
                    $appointmentTime    = $row['Time'];
                    $appointmentDoctorID = $row['DoctorID'];
                    $appointmentDoctorNameResult = mysqli_query($conn,"SELECT * FROM User WHERE PatientID = '$appointmentDoctorID'");
                    while($appointmentDoctorNameRow = mysqli_fetch_array($appointmentDoctorNameResult))
                    {
                      $appointmentDoctorLastName = $appointmentDoctorNameRow['LastName'];
                    }
      ?>
          <tr class="info">
          
          	<td> 
         
             <p><?php echo "$appointmentDate"?> at <?php echo "$appointmentTime"?> with <?php echo "Dr. $appointmentDoctorLastName"?> </p>
             
          	  </td>
          	  
          	<td id="rightInfoCenter">

            
             <p>
             
             <a href="patientAppointmentPatientView.php">

             View
             
             </a>
             </p>

          	  
          	  </td>
          </tr>
          <?php
          }
      }?>
          <!--End of Section 3 Messages-->
        </tbody>
      </table>
      <p>&nbsp;</p>
      <!-- InstanceEndEditable --></td>
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
