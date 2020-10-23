<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration::Studentportal.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    include_once("header.php");
    ?>
    <div class="alert alert-danger alert-dismissible">
        Fill the following details carefully and press submit.
        <a href="#" class="close" data-dismiss="alert">&times;</a>
    </div>
    <div class="container">
        <form action="register_action.php" method="post">
            <div class=" row form-group">
                <div class="col-lg-2 col-sm-10 col-md-2">
                    <label for="username" class="text-left  ">USERNAME</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <input type="text" name="username" class="form-control text-dark text-left" maxlength="25" required>
                </div>
            </div>
            <div class=" row form-group">
                <div class="col-lg-2 col-sm-10 col-md-2">
                    <label for="fullname" class="text-left  ">FULL NAME</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <input type="text" name="fullname" class="form-control text-dark text-left" maxlength="45" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2 col-sm-10 col-md-2">
                    <label for="password" class="text-left"">PASSWORD</label>
                </div>
                <div class=" col-lg-10 col-md-10 col-sm-10">
                        <input type="password" name="password" class="form-control text-dark text-left" maxlength="25" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2 col-sm-10 col-md-2">
                    <label for="confirm_password" class="text-left">RE-ENTER PASSWORD</label>
                </div>
                <div class=" col-lg-10 col-md-10 col-sm-10">
                        <input type="password" name="confirm_password" class="form-control text-dark text-left" maxlength="25" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2 col-sm-10 col-md-2">
                    <label for="user_type" class="text-left">I AM A</label>
                </div>
                <div class=" col-lg-10 col-md-10 col-sm-10" required>
                        <select class="form-control" name="user_type">
                            <option value="student" selected>STUDENT</option>
                            <option value="teacher">TEACHER</option>
                        </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <button type="submit" class="form-control bg-success text-light">SUBMIT</button>
                </div>
                <div class="col-lg-6">
                    <button type="reset" class="form-control bg-danger text-light">RESET</button>
                </div>
            </div>
            <div class="row text-left">
            <div class="col-lg-12 col-md-10 col-sm-10">
                Already have an Account? <a href="login.php" style="color:blue; text-decoration:underline;">Click</a> here
            </div>
        </div>
        </form>
        
    </div>

    </div>
    <?php
    include_once("footer.php");
    ?>
    <script src="js/bootstrap.min.js" type="text/js"></script>

</body>

</html>