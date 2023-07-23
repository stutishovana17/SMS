<?php
       if(isset($_POST['save']))
        {
       $con=mysqli_connect("localhost","root","");
       $db=mysqli_select_db($con,"sms");
       
       $query ="UPDATE student SET fullname='$_POST[fullname]',mobile='$_POST[mobile]',course='$_POST[course]',
	   image='$_POST[image]' WHERE studentID = '$_POST[studentID]'";
       $query_run=mysqli_query($con,$query);
       
       header("Location:student_dashboard.php"); 
        }
        else
    
        if(isset($_POST['cencel']))
        {
            header("Location:student_dashboard.php");
        }
   
       
       ?>