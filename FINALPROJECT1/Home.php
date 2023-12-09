<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Awesome Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../Style/style.css">
</head>
<body class="Home">
<header>
        <?php include 'Global_files\globalheader.php' ; ?>
    </header>
    <section class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h2>About Us</h2>
                <p>This is the home page of our awesome website. Learn more about us!</p>
            </div>
            <div class="col-md-6">
                <h2>Contact</h2>
                <p>Get in touch with us. We'd love to hear from you!</p>
            </div>
        </div>
    </section>
    <footer>
        <?php include 'Global_files\globalfooter.php'; ?>
    </footer>
    <!-- Bootstrap JS and Popper.js (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>