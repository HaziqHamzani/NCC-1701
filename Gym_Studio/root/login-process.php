<?php
    include_once 'header.php';
    include_once 'dbconnect.php';
    require 'password.php';

    session_start();

    if(isset($_POST['submit']))
    {

        $username = $_POST["username"];
        $password = $_POST["password"];



        $sql = "SELECT * FROM user WHERE username = '$username'";

        $result = $conn -> query($sql)
                    or die("Failed to query database ".mysql_error());

        $row = $result -> fetch_assoc();

        $password_hash = $row['password'];

        if (password_verify($password, $password_hash))
        {
            $_SESSION['user'] = $row['username'];
            header("Location: ../index.php?login=success");

        }
        else
        {
            echo "Incorrect username or password";
            exit();
        }
    }

    include_once 'footer.php';
?>
