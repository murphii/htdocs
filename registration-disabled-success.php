<?php
session_start();
require "fixpost.php";
require "vendor/autoload.php";

include 'imageupload.php';

//save to database
$db = new MongoDB\Client();
$collection = $db->mydb->disable_people;

$result = $collection->insertOne($_SESSION["register"]);

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
            if ($result->getInsertedCount() >= 1) {
                ?>
                <h3>ลงทะเบียนสำเร็จ!</h3>
                <a href="login_disable.php">คลิกที่นี่เพื่อลงชื่อเข้าใช้</a>
                <?php
            } else {
                ?>
                <h3>พัง</h3>
                <?php
            }
            ?>
        </div>
    </center>
</div>
</body>
</html>
