<?php
 $conn=mysqli_connect("localhost","root","");
 if($conn)
 {
	 echo "connection successful";
 }
 else
 {
	 echo "not connected";
	 exit();
 }
 $q1="create database wtassign5";
 $r1=mysqli_query($conn,$q1);
 if($r1)
 {
	 echo "db created";
 }
 else{
	 echo "not created";
 }
 mysqli_close($conn);

?>