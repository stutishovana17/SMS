
<?php
include 'connection_registration.php';
 
if(isset($_POST['sub'])){
	//$s=$_POST['studentID'];
	$f=$_POST['fullname'];
	$m=$_POST['mobile'];
	$c=$_POST['course'];
  $e=$_POST['email'];
	$p=$_POST['pass'];
  $cp=$_POST['cpass'];

 
	//code for image uploading
	if($_FILES['f1']['name']){
		move_uploaded_file($_FILES['f1']['tmp_name'], "imageupload/".$_FILES['f1']['name']);
		$img="imageupload/".$_FILES['f1']['name'];
	}
  //$SELECT = "SELECT email from student where email = ? Limit 1";
	$i="insert into student(fullname,mobile,course,email,password,cpassword,image) 
  values('$f','$m','$c','$e','$p','$cp','$img')";
		if(mysqli_query($con, $i)){
      header ('location:student_login.php');
	}
}
?>
<html>
	<head>
	<style type="text/css">
   body{
       background-image:url(pic3.jpg);
       height:100vh;
       background-size: cover;
       background-position: center;
   }
   form{
    position:relative;
    z-index:1;
    background:  hsl(0,100%,90%);
    max-width:360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align:center;
}
form input {
    font-family:"Roboto",sans-serif;
    outline:1;
    background: #f2f2f2;
    width:100%;
    border:0;
    margin: 0 0 15px;
    padding:15px;
    box-sizing:border-box;
    font-size:14px;
}

   </style>
	<meta charset="UTF-8">
	<title>Student Registration Panel</title>


	
	</head>
    
	<body>
    <h1><center><b> Student Registration Panel</b></center></h1>
    <center>
		<form method="POST" enctype="multipart/form-data">
		
			<table>
				<tr>
					<td><b>
						StudentID
						<input type="text" name="studentID" disabled >
                     </b>	</td>
				</tr>
				<tr>
					<td><b>
						FullName
						<input type="text" name="fullname" >
                       </b></td>
				</tr>
				<tr>
					<td><b>
						Mobile
                    </b><input type="text" name="mobile">
</b></td>
				</tr>
				<tr>
					<td><b>
					 Course
						<select name="course" >
							<option value="">Select</option>
							<option value="mba">MBA</option>
							<option value="mca">MCA</option>
                             <option value="msc">Msc</option>
                          <option value="mcom">MCom</option>
                         <option value="mtech">Mtech</option>
						</select>
            </b></td>
				</tr>
        <tr>
					<td><b>
						Email
						<input type="text" name="email" >
                    </b></td>
				</tr
        <tr>
					<td><b>
						Password
						<input type="password" name="pass"  >
                    </b></td>
				</tr>
        <tr>
					<td><b>
					 Confirm	Password
						<input type="password" name="cpass"  >
                    </b></td>
				</tr>
				<tr>
					<td><b>
						Image
						<input type="file" name="f1" >
                    </b></td>
				</tr>
				<tr><center>
					<td>
						<input type="submit" value="submit" name="sub">
					</td>
</center>	</tr>
            
			</table>
			<p class ="message"> Already Registered? <a href="student_login.php">Login</a></p>
		</form>
</center>
	</body>
</html>
</div>
