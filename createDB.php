<!-- USE THIS CODE TO CREATE DATABASE FOR OUR PROJECT WHEN USING FIRST TIME -->
<!-- CREATED BY: JAYDEEP SAHU DATE:23.10.2020-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database setup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <div class="container-fluid page-header text-light text-sm-center text-lg-left text-md-center bg-dark font-weight-bolder">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <h1>DATABASE SETUP UNIT</h1>
                </div>
                <div class="col-lg-6 text-lg-right text-sm-center text-md-center text-muted font-weight-normal">
                    <h3> STUDENT MANAGEMENT SYSTEM</h3>
                </div>
            </div>
        </div>
    </header>
    <br>
    <main class="container-fluid bg-info text-center text-white">
        <?php
        $hostname = 'localhost';    //write your host-name, default to 'localhost'
        $username = 'root';         //write your user-name, default to 'root'
        $pwd = '';         //write your password, default to ''

        // connect to database
        $conn = mysqli_connect($host = $hostname, $user = $username, $password = $pwd);
        if ($conn) {
            // create database 'cms' if not exist
            $dbq = 'CREATE DATABASE cms;';
            $r = mysqli_query($conn, $dbq);
            if (!$r) {
                echo "Database 'cms' already exist.<hr>";
            } else {
                echo "Database 'cms' has been created.<hr>";
            }

            //use database 'cms'
            $udb = mysqli_select_db($conn, 'cms');
            if (!$udb) {
                echo "Could not use database.<hr>" . mysqli_error($conn);
            } else {
                echo "Database changed.<hr>";
            }

            //create table 'library'  
            $ctdbq = "CREATE TABLE library (id int(4) PRIMARY KEY AUTO_INCREMENT, username VARCHAR(25) UNIQUE, fullname VARCHAR(45), password VARCHAR(25), user_type VARCHAR(20));";
            $r = mysqli_query($conn, $ctdbq);
            if (!$r) {
                echo "ERROR:" . mysqli_error($conn) . "<hr>";
            } else {
                echo "Table 'library' has been created succesfully in the database.<hr>";
            }

            //create table 'login'  
            $ctdbq = "CREATE TABLE login (id int(4) PRIMARY KEY AUTO_INCREMENT, username VARCHAR(25) UNIQUE, fullname VARCHAR(45), password VARCHAR(25), user_type VARCHAR(20));";
            $r = mysqli_query($conn, $ctdbq);
            if (!$r) {
                echo "ERROR:" . mysqli_error($conn) . "<hr>";
            } else {
                echo "Table 'login' has been created succesfully in the database.<hr>";
            }
        } else {
            echo "
            <script>
            window.alert('Error establishing a connection with the database. Check your database server.');
            </script>
            " . mysqli_connect_error();
        }
        ?>
    </main>

    <?php
    include_once('footer.php');
    ?>
</body>

</html>