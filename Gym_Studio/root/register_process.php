<?php
    include_once 'header.php';
    include_once 'dbconnect.php';
?>

<?php

    $name = $_POST["full-name"];
    $nickname = $_POST["nickname"];
    $dob = $_POST["dob"];
    $age = $_POST["age"];
    $specialty = $_POST["specialty"];
    $image = $_FILES["image"]["name"];
    $insertOk = 1;

    $target_dir = "img/uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imagetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    if(isset($_POST['submit']))
    {
        $check_nickname = "SELECT nickname FROM trainer WHERE nickname = '$nickname'";
        $result1 = $conn -> query($check_nickname);
        $num_of_result = $result1 -> num_rows;

        if ($num_of_result > 0)
        {
            echo "nickname is taken, try another name";
            echo "<br>";
            $insertOk = 0;
        }


        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false)
        {
            /*echo "File is an image - " .$check["mime"] . ".";
            echo "<br>";*/
            $uploadOk = 1;
        }
        else
        {
            echo "File is not an image.";
            echo "<br>";
            $uploadOk = 0;
        }

        if(file_exists($target_file))
        {
            echo "Sorry, file already exists. Please rename your file to another name.";
            echo "<br>";
            $uploadOk = 0;
        }

        if($imagetype != "jpg" && $imagetype != "png" && $imagetype !="jpeg")
        {
            echo "Sorry, only JPG, PNG & JPEG files are allowed.";
            echo "<br>";
            $uploadOk = 0;
        }
    }

    if ($uploadOk == 0 and $insertOk == 0)
    {
        echo "Sorry, your file was not uploaded.";
        echo "<br>";
    }

    else
    {
        $sql = "INSERT INTO trainer (trainer_id, name, nickname, dob, age, specialty, image) VALUES (NULL, '$name', '$nickname', '$dob', '$age', '$specialty', '$image')";

        $result = $conn -> query($sql);

        echo "data has been inserted in the database.";
        echo "<br>";

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
        {
            echo "The file ". basename($_FILES["image"]["name"]). " has been uploaded";
            echo "<br>";
        }

        else
        {
            echo "Sorry, there was an error uplaoding your file.";
        }
    }
?>

<?php
    include_once 'footer.php';
?>
