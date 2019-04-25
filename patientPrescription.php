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
           <td class="appTitle">Prescriptions</td>
			<!--
            <td width="22%"><img src="images/Ali.jpeg" alt="Ali" height="150px" width="150px" ></td>
            <td width="78%" class="signout"><p id="a">Welcome, John Doe </p>
              <p id="b"> Sign Out </p></td>
			-->
          </tr>
        </tbody>
      </table>
      <!--Patient View Dashboard Part 2-->
      <div style="padding: 15px">
        <h4>You are on the following medications:</h4>
      </div>

      <?php
      $prescriptionQuery = "SELECT * FROM Prescription WHERE PatientID = '$_SESSION[userID]'";

      console.log($prescriptionQuery);
      
      $prescriptionResult = $conn->query($prescriptionQuery);
      
      if($prescriptionResult->num_rows > 0)
      {
        while($row = mysqli_fetch_array($prescriptionResult))
        {	
              $userFirstName = $row['FirstName'];
              $userLastName = $row['LastName'];
              $prescriptionName     = $row['PrescriptionName'];
              $prescriptionNotes    = $row['PrescriptionNotes'];
              $prescriptionQuantity = $row['PrescriptionQuantity'];
              $prescriptionDate     = $row['PrescriptionDate'];
              $prescriptionDoctorID = $row['DoctorID'];
              $prescriptionDoctorNameResult = mysqli_query($con,"SELECT * FROM User WHERE PatientID = '$prescriptionDoctorID'");
              while($prescriptionDoctorNameRow = mysqli_fetch_array($prescriptionDoctorNameResult))
              {
                $prescriptionDoctorFirstName = $prescriptionDoctorNameRow['FirstName'];
                $prescriptionDoctorLastName = $prescriptionDoctorNameRow['LastName'];
              }
      ?>
        <div class="prescriptionContainer">
          <div class="spaceBetween">
            <h5 class="drugName"><?php echo "$prescriptionName"; ?></h5>
            <p>Prescribed on: <?php echo "$prescriptionDate"; ?></p>
          </div>
          <div>
            <p><?php echo "$prescriptionNotes"; ?></p>
          <span>Prescribed by: <?php echo "$prescriptionDoctorFirstName $prescriptionDoctorLastName"; ?></span><span style="margin-left: 20px">Quantity: <?php echo "$prescriptionQuantity"; ?></span>
          <button class="sectionButton" style="float:right;" data-toggle="modal" data-target="#requestRefill">
            Request refill
          </button>
          <!--Modal-->
          <div class="modal fade" id="requestRefill" tabindex="-1" role="dialog" aria-labelledby="refillLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="refillLabel">Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Request refill for this drug?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Deny</button>
                    <button type="button" class="btn btn-primary" onclick="alert('Thank you, your request is has been submitted!')">Confirm</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
          }
      }?>
		  
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
