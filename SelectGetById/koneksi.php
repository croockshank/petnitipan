<?php
    $servername = "localhost";
    $database = "pet_adoption";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
    echo "Connected successfully <br>";
    }
    
?>