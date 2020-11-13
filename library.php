<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library::Studentportal.com</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="css/main_style.css" rel="stylesheet" type="text/css">
    <style>
        a:hover {
            color: inherit;
        }
    </style>
</head>

<body>
    <?php
    include_once("header_library.php");
    ?>

    <div class="jumbotron text-left bg-transparent text-white sms-jumbo" style="box-shadow:0 0 20px purple;">
        <div class="container">
            <div class="row media">

                <div class="col-lg-8 sms-jumbo-left sms-content media-body">
                    <h3>Library Management System</h3>
                    <p>
                        <ul>
                            <li>
                                Create a library account
                            </li>
                            <li>
                                Manage Transaction(incharge)
                            </li>
                            <li>
                                View and submit Fine
                            </li>
                            <li>
                                View issued books with due dates
                            </li>
                            <li>
                                Access virtual-library
                            </li>
                            <li>
                                Search availabilty of books
                            </li>
                            <li>
                                And many more features to come........
                            </li>
                        </ul>
                    </p>
                </div>
                <div class="col-lg-4 sms-jumbo-right media-right">

                    <img src="images/lms.jpg" class=" sms-jumbo-img" alt="lms-image">

                    <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS7gG8t13NbjFm9olxkmfDHaIZJ9-4C1jMXRw&usqp=CAU sms-jumbo-img" alt="lms-image"> -->

                </div>
            </div>
        </div>

    </div>
    <div class="container" style="margin:50px auto;">
        <div class="row text-center font-weight-bolder">
            <div class="col-lg-5 col-sm-5 col-md-5 text-white" style="margin:20px auto;  box-shadow:0 0 25px purple;">
                <h2>
                    I HAVE AN ACCOUNT
                </h2>
                <hr>
                <h4>
                    <a href="login_library.php" title="I want to login">LOGIN here</a>
                </h4>
            </div>
            <div class="col-lg-5 col-sm-5  col-md-5 text-white" style="margin:20px auto;  box-shadow:0 0 25px purple;">
                <h2>
                    I DON'T HAVE ANY ACCOUNT
                </h2>
                <hr>
                <h4>
                    <a href="register_library.php" title="I want to register">REGISTER here</a>
                </h4>
            </div>
        </div>
    </div>
    <?php
    include_once("footer.php");
    ?>
    <script src="js/bootstrap.min.js" type="text/js"></script>
</body>

</html>