<?php 
$conn = mysqli_connect("localhost","root","","monitorsys");
 
// Check connection
if (mysqli_connect_errno()){
	echo "connection failed : " . mysqli_connect_error();
}
 
?>