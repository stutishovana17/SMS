<?php
 $con = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($con,"sms");
if(isset($_POST["delete_faculty"]))
{
?>
<center><br><br><br><br>
				<form action="" method="post">
				&nbsp;&nbsp;<b>Faculty ID:</b>&nbsp;&nbsp; <input type="text" name="faculty_id">
				<input type="submit" name="search_id" value="Search">
				</form><br><br>
	  </center>
<?php
}
?>
<?php
     if (isset($_POST["search_id"])) {
         $query="SELECT * FROM faculty WHERE faculty_id='$_POST[faculty_id]'";
         $query_run = mysqli_query($con, $query);
         while ($row = mysqli_fetch_assoc($query_run)) {
             ?>
           <form action="delete_faculty_done.php" method="post">
            <table>
            <tr>
                    <td> Faculty ID:</td>
                    <td>
                        <input type="text" name="faculty_id" value="<?php echo $row['faculty_id']?>">
                    </td> 
                </tr>
                <tr>
                    <td> Faculty Name:</td>
                    <td>
                        <input type="text" name="faculty_name" value="<?php echo $row['faculty_name']?>" >
                    </td> 
                </tr>
                <tr>
                    <td>Faculty Email:</td>
                    <td>
                        <input type="text" name="faculty_email" value="<?php echo $row['faculty_email']?>">
                    </td> 
                </tr>
                <tr>
                   <td> Faculty Department:
                   <td> <select name="dept" value="<?php echo $row['dept']?>">
							<option value="">Select</option>
							<option value="mba">MBA</option>
							<option value="mca">MCA</option>
                            <option value="msc">Msc</option>
                            <option value="mcom">MCom</option>
                            <option value="mtech">Mtech</option>
                       
						</select></td>
                    
                    </td> 
                </tr>
                <tr>
                    <td>Faculty Experience:</td>
                    <td>
                        <input type="text" name="experience" value="<?php echo $row['experience']?>">
                    </td> 
                </tr>
                <tr>
                    <td>Qualification:</td>
                    <td>
                        <input type="text" name="qualification" value="<?php echo $row['qualification']?>" >
                    </td> 
                </tr>
                
               <tr>
                <td></td>
                <td><input type="submit" name="delete" value="Delete">
           </td>
           <td>
                <td><input type="submit" name="cencel" value="Cencel">
           </td>
         </tr>
           </table>
         </form>
           <?php
         }
     }
    
     ?>
    