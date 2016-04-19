<?php
// This
session_start();
error_reporting(0);
require 'register_update.php';
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
                    ระยะเวลาที่ทำงาน : &nbsp;&nbsp;&nbsp; เริ่มต้น
                    <div class='input-group date' id='datetimepicker6'>
                        <input type='text' class="form-control" name="start_worked"
                               value="<?= $start_worked ?>"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                    </div>
                    <!-- data-validation="date" -->

                    &nbsp;&nbsp;&nbsp;สิ้นสุด
                    <div class='input-group date' id='datetimepicker7'>
                        <input class="form-control" name="stop_worked" type="text"
                               value="<?= $stop_worked ?>"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                    </div>
                    <br></div>
                <br>
                <br>
            </div>

            <!--<a href="register-4.php"><button type="submit">ถัดไป</button></a>-->
            <input form="registerform3" value="ถัดไป" type="submit">


        </form>
    </div>
</div>
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
        $('#datetimepicker6').datetimepicker({
            defaultDate: d,
            maxDate: d,
            format: 'DD/MM/YYYY'
        });
        $('#datetimepicker7').datetimepicker({
            defaultDate: d,
            maxDate: d,
            format: 'DD/MM/YYYY',
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
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