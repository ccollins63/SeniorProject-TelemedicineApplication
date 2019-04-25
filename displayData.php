<?php
include 'connect-mysql.php';
$conn = connectDB();

if($conn->connect_error) die ("Unable to connect to database".$conn->connect_error);

$userQuery = "SELECT * FROM User";

$result = $conn->query($userQuery);

echo "<table border='1'>
<tr>
<th>PatientID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>DOB</th>
<th>Gender</th>
<th>Phone</th>
<th>Email</th>
<th>Password</th>
<th>Position</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['PatientID'] . "</td>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "<td>" . $row['City'] . "</td>";
echo "<td>" . $row['State'] . "</td>";
echo "<td>" . $row['DateOfBirth'] . "</td>";
echo "<td>" . $row['Gender'] . "</td>";
echo "<td>" . $row['PhoneNumber'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['Password'] . "</td>";
echo "<td>" . $row['Position'] . "</td>";

echo "</tr>";
}
echo "</table>";

$prescriptionQuery = "SELECT * FROM Prescription";

$result = $conn->query($prescriptionQuery);

echo "<table border='1'>
<tr>
<th>PrescriptionID</th>
<th>PatientID</th>
<th>DoctorID</th>
<th>PrescriptionName</th>
<th>PrescriptionDate</th>
<th>PrescriptionNotes</th>
<th>PrescriptionQuantity</th>
<th>PrescriptionRequest</th>
<th>RequestConfirm</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['PrescriptionID'] . "</td>";
echo "<td>" . $row['PatientID'] . "</td>";
echo "<td>" . $row['DoctorID'] . "</td>";
echo "<td>" . $row['PrescriptionName'] . "</td>";
echo "<td>" . $row['PrescriptionDate'] . "</td>";
echo "<td>" . $row['PrescriptionNotes'] . "</td>";
echo "<td>" . $row['PrescriptionQuantity'] . "</td>";
echo "<td>" . $row['PrescriptionRequest'] . "</td>";
echo "<td>" . $row['RequestConfirm'] . "</td>";
echo "</tr>";
}
echo "</table>";

$messagesQuery = "SELECT * FROM Messages";

$result = $conn->query($messagesQuery);

echo "<table border='1'>
<tr>
<th>MessageID</th>
<th>Subject</th>
<th>SenderID</th>
<th>RecipientID</th>
<th>MessageBody</th>
<th>DateCreated</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['MessageID'] . "</td>";
echo "<td>" . $row['Subject'] . "</td>";
echo "<td>" . $row['SenderID'] . "</td>";
echo "<td>" . $row['RecipientID'] . "</td>";
echo "<td>" . $row['MessageBody'] . "</td>";
echo "<td>" . $row['DateCreated'] . "</td>";

echo "</tr>";
}
echo "</table>";

$appointmentQuery = "SELECT * FROM Appointment";

$result = $conn->query($appointmentQuery);

echo "<table border='1'>
<tr>
<th>AppointmentID</th>
<th>DoctorID</th>
<th>PatientID</th>
<th>Date</th>
<th>Time</th>
<th>DoctorNotes</th>
<th>PatientNotes</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['AppointmentID'] . "</td>";
echo "<td>" . $row['DoctorID'] . "</td>";
echo "<td>" . $row['PatientID'] . "</td>";
echo "<td>" . $row['Date'] . "</td>";
echo "<td>" . $row['Time'] . "</td>";
echo "<td>" . $row['DoctorNotes'] . "</td>";
echo "<td>" . $row['PatientNotes'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>