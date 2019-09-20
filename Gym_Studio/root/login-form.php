<?php
    include_once 'header.php';
    include_once 'dbconnect.php';
    //require 'password.php';

    //echo password_hash('admin',PASSWORD_BCRYPT);
?>

<div id="login-form">
    <h1>Login</h1>
    <table id="login-table">
        <form action="login-process.php" method="POST" id="login-form">
            <tr>
                <td><strong>Username :</strong></td>
                <td><input class="form-control" type="text" placeholder="Enter Username" name="username" required></td>
            </tr>

            <tr>
                <td><strong>Password :</strong></td>
                <td><input class="form-control" type="password" placeholder="Enter Password" name="password" required></td>
            </tr>

            <tr>
                <td><button type="submit" name="submit">Login</button></td>
            </tr>
        </form>
    </table>
</div>




<?php
    include_once 'footer.php';
?>
