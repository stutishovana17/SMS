<?php
include'connection_registration.php';
if (isset($_POST["save"])) {
    $con=mysqli_connect("localhost", "root", "");
    $db=mysqli_select_db($con, "sms");

    $studentID=$_POST["studentID"];
    $query=   "UPDATE student SET fullname='$_POST[fullname]',course='$_POST[course]',date='$_POST[date]',
    faculty_name='$_POST[faculty_name]'WHERE studentID = '$_POST[studentID]'";
        
    $query_run=mysqli_query($con, $query);
         
    header("Location: admin_dashboard.php");
}
       
?>