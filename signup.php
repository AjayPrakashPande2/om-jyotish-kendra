<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title>
    <link rel="stylesheet" href="../css/signup.css">
</head>

<body>
    <div class="wrapper">
        <h2>Register to School</h2>
        <form action="../php/signuphandeler.php" method="post">
            <div class="input-box">
                <input type="text" name="name" placeholder="Enter your name" required>
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="input-box">
                <input type="password" name="confirm_password" placeholder="Confirm password" required>
            </div>
            <div class="policy">
                <input type="checkbox">
                <a href="#">I accept all terms & condition</a>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Register Now">
            </div>
            <div class="text">
                <h3>Already have an account? <a href="../html/login.php">Login now</a></h3>
            </div>
        </form>
    </div>
</body>

</html>