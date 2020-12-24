<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname= "register_db";

    //Create connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    //check connection
    if(!$conn){
        die("Connectio Fail" . mysqli_connect_error());
    }
?>