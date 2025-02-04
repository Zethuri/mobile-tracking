<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section class="registerSection">
            <div class="formHolder">
                <img src="./dist/images/tracking-logo2.webp" alt="tracking logo" class="reg-img">
                <h2>Create an account</h2>

                <?php
                
                if(isset($error))
                {
                    echo "<div class = 'error'> $error </div>";
                }
                
                if(isset($success))
                {
                    echo "<div class = 'success'> $success </div>";
                }
                
                
                ?>
                <form action="proc-register.php" method="POST">
                    <div class="form-group">
                        <label for="full-name">Full name</label>
                        <input type="text" id="full-name" name="fullname" placeholder="Amélie Laurent" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="amelielaurent7622@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="********" required>
                        <span class="toggle-password">👁</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input type="password" id="password" name="confirm_password" placeholder="********" required>
                        <span class="toggle-password">👁</span>
                    </div>
                    <button type="submit" class="submit-btn">Submit</button>
                    <p class="">Already have an account? <a href="login.php">Login</a></p>
                </form>
            </div>
    </section>
    <script>
        document.querySelector('.toggle-password').addEventListener('click', function () {
        const passwordField = document.getElementById('password');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            this.textContent = '🙈';
        } else {
            passwordField.type = 'password';
            this.textContent = '👁';
        }
});

    </script>
</body>
</html>