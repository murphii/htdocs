<?php
session_start();
error_reporting(0);
require "fixpost.php";
require "vendor/autoload.php";
require "register_update.php";

include 'imageupload.php';

$auth = isset($_SESSION['authentication']);

$db = new MongoDB\Client();
$collection = $db->mydb->disable_people;

if (!$auth) {
    $result = $collection->insertOne($_SESSION["register"]);
}

//save to database


?>
<!DOCTYPE html>
<html lang="Thai">
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php require "header.php"; ?>
<div class="container">
    <br>
    <br>
    <center>
        <div class="col-lg-12 well">
            <?php
            if(!$auth) {
                if ($result->getInsertedCount() >= 1) {
                    ?>
                    <h3>ลงทะเบียนสำเร็จ!</h3>
                    <a href="login_disable.php">คลิกที่นี่เพื่อลงชื่อเข้าใช้</a>
                    <?php
                } else {
                    ?>
                    <h3>ไม่สามารถลงทะเบียนได้</h3>
                    <?php
                }
            } else {
                ?>
                <h3>แก้ไขข้อมูลเรียบร้อย</h3>
                <a href="firstpage.php">คลิกที่นี่เพื่อเข้าสู่หน้าหลัก</a>
            <?php
            }
            ?>
        </div>
    </center>
</div>
</body>
</html>
