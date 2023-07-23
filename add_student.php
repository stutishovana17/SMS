<?php
	$con = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($con,"sms");
	$fullname = $_POST['fullname'];
    $studentID =$_POST['studentID'];
    $mobile=$_POST['mobile'];
    $course=$_POST['course'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
	$image=$_POST['image'];
	$query = "INSERT INTO student(fullname,studentID,mobile,course,email,password,cpassword,image) VALUES('$fullname','$studentID','$mobile',
	'$course','$email','$password','$cpassword','$image')";
	$query_run = mysqli_query($con,$query);
?>
?>
<script type="text/javascript">
	alert("Student added successfully.");
	window.location.href = "admin_dashboard.php";
</script>



