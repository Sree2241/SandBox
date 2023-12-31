<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style7.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    <form action="register.php" method="post">
        <?php
            include("errors.php");
        ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button class="btn" type="submit" name="reg_user">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign Up</a>
        </p>
    </form>
</body>
</html>