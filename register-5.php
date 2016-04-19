<?php
// This
session_start();
error_reporting(0);
require 'register_update.php';

if (!$_SESSION["register"]) {
    $_SESSION["register"] = array();
}

$disablenumber = (!$_SESSION["register"]["disablenumber"]) ? "" : $_SESSION["register"]["disablenumber"];
$disabletype = (!$_SESSION["register"]["disabletype"]) ? "" : $_SESSION["register"]["disabletype"];
$disability = (!$_SESSION["register"]["disability"]) ? "" : $_SESSION["register"]["disability"];
$description = (!$_SESSION["register"]["description"]) ? "" : $_SESSION["register"]["description"];
$assistive_accessory = (!$_SESSION["register"]["assistive_accessory"]) ? "" : $_SESSION["register"]["assistive_accessory"];


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
                    <li role="presentation"><a href="register-3.php">ประวัติการทำงาน</a></li>
                    <li role="presentation"><a href="register-4.php">สายอาชีพที่ต้องการ</a></li>
                    <li role="presentation" class="active"><a href="register-5.php">ความพิการและอุปกรณ์</a></li>
                    <li role="presentation"><a>รูปถ่าย</a></li>
                </ul>
                <br><br>
            </div>

        <form name="registerform5" id="registerform5" method="post" action="register-6.php">

            <div>
            เลขที่บัตรประจำตัวผู้พิการ : <input name="disablenumber" type="text" value="<?= $disablenumber ?>"
                                                data-validation="required number"
                                                data-validation-error-msg="กรุณากรอกเลขที่บัตรประจำตัวผู้พิการ">
            <br></div><br>

            <div>
            ประเภทความพิการ : <select name="disabletype" form="register5" selected="<?= $disabletype ?>"
                                      data-validation="required" data-validation-error-msg="กรุณาเลือกประเภทความพิการ">

                <option value="null" <?= !$disabletype ? "selected disabled" : "disabled" ?>>เลือกประเภทความพิการ
                </option>
                <option value="eye" <?= $disabletype == "eye" ? "selected" : "" ?>>พิการทางการเห็น</option>
                <option value="ear"
                    <?= $disabletype == "ear" ? "selected" : "" ?>>พิการทางการได้ยินหรือสื่อความหมาย
                </option>
                <option value="movement" <?= $disabletype == "movement" ? "selected" : "" ?>>
                    พิการทางร่างกายหรือการเคลื่อนไหว
                </option>
                <option value="behaviour" <?= $disabletype == "eye" ? "behaviour" : "" ?>>
                    พิการทางจิตใจหรือพฤติกรรม
                </option>
                <option value="intelligence" <?= $disabletype == "intelligence" ? "selected" : "" ?>>พิการทางสติปัญญา
                </option>
                <option value="learning" <?= $disabletype == "learning" ? "selected" : "" ?>>พิการทางการเรียนรู้
                </option>
                <option value="autistic" <?= $disabletype == "autistic" ? "selected" : "" ?> >พิการทางออทิสติก</option>
            </select>
            <br></div><br>

            <!--ลักษณะความพิการ : <select name="disability">
                <!-- จะมีลักษณะความพิการของแต่ละประเภทอีก คือถ้าเลือกพิการประเภท1(พิการทางการเห็น) จะให้ขึ้นลักษณะ2อันให้เลือกอัตโนมัติ (ตาเลือนราง,ตาบอด)
                <option>เลือกลักษณะความพิการ</option>
            </select> -->

            อธิบายรายละเอียด : <input name="description" type="text">
            <br><br>

            อุปกรณ์ช่วยความพิการ : <input name="assistive_accessory" type="text">
            <br><br>

            <br>

            <input form="registerform5" value="ถัดไป" type="submit">


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