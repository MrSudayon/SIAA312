<?php
$servername="localhost";
$username="root";

$password="";
$dbase="bossbburgers";

$conn=mysqli_connect($servername,$username,$password,$dbase);

if(!$conn) {
	die("ERROR: Could not connect. " . mysqli_connect_error($conn));
}
?>