<?php

require __DIR__ . '/auth.php'; ?>

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
      <td class="EqunioxTitle">Equinox Medicine Health Portal</td>
    </tr>
   
    
    
    <tr>
      <td align="center">
    
      <table width="90%" border="0" cellpadding="0">
        <tbody>
         
          <tr class="navcenter">
            <td>
   
                  <!--Doctor Navigation-->
                  <p>
                    <a href="doctorIndex.html">
                      <button>Home</button>
                    </a>
                  </p>

                  <p>
                    <a href="doctorAppointment.html">
                      <button>Appointments</button>
                    </a>
                  </p>

                  <p>
                    <a href="doctorMessages.html">
                      <button>Messages</button>
                    </a>
                  </p>
                  <p>
                    <a href="doctorPrescriptionRequest.html">
                      <button>Refill Requests</button>
                    </a>
                  </p>
                  <p>
                    <a href="doctorCreateUser.html">
                      <button>New Patient</button>
                    </a>
                  </p>

                  <p>
                    <a href="video.html">
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
            <td width="78%" class="signout"><p id="a">Welcome, Dr. John Doe </p>
              <p id="b"> Sign Out </p></td>
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
            <td><p>Your next appointment is with Jane Doe at 4:30pm.</p></td>
            <td><button class="sectionButton" onclick="location.href='doctorAppointment.html'" type="button">View all appointments</button></td>
            </tr>
          <!--End of Section 1 Appointments-->
          <!--Section 2 Prescriptions-->
          <tr>
            <td colspan="2"><h3>Prescriptions</h3></td>
            </tr>
          <tr>
            <td><p>You have 1 refill request pending.</p></td>
            <td><button class="sectionButton" onclick="location.href='doctorPrescriptionRequest.html'">View Refill Requests</button></td>
            </tr>
          <!--End of Section 2 Prescriptions-->
          <!--Section 3 Messages-->
          <tr>
            <td colspan="2"><h3>Messages</h3></td>
            </tr>
          <tr>
            <td><p>You have 2 messages pending.</p></td>
            <td><button class="sectionButton" onclick="location.href='doctorMessages.html'">View Messages</button></td>
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