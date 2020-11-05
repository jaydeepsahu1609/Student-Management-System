<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN::Studentportal.com</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="css/main_style.css" rel="stylesheet" type="text/css">
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include_once("header.php");
    ?>
    <script src="js/bootstrap.min.js" type="text/js"></script>
    <div class="container-lg text-center loginbox" style="margin:40px auto;">
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
                        <div class="row form-group" stle="margin:15px auto;">
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