<?php
session_start(); error_reporting(0);

if (!isset($_SESSION["register"])) {
    $_SESSION["register"] = array();
}

$name_title = (!$_SESSION["register"]["name_title"]) ? "" : $_SESSION["register"]["name_title"];
$name = (!$_SESSION["register"]["name"]) ? "" : $_SESSION["register"]["name"];
$surname = (!$_SESSION["register"]["surname"]) ? "" : $_SESSION["register"]["surname"];
$email = (!$_SESSION["register"]["email"]) ? "" : $_SESSION["register"]["email"];
$password = (!$_SESSION["register"]["password"]) ? "" : $_SESSION["register"]["password"];
$birthday = (!$_SESSION["register"]["birthday"]) ? "" : $_SESSION["register"]["birthday"];
$personalnumber = (!$_SESSION["register"]["personalnumber"]) ? "" : $_SESSION["register"]["personalnumber"];
$tel = (!$_SESSION["register"]["tel"]) ? "" : $_SESSION["register"]["tel"];
$address = (!$_SESSION["register"]["address"]) ? "" : $_SESSION["register"]["address"];
$province = (!$_SESSION["register"]["province"]) ? "" : $_SESSION["register"]["province"];

?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <script src="js/jquery.js"></script>
    <script>
        function emailcheck(source){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    if(xhttp.responseText == '0'){
                        $('#emailcan').html("");
                        $('#form1submit').prop('disabled', false);

                    } else {
                        $('#emailcan').html("อีเมล์นี้ลงทะเบียนแล้ว");
                        $('#form1submit').prop('disabled', true);
                    }
                }
            };
            var param = {"email":source.value};
            xhttp.open("GET", "emailcheck.php?" +  $.param(param) , true);
                xhttp.send();
        }
    </script>
</head>

