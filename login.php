<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN::Studentportal.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <style>
        .loginbox {
            max-width: 400px;
            max-height: 400px;
            margin: 35px auto;
            padding: 25px 5px;
            box-shadow: 1px 0px 15px;
            z-index: 100;
        }
    </style>
</head>

<body>
    <?php
    include_once("header.php");
    ?>
    <script src="js/bootstrap.min.js" type="text/js"></script>
    <div class="container-lg text-center loginbox">
        <div class="row">
            <div class="col-lg-12 col-md-10 col-sm-10">
                <div class="container form-signin">
                    <form action="login_action.php" method="post">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h1>
                                    Login Here
                                </h1>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-12 col-sm-10">
                                <input type="text" name="username" class="form-control" maxlength="25" placeholder="Username" style="margin-bottom:5px;" autocomplete=off required>
                                <input type="password" name="password" class="form-control" maxlength="25" placeholder="****************" autocomplete=off required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-10 text-center">
                                <input type="submit" class="button btn-success form-control text-lg-center" value="LOG-IN">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
    <?php
    include_once("main.php");
    ?>
    <?php
    include_once("footer.php");
    ?>
    <script src="js/bootstrap.min.js" type="text/js"></script>
</body>

</html>