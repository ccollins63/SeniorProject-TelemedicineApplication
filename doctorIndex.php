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

$query = "SELECT * FROM Appointment WHERE PatientID = '$_SESSION[userID]'";
$result = $conn->query($query);
if ($result) 
  { 
    // it return number of rows in the table. 
    $numOfAppointments = mysqli_num_rows($result); 
  } 
  else
  {
    $numOfAppointments = 0;
  }

$query = "SELECT * FROM Prescription WHERE PrescriptionRequest = 'TRUE'";
$result = $conn->query($query);
if ($result) 
  { 
    // it return number of rows in the table. 
    $numOfPrescriptions = mysqli_num_rows($result); 
  } 
  else
  {
    $numOfPrescriptions = 0;
  }
?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/Tem2.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>DoctorView</title>
<!-- InstanceEndEditable -->
<link href="patientCSS.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
<!-- InstanceEndEditable -->
</head>

<body>

<table width="90%" border="0" cellpadding="5">
 
  <tbody>
    <tr>
      <td class="companylogo"><img src="images/logo.png" width="150"></td>
      <td class="EqunioxTitle">Equinox Medicine Health Portal</td> <br>
     
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
      
      <td><!-- InstanceBeginEditable name="MainBody" -->


      <!--Patient View Dashboard-->
      <table width="90%" border="0" cellpadding="0">
        <tbody>
          <tr class="banner">
            <td width="22%"><img src="images/man.png" alt="man" height="100px" width="100px" ></td>
            <td width="78%" class="signout"><p id="a">Welcome, Dr.  <span><?php echo "$userFirstName $userLastName"; ?></span></p>
            <a href="login.php">Sign Out</a>
            </tr>
          </tbody>
      </table>
      <table class="patientbody" width="90%" border="2" cellpadding="0">
        <tbody>
          <tr>
            <td colspan="2">
              
              <h3>Appointments</h3>
              
              </td>
            </tr>
          <tr>
          <td><p>You have <?php echo "$numOfAppointments"; ?> upcoming appointments.</p></td>
            <td><button class="sectionButton" onclick="location.href='doctorAppointment.php'" type="button">View all appointments</button></td>
            </tr>
          <!--End of Section 1 Appointments-->
          <!--Section 2 Prescriptions-->
          <tr>
            <td colspan="2"><h3>Prescriptions</h3></td>
            </tr>
          <tr>
          <td><p>You have <?php echo "$numOfPrescriptions"; ?> upcoming prescriptions.</p></td>
            <td><button class="sectionButton" onclick="location.href='doctorPrescriptionRequest.php'">View Refill Requests</button></td>
            </tr>
          <!--End of Section 2 Prescriptions-->
          
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