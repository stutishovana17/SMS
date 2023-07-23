<?php

require_once('connection_registration.php');
$email = $password ='';

//$email = $_POST['email'];
//$password = $_POST['password'];
//$cpassword = $_POST['cpassword'];
$sql = "SELECT * FROM student WHERE email='$_POST[email]' AND password='$_POST[password]'";

$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0)
{
	
	while($row = mysqli_fetch_assoc($result))
	{
		
		$studentID = $row["studentID"];
		$email = $row["email"];
		session_start();
		$_SESSION['studentID'] = $studentID;
		$_SESSION['email'] = $email;
	}
	header("Location: student_dashboard.php");

}
else
{
	echo"<h1><b><center><br><br>Invalid Email and Password<br><br></center></b></h1>";
}

?>
