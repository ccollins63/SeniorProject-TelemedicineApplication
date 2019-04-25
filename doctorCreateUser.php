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
        <div class="row justify-content-center">
                <div class="col-sm-10">
                    <p class="appTitle">Create User</p>
                </div>
        </div>
        <div class="row">
                <div class="col, skinnyForm">
                  <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputName">First Name*</label>
                        <input type="text" class="form-control" id="inputName"
                          placeholder="First name" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputLastName">Last Name*</label>
                        <input type="text" class="form-control" id="inputLastName"
                          placeholder="Last name" required>
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="roleSelect">Role*</label>
                        <select class="form-control" id="roleSelect">
                                <option>Patient</option>
                                <option>Doctor</option>
                                <option>Admin</option>
                        </select>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Generate Key</button><br><br>
                </form>
            </div>
        </div>
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
