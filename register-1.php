<?php
session_start();
error_reporting(0);

if (!isset($_SESSION["register"])) {
    $_SESSION["register"] = array();
}

$name_title = (!$_SESSION["register"]["name_title"]) ? "" : $_SESSION["register"]["name_title"];
$name = (!$_SESSION["register"]["name"]) ? "" : $_SESSION["register"]["name"];
$surname = (!$_SESSION["register"]["surname"]) ? "" : $_SESSION["register"]["surname"];
$email = (!$_SESSION["register"]["email"]) ? "" : $_SESSION["register"]["email"];
$birthday = (!$_SESSION["register"]["birthday"]) ? "" : $_SESSION["register"]["birthday"];
$personalnumber = (!$_SESSION["register"]["personalnumber"]) ? "" : $_SESSION["register"]["personalnumber"];
$tel = (!$_SESSION["register"]["tel"]) ? "" : $_SESSION["register"]["tel"];
$address = (!$_SESSION["register"]["address"]) ? "" : $_SESSION["register"]["address"];
$province = (!$_SESSION["register"]["province"]) ? "" : $_SESSION["register"]["province"];

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
<!-- Page Content -->
<br>
<div class="container">
    <div class="col-lg-12 well">
        <form name="registerform1" id="registerform1" method="post" action="register-2.php">
            <div class="row">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="register-1.php">ข้อมูลส่วนตัว</a></li>
                    <li role="presentation"><a href="register-2.php">ประวัติการศึกษา</a></li>
                    <li role="presentation"><a href="register-3.php">ประวัติการทำงาน</a></li>
                    <li role="presentation"><a href="register-4.php">สายอาชีพที่ต้องการ</a></li>
                    <li role="presentation"><a href="register-5.php">ความพิการและอุปกรณ์</a></li>
                    <li role="presentation"><a href="register-6.php">รูปถ่าย</a></li>
                </ul>
                <br><br>
                </div>

                    คำนำหน้าชื่อ :
                    <select name="name_title" form="registerform1" selected="<?= $name_title ?>"
                            data-validation="required" data-validation-error-msg="ได้โปรด">
                        <option value="null" <?= !$name_title ? "selected disabled" : "disabled" ?>>เลือกคำนำหน้าชื่อ
                        </option>
                        <option value="Mr" <?= $name_title == "Mr" ? "selected" : "" ?>>นาย</option>
                        <option value="Ms" <?= $name_title == "Ms" ? "selected" : "" ?>>นางสาว</option>
                        <option value="Mrs" <?= $name_title == "Mrs" ? "selected" : "" ?>>นาง</option>
                    </select>


                <br><br>

                    ชื่อ : <input name="name" type="text" value="<?= $name ?>"
                                  data-validation="required" data-validation-error-msg="ได้โปรด">

                <br><br>

                    นามสกุล : <input name="surname" type="text" value="<?= $surname ?>"
                                     data-validation="required" data-validation-error-msg="ได้โปรด">

                <br><br>

                    อีเมล์ : <input name="email" type="email" value="<?= $email ?>" data-validation="email required"
                                    data-validation-error-msg="ได้โปรด">

                <br><br>

                    รหัสผ่าน : <input name="password_confirmation" type="password" value="<?= $name ?>"
                                      data-validation="length required" data-validation-error-msg="ได้โปรด"
                                      data-validation-length="6-50">
                <br><br>

                    ยืนยันรหัสผ่าน : <input name="password" type="password" value="<?= $name ?>"
                                            data-validation="confirmation" data-validation-error-msg="ได้โปรด">

                <br><br>

                    วัน/เดือน/ปีเกิด : <input name="birthday" type="date" value="<?= $birthday ?>"
                                              data-validation="required date" data-validation-format="dd/mm/yyyy"
                                              data-validation-error-msg="ได้โปรด" placeholder="dd/mm/yyyy">
                    <br><br>


                    เลขบัตรประจำตัวประชาชน : <input name="personalnumber" type="text" value="<?= $personalnumber ?>"
                                                    data-validation="required number length"
                                                    data-validation-length="13" data-validation-error-msg="ได้โปรด">
                    <br><br>


                    เบอร์โทร : <input name="tel" type="tel" value="<?= $tel ?>"
                                      data-validation="required length number" data-validation-length="9-10"
                                      data-validation-error-msg="ได้โปรด">
                    <br><br>


                    ที่อยู่ : <input name="address" type="text" value="<?= $address ?>">
                    <br><br>


                    จังหวัด : <input name="province" type="text" value="<?= $province ?>"
                                     data-validation="required" data-validation-error-msg="ได้โปรด">
                    <br><br>

                <br>

                    <!--<a href="save-1.php"><button type="submit">ถัดไป</button></a>-->
                    <input form="registerform1" value="ถัดไป" type="submit">


            </div>

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