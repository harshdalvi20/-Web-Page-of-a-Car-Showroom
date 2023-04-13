<?php

 $conn=mysqli_connect("localhost","root","","wtassign5");
  if($conn)
  {
      echo "successfull<br>";
  }
  else
  {
      echo "not connected";
  }
  $q1="select * from car ";
  $r1=mysqli_query($conn,$q1);
  $count=mysqli_num_rows($r1);
  echo "<br>Number of records = ".$count;
if($r1)
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
echo "<br>error in operation";
  mysqli_close($conn);
  ?>