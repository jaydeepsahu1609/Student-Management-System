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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="css/main_style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="container-fluid">
            <div class="row bg-dark text-light text-right font-weight-bolder">
                <div class="col-lg-12">
                    <?php
                    echo $usrname . '&nbsp;[' . $user_type . ']';
                    ?>
                    <a href="logout.php"><button class="btn-info">logout</button></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="jumbotron lg text-center font-weight-bolder">
                        <p>
                            Hello <?php echo $fullname; ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <?php
        include_once('footer.php');
        ?>

        <script src="js/bootstrap.min.js" type="text/js"></script>
    </body>

    </html>



<?php
} else {
    echo "<script>
        window.location.href='login.php';
        </script>
        ";
}
?>