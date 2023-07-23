<?php
   
if (isset($_POST["delete"]))
 {
    $con=mysqli_connect("localhost","root","");
   $db=mysqli_select_db($con,"sms");
    $faculty_id=$_POST["faculty_id"];
    $query="DELETE FROM faculty WHERE faculty_id='$_POST[faculty_id]'";
    $query_run=mysqli_query($con, $query);
    header("Location:admin_dashboard.php");
}
else

if(isset($_POST["cencel"]))
{
    header("location:admin_dashboard.php");
}
?>