<?php
$usrname = $_POST["username"];
$pwd = $_POST["password"];
$conn = mysqli_connect($host = "localhost", $user = "root", $password = "", $database = "CMS");
if ($conn) {
    $q = "SELECT * FROM login WHERE username = '$usrname' and password = '$pwd'";
    $res = mysqli_query($conn, $q);
    if (mysqli_num_rows($res)) {
        $user_details = mysqli_fetch_row($res);
        SESSION_start();
        $_SESSION['username'] = $user_details[1];
        $_SESSION['fullname'] = $user_details[2];
        $_SESSION['user_type'] = $user_details[4];
        mysqli_close($conn);
        echo "
            <script>
            window.alert('Welcome: $user_details[2]');
            window.location.href = 'user_home.php';
            </script>;";
    } else {
        echo "<script>window.alert('Invalid username or password.');
            window.location.href = 'login.php';
            </script>;";
    }
} else {
    echo "<script>window.alert('Error with connecting to database.');
            window.location.href = 'login.php';
            </script>;";
}
