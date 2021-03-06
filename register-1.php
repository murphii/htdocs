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
$password = (!$_SESSION["register"]["password"]) ? "" : $_SESSION["register"]["password"];
$birthday = (!$_SESSION["register"]["birthday"]) ? "" : $_SESSION["register"]["birthday"];
$personalnumber = (!$_SESSION["register"]["personalnumber"]) ? "" : $_SESSION["register"]["personalnumber"];
$tel = (!$_SESSION["register"]["tel"]) ? "" : $_SESSION["register"]["tel"];
$address = (!$_SESSION["register"]["address"]) ? "" : $_SESSION["register"]["address"];
$province = (!$_SESSION["register"]["province"]) ? "" : $_SESSION["register"]["province"];

?>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <style>
        .invalid {
            color: red;
            font-weight: normal;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet">
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <!--<script src="js/jquery.js"></script>-->
    <script>
        function emailcheck(source) {
            if (!source.disabled) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        if (xhttp.responseText == '0') {
                            $('#emailcan').html("");
                            $('#form1submit').prop('disabled', false);

                        } else {
                            $('#emailcan').html("อีเมล์นี้ลงทะเบียนแล้ว");
                            $('#form1submit').prop('disabled', true);
                        }
                    }
                };
                var param = {"email": source.value};
                xhttp.open("GET", "emailcheck.php?" + $.param(param), true);
                xhttp.send();
            }
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
                <select name="name_title" form="registerform1" selected="<?= $name_title ?>">
                    <option value="null" <?= !$name_title ? "selected disabled" : "disabled" ?>>เลือกคำนำหน้าชื่อ
                    </option>
                    <option value="Mr" <?= $name_title == "Mr" ? "selected" : "" ?>>นาย</option>
                    <option value="Ms" <?= $name_title == "Ms" ? "selected" : "" ?>>นางสาว</option>
                    <option value="Mrs" <?= $name_title == "Mrs" ? "selected" : "" ?>>นาง</option>
                </select>
                <br></div>
            <br>


            <div>
                ชื่อ : <input name="name" type="text" value="<?= $name ?>">
                <br></div>
            <br>


            <div>
                นามสกุล : <input name="surname" type="text" value="<?= $surname ?>">
                <br></div>
            <br>


            <div>
                อีเมล์ :
                <input name="email" id="email" type="email" value="<?= $email ?>" placeholder="wansiri@example.com"
                    <?= (isset($_SESSION['authentication']) ? "disabled readonly" : "") ?>>
                <br></div>
            <br>


            <div>
                รหัสผ่าน : <input id="password" name="password" type="password" value="<?= $password ?>">
                <br></div>
            <br>


            <div>
                ยืนยันรหัสผ่าน : <input name="password_confirmation" type="password" value="<?= $password ?>">
                <br></div>
            <br>


            <div>
                วัน/เดือน/ปีเกิด :
                <div style="width:200px" class='input-group date' id='datetimepicker5'>
                    <input type='text' class="form-control" name="birthday"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>

            </div>
            <br>

            <div>
                เลขบัตรประจำตัวประชาชน : <input name="personalnumber" type="text" value="<?= $personalnumber ?>">
                <br></div>
            <br>


            <div>
                เบอร์โทร : <input name="tel" type="tel" value="<?= $tel ?>">
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
            <input id="form1submit" form="registerform1" value="ถัดไป" type="submit">


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
<script
    src="https://code.jquery.com/jquery-2.2.3.min.js"
    integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="
    crossorigin="anonymous"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

<script>
    d = new Date();
    d.setFullYear(d.getFullYear() + 543);
    $(function () {

        $('#datetimepicker5').datetimepicker({
            defaultDate: d,
            maxDate: d,
            format: 'DD/MM/YYYY'
        });
    });
    $('form').validate({
        errorClass: "invalid",
        rules: {
            name_title: "required",
            name: "required",
            surname: "required",
            email: {
                required: true,
                email: true,
                remote: {
                    url: "emailcheck.php",
                    type: "get",
                    data: {
                        email: function () {
                            return $("#email").val();
                        }
                    }
                }
            },
            password: {
                required: true,
                minlength: 4
            },
            password_confirmation: {
                required: true,
                equalTo: "#password"
            },
            birthday: "required",
            personalnumber: {
                required: true,
                minlength: 13,
                maxlength: 13,
                number: true
            },
            tel: {
                required: true,
                minlength: 9,
                maxlength: 12,
                number: true
            }
        },
        messages: {
            name_title: "กรุณาเลือกคำนำหน้าชื่อ",
            name: " กรุณากรอกชื่อของท่าน",
            surname: " กรุณากรอกนามสกุลของท่าน",
            email: {
                required: " กรุณากรอกอีเมล์ของท่าน",
                email: " กรุณากรอกอีเมล์ให้ถูกต้อง",
                remote: jQuery.validator.format(" {0} เคยลงทะเบียนแล้ว")
            },
            password: {
                required: " กรุณากรอกรหัสผ่าน",
                minlength: jQuery.validator.format("กรุณากรอกรหัสผ่าน อย่างน้อย {0} ตัวอักษร")
            },
            password_confirmation: {
                required: " กรุณากรอกรหัสผ่านอีกครั้ง",
                equalTo: " รหัสผ่านไม่ตรงกัน"
            },
            birthday: " กรุณากรอกวันเกิดของท่าน",
            personalnumber: " กรุณากรอกเลขประจำตัวประชาชน 13 หลัก",
            tel: " กรุณากรอกเบอร์ติดต่อ"
        }
       
    });
</script>

</body>
</html>