<body>
<?php include 'header.php'; ?>
<!-- Page Content -->
<br>
<div class="container">
    <div class="col-lg-12 well">

        <div class="row">
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="register-1.php">ข้อมูลส่วนตัว</a></li>
                <li role="presentation"><a>ประวัติการศึกษา</a></li>
                <li role="presentation"><a>ประวัติการทำงาน</a></li>
                <li role="presentation"><a>สายอาชีพที่ต้องการ</a></li>
                <li role="presentation"><a>ความพิการและอุปกรณ์</a></li>
                <li role="presentation"><a>รูปถ่าย</a></li>
            </ul>
            <br><br>
        </div>


        <form name="registerform1" id="registerform1" method="post" action="register-2.php">
            <div>
                คำนำหน้าชื่อ :
                <select name="name_title" form="registerform1" selected="<?= $name_title ?>"
                        data-validation="required" data-validation-error-msg="กรุณาเลือกคำนำหน้าชื่อ">
                    <option value="null" <?= !$name_title ? "selected disabled" : "disabled" ?>>เลือกคำนำหน้าชื่อ
                    </option>
                    <option value="Mr" <?= $name_title == "Mr" ? "selected" : "" ?>>นาย</option>
                    <option value="Ms" <?= $name_title == "Ms" ? "selected" : "" ?>>นางสาว</option>
                    <option value="Mrs" <?= $name_title == "Mrs" ? "selected" : "" ?>>นาง</option>
                </select>


                <br></div>
            <br>


            <div>
                ชื่อ : <input name="name" type="text" value="<?= $name ?>" required minlength="2" >
                              <!-- data-validation-error-msg="กรุณากรอกชื่อ"-->


                <br></div>
            <br>


            <div>
                นามสกุล : <input name="surname" type="text" value="<?= $surname ?>" required minlength="2" >
                                <!--data-validation="required" data-validation-error-msg="กรุณากรอกนามสกุล">-->

                <br></div>
            <br>


            <div>
                อีเมล์ :
                <input name="email" type="email" value="<?= $email ?>" data-validation="email required"
                                data-validation-error-msg="กรุณากรอกอีเมล์" placeholder="wansiri@example.com"
                       onblur="emailcheck(this)"
                <?= (isset($_SESSION['authentication']) ? "disabled readonly" : "") ?>>
                <span id="emailcan" class="text-danger"> </span>

                <br></div>
            <br>


            <div>
                รหัสผ่าน : <input name="password" type="password" value="<?= $password ?>" required minlength="4" >
                                <!--  data-validation="length required"
                                  data-validation-error-msg="กรุณาใส่อย่างน้อย 6 ตัวอักษร"
                                  data-validation-length="6-50">-->

                <br></div>
            <br>


            <div>
                ยืนยันรหัสผ่าน : <input name="password_confirmation" type="password" value="<?= $password ?>" required minlength="4" >
                                      <!--  data-validation-error-msg="รหัสผ่านไม่ตรงกัน"
                                        data-validation="confirmation"> -->

                <br></div>
            <br>


            <div>
                วัน/เดือน/ปีเกิด : <input name="birthday" type="date" value="<?= $birthday ?>" required>
                                        <!-- data-validation="required date" data-validation-format="dd/mm/yyyy"
                                          data-validation-error-msg="กรุณากรอกวัน/เดือน/ปีเกิด"
                                          placeholder="dd/mm/yyyy">-->

                <br></div>
            <br>

            <div>
                เลขบัตรประจำตัวประชาชน : <input name="personalnumber" type="text" value="<?= $personalnumber ?>" required>
                                          <!--      data-validation="required number length"
                                                data-validation-length="13"
                                                data-validation-error-msg="กรุณากรอกเลขประจำตัวประชาชน"> -->

                <br></div>
            <br>


            <div>
                เบอร์โทร : <input name="tel" type="tel" value="<?= $tel ?>" required>
                               <!--   data-validation="required length number" data-validation-length="9-10"
                                  data-validation-error-msg="กรุณากรอกเบอร์โทรศัพท์"> -->

                <br></div>
            <br>


            <div>
                ที่อยู่ : <input name="address" type="text" value="<?= $address ?>">

                <br></div>
            <br>


            <div>
                จังหวัด : <input name="province" type="text" value="<?= $province ?>">

                <br></div>
            <br>
            <br>


            <!--<a href="save-1.php"><button type="submit">ถัดไป</button></a>-->
            <input id="form1submit" form="registerform1" value="ถัดไป" type="submit" disabled="true">


        </form>
    </div>
</div>
<!--
<script src="js/jquery.js"></script>
<script src="js/jquery.form-validator.min.js"></script>
<script>
    $.validate();
</script>
-->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<script>
    //$.validate();
    $('form').validate({
        rules : {
            title_name : "required",
            name : "required",
            surname : "required",
            email : {
                required: true,
                email: true
            },
            password: {
                required: true,
            },
            password_confirmation: {
                required: true,
                equalTo: "#password"
            },
            birthday: "required",
            personalnumber: "required",
            tel: "required"
        },
        messages : {
            name : " กรุณากรอกชื่อของท่าน",
            surname : " กรุณากรอกนามสกุลของท่าน",
            email: {
                required: " กรุณากรอกอีเมล์ของท่าน"
                //minlength: "Please enter a valid email address",
                //remote: jQuery.validator.format("{0} is already in use")
            },
            password: {
                required: " กรุณากรอกรหัสผ่าน อย่างน้อย 4 ตัวอักษร"
                //minlength: jQuery.validator.format("Enter at least {0} characters")
            },
            password_confirmation: {
                required: " กรุณากรอกรหัสผ่านอีกครั้ง",
                //minlength: jQuery.validator.format("Enter at least {0} characters"),
                equalTo: " รหัสผ่านไม่ตรงกัน"
            },
            birthday: " กรุณากรอกวันเกิดของท่าน",
            personalnumber: " กรุณากรอกเลขประจำตัวประชาชน",
            tel: " กรุณากรอกเบอร์ติดต่อ"
        },
        errorPlacement: function(error, element){
            if (element.is(':'))
        }
    });
</script>

</body>
</html>