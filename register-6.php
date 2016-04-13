<?php
// This
session_start();
error_reporting(0);

if (!$_SESSION["register"]) {
    $_SESSION["register"] = array();
}
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>

<body>
<?php include 'header.php'; ?>
<br>
<div class="container">
    <div class="col-lg-12 well">
        <form name="registerform6" id="registerform6" enctype="multipart/form-data" method="post"
              action="registration-disabled-success.php">

            <div class="row">
                <?php //This
                require 'fixpost.php';
                ?>
                <ul class="nav nav-tabs">
                    <li role="presentation"><a href="register-1.php">ข้อมูลส่วนตัว</a></li>
                    <li role="presentation"><a href="register-2.php">ประวัติการศึกษา</a></li>
                    <li role="presentation"><a href="register-3.php">ประวัติการทำงาน</a></li>
                    <li role="presentation"><a href="register-4.php">สายอาชีพที่ต้องการ</a></li>
                    <li role="presentation"><a href="register-5.php">ความพิการและอุปกรณ์</a></li>
                    <li role="presentation" class="active"><a href="register-6.php">รูปถ่าย</a></li>
                </ul>
                <br><br>
            </div>

            รูปถ่ายหน้าตรงครึ่งตัว : <input id="face" name="face" type="file" data-validation="size mime"
                                            data-validation-max-size="3M"
                                            data-validation-allowing="jpg, jpeg, png, gif"
                                            data-validation-error-msg="กรุณาใสรูปถ่าย">
            <br><br>

            รูปถ่ายเต็มตัว : <input id="body" name="body" type="file" data-validation="size mime"
                                    data-validation-max-size="3M"
                                    data-validation-allowing="jpg, jpeg, png, gif"
                                    data-validation-error-msg="กรุณาใส่รูปถ่าย">
            <br><br>

            <input type="submit" value="บันทึก" name="submit">


        </form>
    </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/jquery.form-validator.min.js"></script>
<script>
    $.validate();
</script>

</body>
</html>