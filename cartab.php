<?php
 $conn=mysqli_connect("localhost","root","","wtassign5");
 if($conn)
 {
    echo "conecction sucessfull";
 }
 else
 {
    echo "not connected";
    exit();
 }

 $q2="create table car(car_id integer,Car_Name varchar(10),company varchar(10),cyear integer,ccolour varchar(10),fuel varchar(8))";
 $r2=mysqli_query($conn,$q2);
 if($r2)
 {
    echo  "<br> car table created";
 }
 else 
 {
    echo "<br>table not created";
 }
 mysqli_close($conn);

?>