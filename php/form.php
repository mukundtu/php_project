<!-- <?php 
    // include("connection.php");

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="GET">
    <table>
       <tr>
          <th>Name</th>
          <td><input type="text", name= "studentname" required/></td>
       </tr>
       <tr>
          <th>Roll No.</th>
          <td><input type="text", name= "rollno" required/></td>
       </tr>
       <tr>
          <th>Branch</th>
          <td><input type="text", name= "brn" required/></td>
       </tr>

       <tr>
          <th>Semester</th>
          <td><input type="text", name= "sem" required/></td>
       </tr>

       <tr>
          <th>Mobile No.</th>
          <td><input type="text", name= "mn" required/></td>
       </tr>
       <tr>
          <th></th>
          <td><input type="submit", value= "Insert" /></td>
       </tr>


    </table>    
    <!-- Name <input type="text", name= "studentname", value="" required/><br><br>
    Roll No <input type="text", name= "rollno", value="" required/><br><br>
    Branch<input type="text", name= "branch", value="" required/><br><br>
    <input type="submit", name= "submit", value="Submit"/> -->

</form> 
/*
<?php
    if ($_GET['submit'])
    {
        $nm = $_GET['studentname'];
        $rn = $_GET['rollno'];
        $br = $_GET['branch'];

        if($nm!="" && $rn!="" && $br!="")
        {
            $query ="INSERT INTO STUDENT VALUE ('$nm','$rn','$br')";
            $data=mysqli_query($conn,$query);

            if($data){
            echo"Data inserted into database";

            }
        }
        else
        {
            echo "All fields are required";
        }

    }



?> 
*/

    
</body>
</html>