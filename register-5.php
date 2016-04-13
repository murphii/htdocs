<?php
// This
session_start();
error_reporting(0);

if (!$_SESSION["register"]) {
    $_SESSION["register"] = array();
}

$disabletype = (!$_SESSION["register"]["disablety"]) ? "" : $_SESSION["register"]["disabletype"];
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
                <li role="presentation"><a href="register-6.php">รูปถ่าย</a></li>
            </ul>
            <br><br>
            <div class="col-sm-7 form-group">
                เลขที่บัตรประจำตัวผู้พิการ : <input name="" type="number">
                <br><br>
                ประเภทความพิการ : <select name="disabletype" form="register5" selected="<?= $disabletype ?>">
                    <option value="null" <?= $education == "null" ? "selected" : "" ?>>เลือกระดับการศึกษา</option>
                    <option value="null" <?= $disabletype == "null" ? "selected" : "" ?>>เลือกประเภทความพิการ
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
                    <!--<option  value="intelligence" <?= $disabletype == "intelligence" ? "selected" : "" ?>>พิการทางสติปัญญา</option>
                        <option  value="learning" <?= $disabletype == "learning" ? "selected" : "" ?>>พิการทางการเรียนรู้</option>
                        <option  value="autistic" <?= $disabletype == "autistic" ? "selected" : "" ?>>พิการทางออทิสติก</option> -->
                </select>
                <br><br>
                ลักษณะความพิการ : <select name="disability">
                    <!-- จะมีลักษณะความพิการของแต่ละประเภทอีก คือถ้าเลือกพิการประเภท1(พิการทางการเห็น) จะให้ขึ้นลักษณะ2อันให้เลือกอัตโนมัติ (ตาเลือนราง,ตาบอด) -->
                    <option>เลือกลักษณะความพิการ</option>
                </select>
                <br><br>
                อธิบายรายละเอียด : <input name="description" type="text">
                <br><br>
                อุปกรณ์ช่วยความพิการ : <input name="assistive_accessory" type="text">
                <br><br>


                <input form="registerform5" value="ถัดไป" type="submit">
            </div>
            <br><br><br><br><br>

        </div>
    </div>
</div>
</body>
</html>