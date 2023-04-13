<?php
$id=$_REQUEST["cid"];

$conn=mysqli_connect("localhost","root","","wtassign5");
if($conn)
echo "connection successful";
else
{
echo "connection error";
exit();
}
$q1="SELECT * FROM car where car_id =".$id;
$r1=mysqli_query($conn,$q1);
if($r1)
{
$n=mysqli_num_rows($r1);
if($n>0)
{
while($info=mysqli_fetch_array($r1))
{
    echo"<br>";
    echo "<br> car id is ".$info['car_id'];
    echo "<br> car name ".$info['Car_Name'];
    echo "<br>Company name ".$info['company'];
    echo "<br>Car year ".$info['cyear'];
    echo "<br>car color ".$info['ccolour'];
    echo "<br>Car fuel ".$info['fuel'];
}
}
else
echo "<br>no record found";
}
else
{
echo "error in search operation";
}
mysqli_close($conn);
?>