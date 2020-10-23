<?php
session_start();
sleep(1);
echo "<script>window.alert('Logging out.....');</script>";
session_destroy();
header("Location: index.php")
?>
