<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <?php include 'Global_files\globalheader.php'; ?>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-6 form-container">
                <!-- Login Form -->
                <h2>Login</h2>
                <form method="post" action="Login.php">
                    <div class="form-group">
                        <label for="loginEmail">Email address</label>
                        <input type="email" class="form-control" id="loginEmail" name="loginEmail" required>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input type="password" class="form-control" id="loginPassword" name="loginPassword" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    <a href="register.php" target="_blank" rel="noopener noreferrer">Register here</a>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <?php include 'Global_files\globalfooter.php'; ?>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
    require 'Database.php';
    if(isset($_POST["submit"]))
    {
    $email = $_POST["loginEmail"];
    $password = $_POST["loginPassword"];
    $duplicate="SELECT *FROM admin where email='$email' or pass = '$password'";
    $result1=mysqli_query($conn,$duplicate);
    if (mysqli_num_rows($result1) > 0) 
    {
        header('location:display.php');
    } 
    else 
    {
        echo"Wrong email or password";
    }
}
?>
