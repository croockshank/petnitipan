<?php
    $servername = "db4free.net";
    $database = "db_petnitipan";
    $username = "genreydhim";
    $password = "animalcrossingnewhorizon";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
