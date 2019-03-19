<?php
DEFINE ('DB_USER', 'ccollins');
DEFINE ('DB_PSWD', 'Password1');
DEFINE ('DB_HOST', 'equinoxhp.com');
DEFINE ('DB_NAME', 'Database');

$dbconnect = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);
?>
