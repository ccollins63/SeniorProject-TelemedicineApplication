<?php
include 'connect-mysql.php';
$conn = connectDB();
$userFirstName = "SELECT FirstName FROM User WHERE PatientID = UserID";
$userLastName = "SELECT LastName FROM User WHERE PatientID = UserID";
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
      <td class="companylogo"><img src="images/logo.png" width="150"></td>
      <td class="EqunioxTitle">Equinox Medicine Health Portal</td>
      <td align="center" class="signOut">
          <img src="images/man.png" alt="man" height="90px" width="90px" ><br>
          <span>$userFirstName $userLastName</span><br>
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
      
      <td colspan="2"><!-- InstanceBeginEditable name="MainBody" -->
      <!--Patient View Dashboard-->
      <table width="90%" border="0" cellpadding="0">
        <tbody>
          <tr class="banner">
           
           <td class="appTitle">Appointments</td>

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
            
            <p>Upcoming </p>
            	
            </div>
           
            <td>
             
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Schedule Appointment
              </button>
              
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
                    <div class="modal-body">
                       What date works for you? <input type="date" name="bday"><br>
                       What time? 
                       <input type="time" id="time" name="time" min="9:00" max="18:00" required>
                        <br>
                        (Office hours are 9am to 6pm)<br><br>
                        <div class="form-group">
                            <label for="extraNotes">Extra Notes</label>
                            <textarea class="form-control" id="extraNotes" rows="3"></textarea>
                        </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Submit Request</button>
                    </div>
                  </div>
                </div>
              </div>
          
            </td>
            
          </tr>
          <!--End of Section 1 Appointments-->
          <!--Section 2 Prescriptions-->
          <tr class="info">
            <td>
             
             <p>Monday,  March 21, 2019 with John Smith MD</p>
             
               <p>Wednesday, April 10, 2019 with Sarah Smith MD</p>
               
               </td>
               
            <td id="rightInfoCenter">
            
             <p><a href="appointmentPatientView.php">View</a></p>
              <p>View</p>
              
              </td>
          </tr>
          <!--End of Section 2 Prescriptions-->
          <!--Section 3 Messages-->
          <tr>
            <td class="mainBodyTitle">
            
            <p>Past </p>
            
            </td>
            
            <td>
             
             <label for="Show">Select:</label>
              <select name="Show" id="Show" title="Show Past">
                <option value="1">3 Months</option>
              </select>
              
              </td>
          
          </tr>
          <tr class="info">
          
          	<td> 
         
         	  <p>Monday, March 21, 2019 with John Smith MD</p>
          	  <p>Monday, March 21, 2019 with John Smith MD</p>
          	  <p>Monday, March 21, 2019 with John Smith MD</p>
          	  <p>Monday, March 21, 2019 with John Smith MD</p>
          	  
          	  </td>
          	  
          	<td id="rightInfoCenter">
         	  
         	  <p>View</p>
          	  <p>View</p>
          	  <p>View</p>
          	  <p>View</p>
          	  
          	  </td>
          </tr>
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
