<?php

require __DIR__ . '/auth.php'; ?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PatientAppointmentView</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
<link href="patientCSS.css" rel="stylesheet" type="text/css">
</head>

<body>

<table width="90%" border="0" cellpadding="5">
 
  <tbody>
    <tr>
      <td class="companylogo"><img src="images/logo.png" width="150"></td>
      <td class="EqunioxTitle">Equinox Medicine Health Portal</td>
      <td align="center" class="signOut">
          <img src="images/man.png" alt="man" height="90px" width="90px" ><br>
          <span>John Doe</span><br>
          <a href="#">Sign Out</a>
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
                    <a href="doctorCreateUser.php">
                      <button>New Patient</button>
                    </a>
                  </p>

                  <p>
                    <a href="video.php">
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
                    <p>Today (April 8, 2019) </p>
                </td>
            </div>        
          </tr>

          <tr class="info">
            <td>
              <b><p>4:30PM with Jane Doe</p></b>
              <p>5:30PM with Jake Doe</p>  
            </td>
            <td id="rightInfoCenter">
             <p><a href="appointmentView.html">View</a></p>
             <p>View</p>
            </td>
          </tr>

          <tr>
                <td class="mainBodyTitle">
                    <p>Tomorrow (April 9, 2019) </p>
                
                </td>
          </tr>
          <tr class="info">
          	<td> 
         	    <p>9am with John Smith</p>
          	  <p>10:30am with Jane Smith</p>
          	  <p>11am with Taylor Rowe</p>
          	  <p>1pm with Madison Smith</p>
          	</td>
          	<td id="rightInfoCenter">
         	  <p>View</p>
          	  <p>View</p>
          	  <p>View</p>
          	  <p>View</p>
          	</td>
          </tr>
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
