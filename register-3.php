<?php
// This
session_start();
error_reporting(0);

if (!$_SESSION["register"]) {
    $_SESSION["register"] = array();
}

// This
$experience = (!$_SESSION["register"]["experience"]) ? "" : $_SESSION["register"]["experience"];
$company_name = (!$_SESSION["register"]["company_name"]) ? "" : $_SESSION["register"]["company_name"];
$position= (!$_SESSION["register"]["position"]) ? "" : $_SESSION["register"]["position"];
$period= (!$_SESSION["register"]["period"]) ? "" : $_SESSION["register"]["period"];
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
        <div class="row">
            <?php //This
            require 'fixpost.php';
            ?>
            <ul class="nav nav-tabs">
                <li role="presentation"><a href="register-1.php">ข้อมูลส่วนตัว</a></li>
                <li role="presentation"><a href="register-2.php">ประวัติการศึกษา</a></li>
                <li role="presentation" class="active"><a href="register-3.php">ประวัติการทำงาน</a></li>
                <li role="presentation"><a href="register-4.php">สายอาชีพที่ต้องการ</a></li>
                <li role="presentation"><a href="register-5.php">ความพิการและอุปกรณ์</a></li>
                <li role="presentation"><a href="register-6.php">รูปถ่าย</a></li>
            </ul>
            <br><br>
            <div class="col-sm-7 form-group">
                คุณเคยมีประสบการณ์ทำงานหรือไม่ :&nbsp;&nbsp;&nbsp;<input name="experience" type="radio" value="1" <?=$experience == "1" ? checked : ""?>> มี &nbsp;&nbsp;&nbsp;<input
                    name="experience" type="radio" value="0" <?=$experience == "1" ? checked : ""?>> ไม่มี
                <br><br>
                (ถ้ามี)
                <br><br>
                องค์กร/บริษัทที่เคยทำงาน : <input name="company_name" type="text" value="<?= $company_name?>">
                <br><br>
                ตำแหน่ง : <input name="position" type="text" value="<?= $position ?>">
                <br><br>
                ระยะเวลาที่ทำงาน : &nbsp;&nbsp;&nbsp; เริ่มต้น <input name="period" type="date" value="<?= $period?>"> &nbsp;&nbsp;&nbsp;สิ้นสุด
                <input name="" type="date">
                <br><br>

                <!--<a href="register-4.php"><button type="submit">ถัดไป</button></a>-->
                <input form="registerform3" value="ถัดไป" type="submit">
            </div>
            <br><br><br><br><br>

        </div>
    </div>
</div>
</body>
</html>