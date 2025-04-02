<?php

error_reporting(0); // Disable all error reporting
ini_set('display_errors', 0); // Prevent errors from being shown on the page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
        <section class="loginSection">
            <div class="loginHolder">
                <img src="./dist/images/tracking-logo2.webp" alt="tracking logo" class="log-img">
                <h2>Login</h2>
                <?php
                
                    if (isset($error)) {
                        echo "<div class = 'error'> $error . </div>";
                    }
                    if (isset($admin_error)) {
                        echo "<div class = 'error'> $admin_error . </div>";
                    }
                    if (isset($success)) {
                        echo "<div class = 'success'> $success . </div>";
                    }
                
                ?>
                <form action="proc-login.php" method="POST" class="login-form">
                    <div class="login-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="mt_email" placeholder="amelielaurent7622@gmail.com"  class="logInput" value="<?php echo $email;?>">
                    </div>
                    <div class="login-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="mt_password" placeholder="********" class="logInput">
                    </div>
                    <button type="submit" class="login-btn">Login</button>
                    <p class="">Don't have an account? <a href="register.php">Register</a></p>
                </form>
            </div>
    </section>
</body>
</html>