<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="class";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if($conn)
    {
        echo "ok";
    }
    else
    {
        die("Connection is Failed because".mysqli_connect_error());
    }
?>