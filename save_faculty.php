<?php
include("connection_registration.php");
       if(isset($_POST["save"]))
        {
    
       $faculty_id=$_POST["faculty_id"];
       $query ="UPDATE faculty SET faculty_name='$_POST[faculty_name]',faculty_email='$_POST[faculty_email]',dept='$_POST[dept]',experience='$_POST[experience]',
	   qualification='$_POST[qualification]' WHERE faculty_id = '$_POST[faculty_id]'";
       $query_run=mysqli_query($con,$query);
       
       header("Location: admin_dashboard.php"); 
        }
        else
    
        if(isset($_POST["cancel"]))
        {
            header("location:admin_dashboard.php");
        }
   
       
       ?>