<?php
include 'connect-mysql.php';
$conn = connectDB();
<<<<<<< HEAD:index.php
$userFirstName      = "SELECT FirstName FROM User WHERE PatientID = UserID";
$userLastName       = "SELECT LastName FROM User WHERE PatientID = UserID";
$numOfAppointments  = "SELECT COUNT(*) FROM Appointment WHERE PatientID = UserID";
$numOfPrescriptions = "SELECT COUNT(*) FROM Prescription WHERE PatientID = UserID";
$numOfMessages      = "SELECT COUNT(*) FROM Messages WHERE PatientID = UserID";
=======
$userFirstName = "SELECT FirstName FROM User WHERE PatientID == UserID";
$userLastName = "SELECT LastName FROM User WHERE PatientID == UserID";
$numOfAppointments = "SELECT COUNT(*) FROM Appointment WHERE PatientID == UserID";
$numOfPrescriptions = "SELECT COUNT(*) FROM Prescription WHERE PatientID == UserID";
$numOfMessages = "SELECT COUNT(*) FROM Messages WHERE PatientID == UserID";

>>>>>>> 349613514966cde0ec9c9ea1d498c5269e562a34:index.php
?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/Tem2.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>PatientView</title>
<!-- InstanceEndEditable -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
<link href="patientCSS.css" rel="stylesheet" type="text/css">
<!-- InstanceEndEditable -->
</head>

<body>

<table width="90%" border="0" cellpadding="5">
 
  <tbody>
    <tr>
      <td class="companylogo"><img src="images/logo.png" width="150"></td>
      <td class="EqunioxTitle">Equinox Medicine Health Portal</td>
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
      
      <td><!-- InstanceBeginEditable name="MainBody" -->


      <!--Patient View Dashboard-->
      <table width="90%" border="0" cellpadding="0">
        <tbody>
          <tr class="banner">
            <td width="22%"><img src="images/man.png" alt="man" height="100px" width="100px" ></td>
<<<<<<< HEAD:index.php
            <td width="78%" class="signout"><p id="a">Welcome, <?php echo "$userFirstName $userLastName"; ?> </p>
              <a href="login.php">Sign Out</a></td>
=======
            <td width="78%" class="signout"><p id="a">Welcome, $userFirstName $userLastName </p>
              <p id="b"> Sign Out </p></td>
>>>>>>> 349613514966cde0ec9c9ea1d498c5269e562a34:index.php
            </tr>
          </tbody>
      </table>
      <table class="patientbody" width="90%" border="2" cellpadding="0">
        
        <tbody>
          <tr>
            <td colspan="2">
                <div class="alert alert-primary" role="alert" style="display: flex; justify-content: space-between;">
                    Upcoming video call in 5 minutes. 
                    <button type="button" class="btn btn-primary" style="max-width: 100px">Check in</button>
                  </div>
              <h3>Appointments</h3>
              
              </td>
            </tr>
          <tr>
<<<<<<< HEAD:index.php
            <td><p>You have <?php echo "$numOfAppointments"; ?> upcoming appointments.</p></td>
=======
            <td><p>You have $numOfAppointments upcoming appointments.</p></td>
>>>>>>> 349613514966cde0ec9c9ea1d498c5269e562a34:index.php
            <td>
                <button class="sectionButton" onclick="location.href='appointment.php'" type="button">View Upcoming</button>
            </td>
            </tr>
          <!--End of Section 1 Appointments-->
          <!--Section 2 Prescriptions-->
          <tr>
            <td colspan="2"><h3>Prescriptions</h3></td>
            </tr>
          <tr>
<<<<<<< HEAD:index.php
            <td><p>You have <?php echo "$numOfPrescriptions"; ?> upcoming prescriptions.</p></td>
=======
            <td><p>You have $numOfPrescriptions upcoming prescriptions.</p></td>
>>>>>>> 349613514966cde0ec9c9ea1d498c5269e562a34:index.php
            <td>
                <button class="sectionButton" onclick="location.href='prescription.php'" type="button">View Prescriptions</button>
            </td>
            </tr>
          <!--End of Section 2 Prescriptions-->
          <!--Section 3 Messages-->
          <tr>
            <td colspan="2"><h3>Messages</h3></td>
            </tr>
          <tr>
<<<<<<< HEAD:index.php
            <td><p>You have <?php echo "$numOfMessages"; ?> messages pending.</p></td>
=======
            <td><p>You have $numOfMessages messages pending.</p></td>
>>>>>>> 349613514966cde0ec9c9ea1d498c5269e562a34:index.php
            <td>
                <button class="sectionButton" onclick="location.href='messages.php'" type="button">View Messages</button>
            </td>
          </tr>
          <!--End of Section 3 Messages-->
          </tbody>
      </table>      <p>&nbsp;</p>      </td>







<!-- InstanceEndEditable --></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</body>
<!-- InstanceEnd --></html>
