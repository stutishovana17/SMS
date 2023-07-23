<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"SMS");
$query ="INSERT INTO attendence VALUES('','$_POST[student_name]','$_POST[course_name]','$_POST[date]','$_POST[faculty_name]',
'$_POST[attended]')";
$query_run=mysqli_query($con,$query);
echo"The records are added to the database succesfully";

?>
<script type="text/javascript">
    alert("Student details added successfully");
    window.location.href="admin_dashboard.php";
</script>