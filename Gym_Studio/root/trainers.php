<?php
    include_once 'header.php';
    include_once 'dbconnect.php';
?>

<div id="trainers-page">
    <?php
        $sql = "SELECT name, nickname, age, specialty, image FROM trainer";

        $result = $conn -> query($sql);

        $number_of_results = $result -> num_rows;

        if ($number_of_results > 0)
        {
            while ($row = $result -> fetch_assoc())
            {
                ?>
                <div>
                    <div>
                        <img class="trainer-img" src="img/uploads/<?php echo $row["image"]; ?>">
                    </div>
                    <div>
                        <table id="trainers-table">
                            <tr>
                                <td><strong>Name</strong></td>
                                <td><?php echo $row["name"]; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Age</strong></td>
                                <td><?php echo $row["age"]; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Specialty</strong></td>
                                <td><?php echo $row["specialty"]; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php
                /*echo "<div>";
                echo "<div>";
                echo "<img src='img/uploads/".$row["image"]."'>";
                echo "</div>";
                echo "</div>";*/
            }
        }
        else
        {
            echo "There are no trainers available.";
        }
    ?>
</div>

<?php
    include_once 'footer.php';
?>
