

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Panel</title>
  
</head>
<style type="text/css">
  	.container 
  {
    max-width: 500px;
    margin:40px auto;
}
form {
    border: 2px solid #1A33FF;
    background: #ecf5fc;
    padding:40px 50px 45px ;
}
.form-control:focus {
    border-color: #000;
    box-shadow: none;
}
.error {
    color: red;
    font-weight: 400;
    display: block;
    padding: 6px 0;
    font-size: 14px;
}
.form-control.error {
    border-color: red;
    padding: .375rem .75rem;
}
body{
  background-image:url(pic-2.jpg);
       height:100vh;
       background-size: cover;
       background-position: center;
   }
.container-fluid{
  max-width: 500px;
    margin: 5px auto;
   
}


   </style>
<body>

  <div class="container-fluid">
    <center><form method="post" action="">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="fullname">
      <button class="btn btn-outline-success" type="submit" name="search">Search</button>
  </center></form>
  </div>

<center><br><br><br><br>
<div class="container mt-5">

    <form action="student_login_connect.php" method="POST">
    <center><h1><u>Student Login Panel</u></h1></center>
			<div class="form-group row">
        <label class="col-sm-4 col-form-label">Email</label>
        <div class="col-sm-6">
          <input type="text" name="email" class="form-control">  
          
        </div>
       </div>
      <div class="form-group row">
        <label class="col-sm-4 col-form-label">Password</label>
        <div class="col-sm-6">
          <input type="password" name="password"  class="form-control">
         
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-12 mt-3">
          <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
        </div>
      </div>
  <p class ="message"> Not Registered? <a href="student_registration.php">Register</a></p>

</form>
</div><br><br></center>
<script src='https://code.jquery.com/jquery-3.6.0.min.js'>
</script>
<script>
    $('.message a').click(function(){
    $('form').animate({height:"toggle",opacity:"toggle"},"slow");
    }); 
</script>

</body>

</html>
<?php
error_reporting(0);
 $con=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($con,"sms");
if (isset($_POST["search"])) 
                {   
                 $query ="select * from student where fullname ='$_POST[fullname]'";
                 $query_run = mysqli_query($con, $query);
                 $row=mysqli_fetch_assoc($query_run);
                    
                    if (!empty($row)) 
                    {
                        ?>
                  <center><b>  <?php echo ($_POST['fullname']); ?>  FOUND </b></center>
                  <?php
                    } else {
                        ?>
                    <center><b><?php echo  ($_POST['fullname']); ?> NOT FOUND<br><br></b></center>
                <?php
                    }
                }    
            ?>
            
			

