<?php
 
 $conn=mysqli_connect("localhost","root","","wtassign5");
 if($conn)
 {
	 echo "connection successful";
 }
 else
 {
	 echo "not connected";
	 exit();
 }
 $q1="create table customer (cust_id integer,Name varchar(10),age integer,Address varchar(10),Mob_num integer) ";
 $r1=mysqli_query($conn,$q1);
 if($r1)
 {
	 echo "<br>cust table created";
 }
 else
 {
	 echo "table not created";
 }
 mysqli_close($conn);

?>