<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration::Studentportal.com</title>
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
    <main>
        <div class="container-fluid regis-box">
            <div class="row text-center regis-box-items">
                <div class="col-lg-12 col-sm-10 col-md-10">
                    <div class="alert alert-danger alert-dismissible">
                        Fill the following details carefully and press submit.
                        <a href="#" class="close" data-toggle="dismiss" data-dismiss="alert">&times;</a>
                    </div>
                </div>
            </div>

            <div class="row regis-box-items">
                <div class="col-lg-12 text-light">
                    <div class="container text-center">
                        <form action="request_action.php" method="post">

                            <div class=" row form-group">
                                <div class="col-lg-4 col-sm-10 col-md-2">
                                    <label for="username" class="control-label text-left  ">USERNAME</label>
                                </div>
                                <div class="col-lg-8 col-md-10 col-sm-10">
                                    <input type="text" name="username" class="form-control text-dark text-left input-sm" maxlength="25" required>
                                </div>
                            </div>

                            <div class=" row form-group">
                                <div class="col-lg-4 col-sm-10 col-md-2">
                                    <label for="fullname" class="control-label text-left">FULL NAME</label>
                                </div>
                                <div class="col-lg-8 col-md-10 col-sm-10">
                                    <input type="text" name="fullname" class="form-control text-dark text-left input-sm" maxlength="45" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-lg-4 col-sm-10 col-md-2">
                                    <label for="password" class="control-label text-left">PASSWORD</label>
                                </div>
                                <div class=" col-lg-8 col-md-10 col-sm-10">
                                    <input type="password" name="password" class="form-control text-dark text-left input-sm " maxlength="25" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-lg-4 col-sm-10 col-md-2">
                                    <label for="confirm_password" class="control-label text-left">RE-ENTER PASSWORD</label>
                                </div>
                                <div class=" col-lg-8 col-md-10 col-sm-10">
                                    <input type="password" name="confirm_password" class="form-control text-dark text-left input-sm  " maxlength="25" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-lg-4 col-sm-10 col-md-2">
                                    <label for="user_type" class="control-label text-left">I AM A</label>
                                </div>
                                <div class=" col-lg-8 col-md-10 col-sm-10 " required>
                                    <select class="form-control input-sm" name="user_type">
                                        <option value="student" selected>STUDENT</option>
                                        <option value="teacher">TEACHER</option>
                                        <option value="admin">ADMIN</option>
                                    </select>
                                </div>
                            </div>


                            <div class="row text-center">
                                <div class="col-lg-6 col-sm-5 col-md-5">
                                    <button type="submit" class="form-control bg-success border-0 text-light btn-lg">SUBMIT</button>
                                </div>
                                <div class="col-lg-6 col-sm-5 col-md-5">
                                    <button type="reset" class="form-control bg-danger border-0  text-light btn-lg">RESET</button>
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
            </div>
        </div>
    </main>
    <?php
    include_once("footer.php");
    ?>
    <script src="js/bootstrap.min.js" type="text/js"></script>
</body>

</html>