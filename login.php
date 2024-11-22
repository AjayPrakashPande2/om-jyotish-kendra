
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title>
    <link rel="stylesheet" href="../css/signup.css">
</head>

<body>
<?php

// include '../html_snipts/header.php';

?>
    <div class="wrapper">
        <h2>Login to OM JYOTISH KENDRA</h2>
        <form action="../php/login_handeler.php" method="post">
            <div class="input-box">
                <input type="email" name="email" placeholder="Enter email">
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Enter password" required>
            </div>
            <div class="policy">
                <input type="checkbox">
                <a href="#">I accept all terms & condition</a>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Login Now">
            </div>
            <div class="text">
                <h3>Already have an account? <a href="../html/signup.php">Sign up</a></h3>
            </div>
        </form>
    </div>
</body>

</html>