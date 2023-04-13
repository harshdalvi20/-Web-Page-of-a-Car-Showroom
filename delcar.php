<?php
$id=$_REQUEST["cid"];
$conn=mysqli_connect("localhost","root","","wtassign5");
 if($conn)
 {
	 echo "successfull";
 }
 else
 {
	 echo "not connected";
 }
 $q1="DELETE FROM car WHERE car_id=".$id;
 $r1=mysqli_query($conn,$q1);
 if($r1)
 {
    echo "<br>deleted data from car table";

 }
 else 
 {
    echo "not deleted";
 }
 mysqli_close($conn);
 ?>