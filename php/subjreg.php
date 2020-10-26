<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="regist";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if($conn)
    {
        echo "";
    }
    else
    {
        die("Connection is Failed because".mysqli_connect_error());
    }
?>