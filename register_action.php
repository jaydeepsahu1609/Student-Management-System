<?php
$usr = $_POST['username'];
$name = $_POST['fullname'];
$pwd = $_POST['password'];
$repwd = $_POST['confirm_password'];
$user_type = $_POST['user_type'];
if (strlen($usr) < 5 || strlen($pwd) < 5) {
    echo "
        <script>
        window.alert('Username or password is too small.[minimum 8 characters]');
        window.location.href = 'register.php';
        </script>";
}
if ($pwd != $repwd) {
    echo "
                <script>
                window.alert('Entered password did not match with confirm password field');
                window.location.href = 'register.php';</script>
                ";
} else if ($pwd == $repwd) {
    $conn = mysqli_connect($host = "localhost", $user = "root", $password = "", $database = "CMS");
    if ($conn) {
        $sq = "SELECT * FROM login WHERE username = '$usr';";
        $res = mysqli_query($conn, $sq);
        $num = mysqli_num_rows($res);
        if (!$num) {
            $iq = "INSERT INTO login(username, fullname, password, user_type) VALUES('$usr', '$name', '$pwd', '$user_type');";
            $res = mysqli_query($conn, $iq);

            if ($res) {
                echo "
                    <script>window.alert('Registeration Successful!!Please login with your new account.');
                    window.location.href = 'login.php';</script>
                    ";
            } else {
                echo "
                    <script>window.alert('Something Went Wrong!!\n\nPlease try again.');
                    window.location.href = 'register.php';
                    </script>";
            }
        } else {
            echo "
                    <script>window.alert('Username already exists. Try again with a unique username.');
                    window.location.href = 'register.php';
                    </script>";
        }
    } else {
        echo "<script>window.alert('Error establishing a connection with database.');
                window.location.href = 'register.php' 
                </script>";
    }
}
