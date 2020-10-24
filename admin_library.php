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
        <title>ADMIN::<?php echo $usrname; ?></title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/dbtable_style.css" rel="stylesheet" type="text/css">

        
    </head>

    <body>
        <?php
        include_once('header_admin.php');
        ?>
        <div class="container-fluid" style="margin:10px auto;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info  panelstyle font-weight-normal" style="border:2px solid purple; border-top-left-radius: 10px;border-top-right-radius: 10px;">
                        <div class="panel-header  bg-secondary text-center text-light ">
                            <h4>LIBRARY MANAGEMENT SYSTEM</h4>
                        </div>
                        <div class="panel-body bg-light text-dark text-center  dbtable">
                            <?php
                            $conn = mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'cms');
                            if (!$conn) {
                                echo "
                                    <script>
                                    window.alert('Could not connect to database');
                                    </script>";

                                echo "Error:" . mysqli_connect_error() . "<script>
                                    window.location.href = 'admin.php'</script>";
                            } else {
                                $q = "SELECT * FROM library;";
                                $res = mysqli_query($conn, $q);
                                $num = mysqli_num_rows($res);
                                if ($num > 0) {
                            ?>
                                    <table class="table table-striped text-center" title="USER DATABASE FOR STUDENT MANAGEMENT SYSTEM">
                                        <tr class="bg-dark text-white-50">
                                            <th scope="header">ID</th>
                                            <th scope="header">USERNAME</th>
                                            <th scope="header">FULLNAME</th>
                                            <th scope="header">USERTYPE</th>
                                            <th scope="header">ACTION</th>
                                        </tr>

                                        <?php
                                        for ($i = 0; $i < $num; $i++) {
                                            $data = mysqli_fetch_assoc($res);

                                        ?><tr>
                                                <td><?php echo $data['id']; ?></td>
                                                <td><?php echo $data['username']; ?></td>
                                                <td><?php echo $data['fullname']; ?> </td>
                                                <td><?php echo $data['user_type']; ?></td>
                                                <div class="btn-group  btn-group-sm">
                                                    <td>
                                                        <a href="#"><button class="btn btn-sm btn-warning">EDIT</button></a>
                                                        <a href="#"><button class="btn btn-sm btn-danger">DELETE</button></a>
                                                    </td>
                                                </div>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                            <?php
                                } else {
                                    echo "<br>No data to display.";
                                }
                            }
                            ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-left:2px; text-align:right; padding-right:10px; color:blue;">
            <strong><a href='admin.php'>tap to return</a></strong>
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