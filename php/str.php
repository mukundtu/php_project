<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>String Type</h1>



</body>
</html>


<?php

 $a= strlen ("hello Google");
 echo "String length is  ". $a,  "<br><br>";
 

 $b= str_word_count("Hello Google");

 echo "String word count is  ". $b,  "<br><br>" ;

 $str= "Hello Google";

 $c = strpos ("$str" , "Google");

 echo "Position of google  is  ". $c,  "<br><br>" ;

 $d= str_replace("Google", "Facebook","$str");

 echo "World replace with Facebook____  ".$d, "<br><br>";

 $e= strrev($str);

 echo "Hello Google reverse  " .$e, "<br><br>" ;
 






?>

<html>
 <body>

 <h1>Array</h1>
 
 <?php
   
   $fruits= array ("Mango", "Orange", "apple");

   echo $fruits[0],"<br><br>" ;

   $cars = array("Tiago", "Jeep", "Nexon"); 
   echo $fruits[0],"<br><br>" ;
   echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "." , "<br><br>" ;





   $cars1 = array (
    array("Tata Nexon",22,18),
    array("XUV 300",15,13),
    array("Harrier ",5,2),
    array("Land Rover",17,15)
  );
      
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars1[$row][$col]."</li>";
    }
    echo "</ul>";
  }

  $age = array("Harry"=>"16", "Varun"=>"20","Abhijeet"=>"22");
  asort($age);

  foreach($age as $u => $u_value){
      echo "Key=".$u.",Value=".$u_value;

      echo "<br><br>";

      
  }
      
?>
 
 </body>
 </html>