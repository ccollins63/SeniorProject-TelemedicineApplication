<?php
function connectDB()
{
    $server = "localhost";
    $db="EquinoxHP";
	$user="adminEquinox";
	$pwd="Password#123";
	$connection=new mysqli($server,$user,$pwd, $db);
	return $connection;
}

function closeConnection($result, $connection)
{
    $result->close();
    $connection->close();
}
?>