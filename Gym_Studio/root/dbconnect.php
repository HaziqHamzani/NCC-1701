<?php
    $servername = "localhost";
    $username = "root";
    $password = "usbw";
    $database = "gym_studio";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    #echo "Connected successfully";
    #echo "<br>";
?>
