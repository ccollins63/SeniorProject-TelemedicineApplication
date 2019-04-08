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
      
      <td><!-- InstanceBeginEditable name="MainBody" -->
      <!--Patient View Dashboard-->
      <table width="90%" border="0" cellpadding="0">
        <tbody>
          <tr class="banner">
           <td class="appTitle">Patient Profile</td>
          </tr>
        </tbody>
      </table>
      <!--Patient Profile-->
      <div style="padding: 5px; text-align: center;">
        <img src="images/man.png" style="max-width: 200px; margin: auto; display: block;">
      </div>
      <form style="margin: 0 auto; width: 50%; text-align: center;">
            <div class="form-group row">
              <label for="staticFirstName" class="col-sm-2 col-form-label">First Name</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticName" value="<?php echo htmlspecialchars($userFirstName); ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="staticName" class="col-sm-2 col-form-label">Last Name</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticName" value="<?php echo htmlspecialchars($userLastName); ?>">
              </div>
            </div>
            <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email Address</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo htmlspecialchars($userEmail); ?>">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="staticPhoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="staticPhoneNumber" value="<?php echo htmlspecialchars($userPhoneNumber); ?>">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="staticBirth" class="col-sm-2 col-form-label">Birthday</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="staticBirth" value="<?php echo htmlspecialchars($userBirthday); ?>">
                    </div>
                  </div>
          </form>
            <button class="sectionButton" onclick="location.href='profile-edit.php'" type="button">Edit Profile</button><br>
            <button class="sectionButton" onclick="location.href='login.php'" type="button">Sign Out</button>
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
