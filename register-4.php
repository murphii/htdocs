<?php
// This
session_start();
error_reporting(0);

if (!$_SESSION["register"]) {
    $_SESSION["register"] = array();
}

// This
$typejob = (!$_SESSION["register"]["typejob"]) ? "" : $_SESSION["register"]["typejob"];
$fieldofwork = (!$_SESSION["register"]["fieldofwork"]) ? "" : $_SESSION["register"]["fieldofwork"];
$salary = (!$_SESSION["register"]["salary"]) ? "" : $_SESSION["register"]["salary"];
$workingprovince = (!$_SESSION["register"]["workingprovince"]) ? "" : $_SESSION["register"]["workingprovince"];
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
        <form name="registerform4" id="registerform4" method="post" action="register-5.php">

            <div class="row">
                <?php //This
                require 'fixpost.php';
                ?>
                <ul class="nav nav-tabs">
                    <li role="presentation"><a href="register-1.php">ข้อมูลส่วนตัว</a></li>
                    <li role="presentation"><a href="register-2.php">ประวัติการศึกษา</a></li>
                    <li role="presentation"><a href="register-3.php">ประวัติการทำงาน</a></li>
                    <li role="presentation" class="active"><a href="register-4.php">สายอาชีพที่ต้องการ</a></li>
                    <li role="presentation"><a href="register-5.php">ความพิการและอุปกรณ์</a></li>
                    <li role="presentation"><a href="register-6.php">รูปถ่าย</a></li>
                </ul>
                <br><br>
            </div>

            ประเภทของงานที่ต้องการ : <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="typejob[]" type="checkbox"> งานประจำ
            (full time)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="typejob[]" type="checkbox"> งานชั่วคราว
            (part time)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="typejob[]" type="checkbox"> ฝึกงาน
            (internship)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="typejob[]" type="checkbox"> งานอิสระ
            (freelance)


            <br><br>
            สายงานที่ต้องการ : <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox"
                                                                   value="">
            การตลาด (marketing)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox"
                                                                   value="">
            ประชาสัมพันธ์ (PR)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox"
                                                                   value="">
            การผลิต (production)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox"
                                                                   value="">
            การศึกษา/วิชาการ (education)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox"
                                                                   value="">
            ขนส่ง (logistic)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox"> ฝ่ายขาย
            (sales)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox">
            บริการลูกค้า (customer service)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox">
            ฝ่ายจัดซื้อ
            (purchasing)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox">
            ท่องเที่ยวและโรงแรม (travel and hotel)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox">
            อาหารและเครื่องดื่ม (food and beverage)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox">
            การเงินและธนาคาร (finance and banking)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox">
            ทรัพยากรบุคคล (human resource)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox">
            บริการเฉพาะทาง (specialist)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox"> บัญชี
            (accounting)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox">
            หน่วยงานราชการ (government agency)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox">
            โภชนาการ/สุขภาพ/ความงาม (health and beauty)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox"> ออกแบบ
            (design)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox">
            สื่อและโฆษณา (media and advertisement)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox"> ไอที
            (IT)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldofwork[]" type="checkbox"> อื่นๆ
            (others)
            <br><br>

            เงืนเดือนที่ต้องการ : <input name="salary" type="text" value="<?= $salary ?>">
            <br><br>

            จังหวัดที่ต้องการทำงาน : <input name="workingprovince" type="text" value="<?= $workingprovince ?>">
            <br><br>

            <br>

            <input form="registerform4" value="ถัดไป" type="submit">

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