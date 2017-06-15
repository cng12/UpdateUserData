<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
	  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}

        if(isset($_POST['update']))
{
	mysqli_query($conn, "UPDATE `employee` SET `emp_id`='$_POST[emp_id]',`emp_salary`='$_POST[emp_salary]' WHERE `emp_id`='$_POST[emp_id]'");
}
 if(isset($_POST['backup']))
{
	mysqli_query($conn, "INSERT INTO `employee_record`(`emp_id`, `emp_salary`) 
	SELECT emp_id,emp_salary FROM `employee` ");
}

            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">Employee ID</td>
                        <td><input name = "emp_id" type = "text" ></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Employee Salary</td>
                        <td><input name = "emp_salary" type = "text"></td>
                           
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input type="submit" name="update" value="Update">
						   <input type="submit" name="backup" value="Backup">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         
      ?>
      
   </body>
</html>