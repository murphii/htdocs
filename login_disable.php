<?php
session_start();
?>

<?php /*
$succss = "";
if (isset($_POST) and $_POST['submitForm'] == "Login") {
    $usr_email = mysql_escape_string($_POST['usr_email']);
    $usr_password = mysql_escape_string($_POST['usr_password']);
    $error = array();
// Email Validation
    if (empty($usr_email) or !filter_var($usr_email, FILTER_SANITIZE_EMAIL)) {
        $error[] = "Empty or invalid email address";
    }
    if (empty($usr_password)) {
        $error[] = "Enter your password";
    }
    if (count($error) == 0) {
        $con = new MongoDB\Client();
        if ($con) {
// Select Database
            $db = $con->mydb;
// Select Collection
            $people = $db->disable_people;
            $qry = array("user" => $usr_email, "password" => md5($usr_password));
            $result = $people->findOne($qry);
            if ($result) {
                $success = "You are successully loggedIn";
// Rest of code up to you....
            }
        } else {
            die("Mongo DB not installed");
        }
    }
}
*/

if(isset($_SESSION['authentication'])){ ?>
    <script type="text/javascript">
        window.location = "search.php"
    </script>
<?php } else {

    require "vendor/autoload.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $postedUsername = $_POST['email']; //Gets the posted username, put's it into a variable.
        $postedPassword = $_POST['password']; //Gets the posted password, put's it into a variable.

        $db = new MongoDB\Client();
        $collection = $db->mydb->disable_people;
        $userDatabaseFind = $collection->findOne(['email' => $postedUsername]);//Does a search for Usernames with the posted Username Variable

        //Iterates through the found results
        $storedUsername = $userDatabaseFind['email'];
        $storedPassword = $userDatabaseFind['password'];

        if ($postedUsername == $storedUsername && $postedPassword == $storedPassword) {
            $_SESSION['authentication'] = 1;
            $_SESSION['email'] = $postedUsername;
            foreach($userDatabaseFind as $k => $v){
                if($k == '_id') continue;
                $_SESSION['register'][$k] = $v;
            }
            ?>

            <script type="text/javascript">
                console.log("right");
                window.location = "search.php";
            </script> <?php

        } else {
            header("Location: login_disable.php#wrong");
        }

    }
}

?>

<!DOCTYPE html>
<html lang="Thai">
<head>

    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<script>
    window.onload = function () {
        var h = window.location.hash;
        if (h){
            if (h == '#wrong'){
                alert("ผิดค่ะ");
            }
        }

    }

</script>
<body>

<?php include 'header.php'; ?>

<!-- Page Content -->
<br>
<div class="container">
    <h1>เข้าสู่ระบบสำหรับคนพิการ</h1>
    <div class="col-lg-6 well">
        <div class="row">

            <form action="login_disable.php" METHOD="POST">
                <div class="col-sm-12">

                    <div id="hashMessage" class="bg-danger"></div>

                    <div class="col-sm-7 form-group">
                        <label>อีเมล์</label>
                        <input type="email" id="usr_email" name="email" placeholder="กรอกอีเมล์ที่นี่"
                               class="form-control">

                    </div>

                    <div class="col-sm-7 form-group">
                        <label>รหัสผ่าน</label>
                        <input type="password" id="usr_password" name="password" placeholder="กรอกรหัสที่นี่"
                               class="form-control">
                    </div>
                </div>
                <br>
                <br>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-lg btn-info">เข้าสู่ระบบ</button>
                &nbsp;&nbsp;<a href="register-1.php">ลงทะเบียน</a>
            </form>
        </div>
    </div>

</div>
</body>
</html>