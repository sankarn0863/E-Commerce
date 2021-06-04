<?php
$host = 'localhost';
$user = 'b_f20_26';
$password = 'uuep47';
$database = 'b_f20_26_db';

$conn = mysqli_connect($host, $user, $password,$database);
if (!$conn)
{
	die('Error: Could not connect: ' . mysql_error());
}
?>