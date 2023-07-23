<?php
 $con = mysqli_connect("localhost","root","","sms");

 if(!$con)
 {
     echo "Database connection faild...";
 }
 $studentID=$_GET['studentID'];
 echo $studentID;
 ?>