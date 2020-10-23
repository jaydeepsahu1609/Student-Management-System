<?php
session_start();
if (isset($_SESSION['username'])) {
    $usrname = $_SESSION['username'];
    $fullname = $_SESSION['fullname'];
    $user_type = $_SESSION['user_type'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $usrname; ?>::cms.com</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="container-fluid">
            <div class="row bg-dark text-light text-right font-weight-bolder">
                <div class="col-lg-12">
                    <?php
                    echo $usrname.'&nbsp;['.$user_type.']';
                    ?>
                    <a href="logout.php"><button class="btn-info">logout</button></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="jumbotron lg text-center font-weight-bolder">
                <p>
                    Hello <?php echo $fullname; ?>
                </p>
            </div>
        </div>


        <script src="js/bootstrap.min.js" type="text/js"></script>
    </body>

    </html>
<?php
} else {
    echo "<script>window.alert('User not logged in. Invalid Access.');
        window.location.href='login.php';
        </script>
        ";
}
?>