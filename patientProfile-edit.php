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
        $userEmail = $row['Email'];
        $userBirthday = $row['DateOfBirth'];
        $userPhoneNumber = $row['PhoneNumber'];
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
<link href="css/bootstrap-4.2.1.css" rel="stylesheet" type="text/css">
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
      <td class="EqunioxTitle" colspan="2">Equinox Medicine Health Portal</td>
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
           <td class="appTitle">Patient Profile</td>
			<!--
            <td width="22%"><img src="images/Ali.jpeg" alt="Ali" height="150px" width="150px" ></td>
            <td width="78%" class="signout"><p id="a">Welcome, John Doe </p>
              <p id="b"> Sign Out </p></td>
			-->
          </tr>
        </tbody>
      </table>
      <!--Patient Profile-->
      <div style="padding: 15px; text-align: center;">
        <img src="images/man.png" style="max-width: 200px; margin: auto; display: block;">
        <span class="glyphicon glyphicon-camera" aria-hidden="true"></span><a href="#" style="padding: 10px 5px 10px 5px;">Change Picture</a>
      </div>
      <form style="margin: 0 auto; width: 50%; text-align: center;">
      <form action="profileInput.php" method="post">
            <div class="form-group row">
              <label for="staticFirstName" class="col-sm-2 col-form-label">First Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="staticFirstName" value=<?php echo "$userFirstName"?>>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticLastName" class="col-sm-2 col-form-label">Last Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="staticLastName" value=<?php echo "$userLastName"?>>
              </div>
            </div>
            <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="staticEmail" value=<?php echo "$userEmail"?>>
                    </div>
            </div>
            <div class="form-group row">
                    <label for="staticBirth" class="col-sm-2 col-form-label">Date Of Birth</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="staticBirth" value=<?php echo "$userBirthday"?>>
                    </div>
                  </div>
          </form>
          <button type="submit" class="btn btn-primary">Submit Edits</button><br><br>
      <!-- InstanceEndEditable --></td>
      <td> &nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
  
</table>

</body>
<!-- InstanceEnd --></html>
