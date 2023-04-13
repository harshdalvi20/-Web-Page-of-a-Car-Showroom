<?php
$id=$_REQUEST["cid"];
$nam=$_REQUEST["cnm"];
$comp=$_REQUEST["com"];
$yer=$_REQUEST["yr"];
$cols=$_REQUEST["col"];
$fu=$_REQUEST["fuel"];

 $conn=mysqli_connect("localhost","root","","wtassign5");
 if($conn)
 {
	 echo "successfull"; 
 } 
 else
 {
	 echo "not connected";
 }
  
    $q2="insert into car values ('$id','$nam','$comp','$yer','$cols','$fu')";
 $r2=mysqli_query($conn,$q2);
 if($r2)
 {
    echo "<br>Data inserted in car table successful ";
 }
    else
    {
        echo "<br>not inserted";
    }
 mysqli_close($conn);
?>