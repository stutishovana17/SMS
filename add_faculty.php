<?php
if(isset($_POST["add_faculty"]))
{
    $con = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($con,"sms");
    ?>
    <center><h4>Fill the given details</h4></center>
            <form action="add_faculty_done.php" method="post">
            <table>
            <tr>
                    <td> Faculty ID:</td>
                    <td>
                        <input type="text" name="faculty_id" >
                    </td> 
                </tr>
                <tr>
                    <td> Faculty Name:</td>
                    <td>
                        <input type="text" name="faculty_name" >
                    </td> 
                </tr>
                <tr>
                    <td>Faculty Email:</td>
                    <td>
                        <input type="text" name="faculty_email" >
                    </td> 
                </tr>
                <tr>
                   <td> Faculty Department:
                   <td> <select name="dept">
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
                        <input type="text" name="experience">
                    </td> 
                </tr>
                <tr>
                    <td>Qualification:</td>
                    <td>
                        <input type="text" name="qualification" >
                    </td> 
                </tr>
                
    
                <td></td>
                <td><input type="submit" name="add" value="Add Faculty">
           </td>
           </table>
        <?php 
}
?>