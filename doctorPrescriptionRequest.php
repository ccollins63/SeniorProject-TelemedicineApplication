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
                  <a href="VidyoWebApp.php">
                      <button>Video Call</button>
                    </a>
                  </p>
                <!--End Doctor Navigation-->

                  </td>
                </tr>
              </tbody>
            </table>

          </td>

          <!--Body-->
          <td>
            <table class="patientbody" width="90%" border="2" cellpadding="0">
              <tbody>
                <tr>
                  <td colspan="2">
                    <!--Site Title--> 
                    <div class="row justify-content-center">
                      <div class="col-sm-10">
                        <p class="appTitle">Refill Requests</p>
                      </div>
                    </div>
                    <!--Notification-->
                    <?php
      $prescriptionQuery = "SELECT * FROM Prescription WHERE PrescriptionRequest = 'TRUE'";

      console.log($prescriptionQuery);
      
      $prescriptionResult = $conn->query($prescriptionQuery);
      
      if($prescriptionResult->num_rows > 0)
      {
        while($row = mysqli_fetch_array($prescriptionResult))
        {	
              $prescriptionName     = $row['PrescriptionName'];
              $prescriptionNotes    = $row['PrescriptionNotes'];
              $prescriptionQuantity = $row['PrescriptionQuantity'];
              $prescriptionDate     = $row['PrescriptionDate'];
              $prescriptionDoctorID = $row['DoctorID'];
              $prescriptionDoctorNameResult = mysqli_query($conn,"SELECT * FROM User WHERE PatientID = '$prescriptionDoctorID'");
              while($prescriptionDoctorNameRow = mysqli_fetch_array($prescriptionDoctorNameResult))
              {
                $prescriptionDoctorLastName = $prescriptionDoctorNameRow['LastName'];
              }
      ?>
            <div class="prescriptionContainer">
              <div class="spaceBetween">
                <h5 class="drugName"><?php echo "$prescriptionName"; ?></h5>
              </div>
              <div>
                <p>Prescribed on: <?php echo "$prescriptionDate"; ?></p>
                <span><?php echo "$userFirstName $userLastName"; ?> requests a refill.</span><span style="margin-left: 20px">Quantity: <?php echo "$prescriptionQuantity"; ?></span>
              
                <button type="button" class="btn btn-primary" style="max-width: 100px; float:right;" id="accept">Accept</button>
                <button type="button" class="btn btn-danger" style="max-width: 100px; float:right;" id="reject">Reject</button>
              </div>
            </div>

        <?php
          }
      }?>

                  </td>
                  <!--Notification End-->
                </tr>
              </tbody>
            </table> <p>&nbsp;</p> </td>

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
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/telemedicine.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
