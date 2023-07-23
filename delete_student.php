<?php
 if(isset($_POST['delete']))
 {
    $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"sms");
    $query="DELETE FROM student WHERE studentID='$_POST[studentID]'";
    $query_run=mysqli_query($con,$query);
    header("Location:admin_dashboard.php");
}
else

if(isset($_POST['cencel']))
{
    header("location:admin_dashboard.php");
}
?>
  
      