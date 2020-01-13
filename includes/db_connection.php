<?php
 function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "cars";
 
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

if($conn -> connect_error)
{
	die("$conn->connect_errno: $conn->connect_error");
}
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>