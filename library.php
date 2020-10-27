<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library::Studentportal.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/main_style.css" rel="stylesheet" type="text/css">
    <style>
        a:hover {
            color:inherit;
        }
    </style>
</head>

<body>
    <?php
    include_once("header_library.php");
    ?>

    <div class="jumbotron text-left bg-transparent text-white" style="box-shadow:0 0 25px purple;">
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
    <div class="container" style="margin:4px auto;">
        <div class="row text-center font-weight-bolder">
            <div class="col-lg-5 col-sm-5 col-md-5 text-white" style="margin:2px auto;  box-shadow:0 0 25px purple;">
                <h2>
                    I HAVE AN ACCOUNT
                </h2>
                <hr>
                <h4>
                    <a href="login_library.php" title="I want to login">LOGIN here</a>
                </h4>
            </div>
            <div class="col-lg-5 col-sm-5  col-md-5 text-white" style="margin:2px auto;  box-shadow:0 0 25px purple;">
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