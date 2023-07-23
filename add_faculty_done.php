<?php
include'connection_registration.php';
if(isset($_POST["add"]))
{
    $con = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($con,"sms");
    $faculty_id=$_POST["faculty_id"];
    $faculty_name=$_POST["faculty_name"];
    $faculty_email=$_POST["faculty_email"];
    $dept=$_POST["dept"];
    $experience=$_POST["experience"];
    $qualification=$_POST["qualification"];
    $query="INSERT INTO faculty(faculty_id,faculty_name,faculty_email,dept,experience,qualification)
    VALUES('$faculty_id','$faculty_name','$faculty_email','$dept','$experience','$qualification')";
    $query_run = mysqli_query($con,$query);
    if ($query_run==true) 
    {
        header("Location:admin_dashboard.php");
    }
}


?>

