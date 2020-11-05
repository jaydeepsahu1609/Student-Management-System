<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['user_type'] == 'admin') {
    $usrname = $_SESSION['username'];
    $fullname = $_SESSION['fullname'];
    $user_type = $_SESSION['user_type'];
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADMIN :: <?php echo $usrname; ?></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- <link href="css/main_style.css" rel="stylesheet" type="text/css"> -->
        <link rel="stylesheet" href="css/admin.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <header>
            <?php
            include_once('header_admin.php');
            ?>
        </header>

        <!-- navigation temporary -->


        <!-- main-content  -->
        <div class="container-fluid text-center bg-warning text-white">
            <div class="row">
                <div class="col-12">
                    <h1>
                        Hello <?php echo $fullname; ?>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-5 col-sm-5  bg-secondary">
                    <div class="container bg-light text-dark" style="margin:10px auto;">
                        <h3>STUDENT MANAGEMENT</h3>
                        <hr>
                        <p><a href="admin_login.php">SHOW USER DETAILS</a></p>
                        <p><a href="reuest_login.php">REGISTRATION REQUESTS</a></p>
                    </div>

                </div>
                <div class="col-lg-6 col-md-5 col-sm-5  bg-secondary">
                    <div class="container bg-light text-dark" style="margin:10px auto;">
                        <h3>LIBRARY MANAGEMENT</h3>
                        <hr>
                        <p><a href="admin_library.php">SHOW USER DETAILS</a></p>
                        <p><a href="request_library.php">REGISTRATION REQUESTS</a></p>
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
    window.alert('Either you are not an admin or not logged in via admin account. Please log in.');
    window.location.href='login.php';
    </script>
    ";
}
?>