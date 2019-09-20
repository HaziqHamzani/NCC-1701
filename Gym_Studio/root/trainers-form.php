<?php
    include_once 'header.php';
    include_once 'dbconnect.php';

    if (!$_SESSION['user'])
    {
        header("Location: login-form.php");
    }
?>

<div id="trainers-form">
    <h1>Register a Trainer</h1>
    <table id="register-table">
        <form action="register_process.php" method="post" enctype="multipart/form-data">
            <tr>
                <td><strong>Full Name</strong></td>
                <td><input type="text" name="full-name" required></td>
            </tr>

            <tr>
                <td><strong>Nickname (must be unique)</strong></td>
                <td><input type="text" name="nickname" required></td>
            </tr>

            <tr>
                <td><strong>Date of Brith</strong></td>
                <td><input type="date" name="dob" required></td>
            </tr>

            <tr>
                <td><strong>Age</strong></td>
                <td><input type="number" name="age" required></td>
            </tr>

            <tr>
                <td><strong>specialty</strong></td>
                <td><input type="text" name="specialty" required></td>
            </tr>

            <tr>
                <td><strong>Upload Trainer's image</strong></td>
                <td><input type="file" name="image"></td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="register"></td>
            </tr>
        </form>
    </table>
</div>

<?php
    include_once 'footer.php';
?>
