<?php

include("subjreg.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Fisrt php project </title>
</head>
<body>
     <div class='container'>
       
       <div class = "header">
           <H1>   Subject Registration form. </H1>
       </div>
        
        <form action="registration.php" method= "post"  >
       

             <!-- <table>
                <tr>
                    <th>  Student Name</th>
                    <th>  Roll No.</th>
                    <th>Subject 1</th>
                    <th>Subject 2</th>
                    <th>Subject 3</th>
                    <th>Subject 4</th>
                    <th>Subject 5</th>
                    <th>Subject 6</th>

                </tr>
            
            </table> -->
           
                        
                        <divdiv class="form-group form-group-lg">
                            <label for = "username" >Student Name</label> <br>
                            <input type ="text" name ="username" required>
                        
                        </div>

                        <div>
                            <label for = "rn" >Roll No.</label> <br>
                            <input type ="text" name ="rn" required>
                        
                        </div>

                        <div class="form-group">
                                <label for="sel1">Subjet 1:</label>
                                <select class="form-control" id="suba" name="1" >
                                    <option>DBMS</option>
                                    <option>IOT</option>
                                    <option>ARTIFICIAL INTELIGENCE </option>
                                    <option>ELECTRO MAGNETIC THEORY</option>
                                    <option>C#</option>
                                    <option>Python</option>
                                    <option>CYBER CRIME</option>
                                    <option>ALOGIRITHM</option>
                                    <option>MACHINE LEARNING</option>
                                </select>
                        </div>

                        <div class="form-group">
                                <label for="sel1">Subjet 2:</label>
                                <select class="form-control" id="subb" name="2" >
                                    <option>DBMS</option>
                                    <option>IOT</option>
                                    <option>ARTIFICIAL INTELIGENCE </option>
                                    <option>ELECTRO MAGNETIC THEORY</option>
                                    <option>C#</option>
                                    <option>Python</option>
                                    <option>CYBER CRIME</option>
                                    <option>ALOGIRITHM</option>
                                    <option>MACHINE LEARNING</option>
                                </select>
                        </div>

                        <div class="form-group">
                                <label for="sel1">Subjet 3:</label>
                                <select class="form-control" id="subc"  name="3" >
                                    <option>DBMS</option>
                                    <option>IOT</option>
                                    <option>ARTIFICIAL INTELIGENCE </option>
                                    <option>ELECTRO MAGNETIC THEORY</option>
                                    <option>C#</option>
                                    <option>Python</option>
                                    <option>CYBER CRIME</option>
                                    <option>ALOGIRITHM</option>
                                    <option>MACHINE LEARNING</option>
                                </select>
                        </div>

                        <div class="form-group">
                                <label for="sel1">Subjet 4:</label>
                                <select class="form-control" id="subd"  name="4" >
                                    <option>DBMS</option>
                                    <option>IOT</option>
                                    <option>ARTIFICIAL INTELIGENCE </option>
                                    <option>ELECTRO MAGNETIC THEORY</option>
                                    <option>C#</option>
                                    <option>Python</option>
                                    <option>CYBER CRIME</option>
                                    <option>ALOGIRITHM</option>
                                    <option>MACHINE LEARNING</option>
                                </select>
                        </div>

                        <div class="form-group">
                                <label for="sel1">Subjet 5:</label>
                                <select class="form-control" id="sube" name="5" >
                                    <option>DBMS</option>
                                    <option>IOT</option>
                                    <option>ARTIFICIAL INTELIGENCE </option>
                                    <option>ELECTRO MAGNETIC THEORY</option>
                                    <option>C#</option>
                                    <option>Python</option>
                                    <option>CYBER CRIME</option>
                                    <option>ALOGIRITHM</option>
                                    <option>MACHINE LEARNING</option>
                                </select>
                        </div>

                        <div class="form-group">
                                <label for="sel1">Subjet 6:</label>
                                <select class="form-control" id="subf" name="6" >
                                    <option>DBMS</option>
                                    <option>IOT</option>
                                    <option>ARTIFICIAL INTELIGENCE </option>
                                    <option>ELECTRO MAGNETIC THEORY</option>
                                    <option>C#</option>
                                    <option>Python</option>
                                    <option>CYBER CRIME</option>
                                    <option>ALOGIRITHM</option>
                                    <option>MACHINE LEARNING</option>
                                </select>
                        </div>
                            <input type="submit", name= "submit", value="Submit"/>  
                            <!-- <button type="submit" class="btn btn-default" name="button">Submit</button> -->
                        </div>

                           

        </form>

     </div>
       

     <?php
            if ($_GET['submit'])
             {
                $nm = $_POST['username'];
                $rn = $_POST['rn'];
                $s1 = $_POST['1'];
                $s2 = $_POST['2'];
                $s3 = $_POST['3'];
                $s4 = $_POST['4'];
                $s5 = $_POST['5'];
                $s6 = $_POST['6'];
               

                if($nm!="" && $rn!="" && $s1!="" && $s2!="" && $s3!="" && $s4!="" && $s5!="" && $s6!="")
                {
                    $query ="INSERT INTO SEM VALUE ('$nm','$rn','$s1' '$s2','$s3' ,'$s4' ,'$s5' ,'$s6' )";
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



</body>
</html>