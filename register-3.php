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
$position = (!$_SESSION["register"]["position"]) ? "" : $_SESSION["register"]["position"];
$start_worked = (!$_SESSION["register"]["start_worked"]) ? "" : $_SESSION["register"]["start_worked"];
$stop_worked = (!$_SESSION["register"]["stop_worked"]) ? "" : $_SESSION["register"]["stop_worked"];
?>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.form-validator.min.js"></script>
    <script>
        function showMore() {
            $("#ifhave").show();
        }
        function hideMore() {
            $("#ifhave").hide();
            $("input[type='text']").val("");
            $("input[type='date']").val("");
        }
    </script>
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
                <li role="presentation"><a>สายอาชีพที่ต้องการ</a></li>
                <li role="presentation"><a>ความพิการและอุปกรณ์</a></li>
                <li role="presentation"><a>รูปถ่าย</a></li>
            </ul>
            <br><br>
        </div>

        <form name="registerform3" id="registerform3" method="post" action="register-4.php">

            <div>
                คุณเคยมีประสบการณ์ทำงานหรือไม่ :&nbsp;&nbsp;&nbsp;<input name="experience" type="radio" id="yesexp"
                                                                         value="YES"
                                                                         onclick="showMore()" <?= $experience == "1" ? checked : "" ?>>
                มี &nbsp;&nbsp;&nbsp;<input
                    id="noexp"
                    name="experience" type="radio" value="NO"
                    onclick="hideMore()" <?= $experience == "0" ? checked : "" ?>> ไม่มี
                <br></div>
            <br>

            <div id="ifhave" hidden>
                (ถ้ามี)
                <br><br>

                <div>
                    องค์กร/บริษัทที่เคยทำงาน : <input name="company_name" type="text" value="<?= $company_name ?>">
                    <br></div>
                <br>

                <div>
                    ตำแหน่ง : <input name="position" type="text" value="<?= $position ?>">
                    <br></div>
                <br>

                <div>
                    ระยะเวลาที่ทำงาน : &nbsp;&nbsp;&nbsp; เริ่มต้น <input name="start_worked" type="date"
                                                                          value="<?= $start_worked ?>"
                                                                          data-validation-format="dd/mm/yyyy"
                                                                          placeholder="dd/mm/yyyy">
                    <!-- data-validation="date" -->

                    &nbsp;&nbsp;&nbsp;สิ้นสุด
                    <input name="stop_worked" type="date" value="<?= $stop_worked ?>"
                           data-validation-format="dd/mm/yyyy" placeholder="dd/mm/yyyy">
                    <!-- data-validation="date" -->
                    <br></div>
                <br>
                <br>
            </div>

            <!--<a href="register-4.php"><button type="submit">ถัดไป</button></a>-->
            <input form="registerform3" value="ถัดไป" type="submit">


        </form>
    </div>
</div>

<script>
    $.validate();
</script>

</body>
</html>