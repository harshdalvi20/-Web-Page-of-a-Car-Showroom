<?php
$id=$_REQUEST["cid"];
$nam=$_REQUEST["cnm"];
$comp=$_REQUEST["com"];

$conn=mysqli_connect("localhost","root","","wtassign5");
if($conn)
echo "connection successful";
else
{
echo "connection error";
exit();
}
$q1="UPDATE car SET Car_Name='$nam', company='$comp' WHERE car_id =".$id;
$r1=mysqli_query($conn,$q1);
if($r1)
{
echo "<br>updated successfully";
}
else{
    echo "error updating";
}
mysqli_close($conn);
?>
