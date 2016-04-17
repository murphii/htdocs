<?php
// This
session_start();
error_reporting(0);

if (!$_SESSION["register"]) {
    $_SESSION["register"] = array();
}

// This
$typeJob = (!$_SESSION["register"]["typeJob"]) ? "" : $_SESSION["register"]["typeJob"];
$fieldOfWork = (!$_SESSION["register"]["fieldOfWork"]) ? "" : $_SESSION["register"]["fieldOfWork"];
$salary = (!$_SESSION["register"]["salary"]) ? "" : $_SESSION["register"]["salary"];
$workingProvince = (!$_SESSION["register"]["workingProvince"]) ? "" : $_SESSION["register"]["workingProvince"];
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
                <li role="presentation" class="active"><a href="register-4.php">สายอาชีพที่ต้องการ</a></li>
                <li role="presentation"><a>ความพิการและอุปกรณ์</a></li>
                <li role="presentation"><a>รูปถ่าย</a></li>
            </ul>
            <br><br>
        </div>

        <form name="registerform4" id="registerform4" method="post" action="register-5.php">

            <div>
                ประเภทของงานที่ต้องการ : <br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="typeJob[]" type="checkbox"
                                                                       value="fullTime"<?= $typeJob ?>
                                                                       data-validation="checkbox_group"
                                                                       data-validation-qty="min1"
                                                                       data-validation-error-msg="กรุณาเลือกประเภทงานที่ต้องการทำ">
                งานประจำ(full time)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="typeJob[]" type="checkbox"
                                                                       value="partTime"<?= $typeJob ?>> งานชั่วคราว
                (part time)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="typeJob[]" type="checkbox"
                                                                       value="internship"<?= $typeJob ?>> ฝึกงาน
                (internship)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="typeJob[]" type="checkbox"
                                                                       value="freelance"<?= $typeJob ?>> งานอิสระ
                (freelance)
                <br></div>
            <br>


            <div>
                สายงานที่ต้องการ : <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="marketing"<?= $fieldOfWork ?>
                                                                       data-validation="checkbox_group"
                                                                       data-validation-qty="min1"
                                                                       data-validation-error-msg="กรุณาเลือกสายงานที่ต้องการทำ">
                การตลาด (marketing)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="PR"<?= $fieldOfWork ?>> ประชาสัมพันธ์ (PR)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="production"<?= $fieldOfWork ?>> การผลิต (production)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="education"<?= $fieldOfWork ?>> การศึกษา/วิชาการ
                (education)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="logistic"<?= $fieldOfWork ?>> ขนส่ง (logistic)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="sale"<?= $fieldOfWork ?>> ฝ่ายขาย (sales)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="customerService"<?= $fieldOfWork ?>> บริการลูกค้า (customer
                service)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="purchasing"<?= $fieldOfWork ?>> ฝ่ายจัดซื้อ (purchasing)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="travelAndHotel"<?= $fieldOfWork ?>> ท่องเที่ยวและโรงแรม
                (travel and hotel)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="foodAndBeverage"<?= $fieldOfWork ?>> อาหารและเครื่องดื่ม
                (food and beverage)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="financeAndBanking"<?= $fieldOfWork ?>> การเงินและธนาคาร
                (finance
                and banking)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="HR"<?= $fieldOfWork ?>> ทรัพยากรบุคคล (human resource)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="specialist"<?= $fieldOfWork ?>> บริการเฉพาะทาง
                (specialist)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="accounting"<?= $fieldOfWork ?>> บัญชี (accounting)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="governmentAgency"> หน่วยงานราชการ
                (government agency)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="healthAndBeauty"<?= $fieldOfWork ?>> โภชนาการ/สุขภาพ/ความงาม
                (health and beauty)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="design"> ออกแบบ(design)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="mediaAndAdvertisement"<?= $fieldOfWork ?>> สื่อและโฆษณา
                (media and advertisement)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="IT"<?= $fieldOfWork ?>> ไอที (IT)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="fieldOfWork[]" type="checkbox"
                                                                       value="others"<?= $fieldOfWork ?>> อื่นๆ (others)
                <br></div>
            <br>

            <div>
                เงืนเดือนที่ต้องการ : <input name="salary" type="text" value="<?= $salary ?>">
                <br></div>
            <br>

            <div>
                จังหวัดที่ต้องการทำงาน : <input name="workingProvince" type="text" value="<?= $workingProvince ?>">
                <br></div>
            <br>

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