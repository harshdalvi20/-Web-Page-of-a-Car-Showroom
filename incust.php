<?php
$uid=$_REQUEST["un"];
$n=$_REQUEST["nm"];
$ag=$_REQUEST["age"];
$ad=$_REQUEST["adr"];
$m=$_REQUEST["mob"];


 $conn=mysqli_connect("localhost","root","","wtassign5");
 if($conn)
 {
	 echo "successfull";
 }
 else
 {
	 echo "not connected";
 }
  
    $q1="insert into customer values('$uid','$n','$ag','$ad','$m')";
 $r1=mysqli_query($conn,$q1);
 if($r1)
 {
    echo "<br>Data inserted in customer table successful ";
 }
    else
    {
        echo "<br>not inserted";
    }
 mysqli_close($conn);
?>