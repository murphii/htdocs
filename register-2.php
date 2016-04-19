<?php
// This
session_start();
error_reporting(0);

require 'register_update.php';

if (!$_SESSION["register"]) {
    $_SESSION["register"] = array();
}

// This
$edu_level = (!$_SESSION["register"]["edu_level"]) ? "" : $_SESSION["register"]["edu_level"];
$country_grad = (!$_SESSION["register"]["country_grad"]) ? "" : $_SESSION["register"]["country_grad"];
$university = (!$_SESSION["register"]["university"]) ? "" : $_SESSION["register"]["university"];
$faculty = (!$_SESSION["register"]["faculty"]) ? "" : $_SESSION["register"]["university"];
$major = (!$_SESSION["register"]["major"]) ? "" : $_SESSION["register"]["major"];
$year_grad = (!$_SESSION["register"]["year_grad"]) ? "" : $_SESSION["register"]["year_grad"];
$GPA = (!$_SESSION["register"]["GPA"]) ? "" : $_SESSION["register"]["GPA"];
$honor = (!$_SESSION["register"]["honor"]) ? "" : $_SESSION["register"]["honor"];
$language = (!$_SESSION["register"]["language"]) ? "" : $_SESSION["register"]["language"];
$experience = (!$_SESSION["register"]["experience"]) ? "" : $_SESSION["register"]["experience"];
?>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <style>
        .invalid{
            color: red;
            font-weight: normal;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
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
                <li role="presentation" class="active"><a href="register-2.php">ประวัติการศึกษา</a></li>
                <li role="presentation"><a>ประวัติการทำงาน</a></li>
                <li role="presentation"><a>สายอาชีพที่ต้องการ</a></li>
                <li role="presentation"><a>ความพิการและอุปกรณ์</a></li>
                <li role="presentation"><a>รูปถ่าย</a></li>
            </ul>
            <br><br>
        </div>

        <form name="registerform2" id="registerform2" method="post" action="register-3.php">


            กรุณากรอกประวัติการศึกษาสูงสุดของคุณ
            <br><br>

            <div>
                ระดับการศึกษา : <select name="edu_level" form="registerform2" selected="<?= $edu_level ?>">
                    <option value="null" <?= !$edu_level ? "selected disabled" : "disabled" ?>>เลือกระดับการศึกษา
                    </option>
                    <option value="writeread" <?= $edu_level == "writeread" ? "selected" : "" ?>>อ่านออกเขียนได้
                    </option>
                    <option value="primary" <?= $edu_level == "primary" ? "selected" : "" ?>>ประถมศึกษา</option>
                    <option value="junior" <?= $edu_level == "junior" ? "selected" : "" ?>>มัธยมศึกษาตอนต้น(ม.3)
                    </option>
                    <option value="senior" <?= $edu_level == "senior" ? "selected" : "" ?>>มัธยมศึกษาตอนปลาย(ม.6)
                    </option>
                    <option value="vocational" <?= $edu_level == "vocational" ? "selected" : "" ?>>
                        ประกาศนียบัตรวิชาชีพ(ปวช.)
                    </option>
                    <option value="highvocat" <?= $edu_level == "highvocat" ? "selected" : "" ?>>
                        ประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.)
                    </option>
                    <option value="technical" <?= $edu_level == "technical" ? "selected" : "" ?>>
                        ประกาศนียบัตรวิชาชีพเทคนิค(ปวท.)
                    </option>
                    <option value="college" <?= $edu_level == "College" ? "selected" : "" ?>>อนุปริญญา</option>
                    <option value="bachelor" <?= $edu_level == "bachelor" ? "selected" : "" ?>>ปริญญาตรี</option>
                    <option value="master" <?= $edu_level == "master" ? "selected" : "" ?>>ปริญญาโท</option>
                    <option value="doctor" <?= $edu_level == "doctor" ? "selected" : "" ?>>ปริญญาเอก</option>
                </select>
                <br></div>
            <br>

            <div>
                ประเทศที่จบ : <input name="country_grad" type="text" value="<?= $country_grad ?>">
                <br></div>
            <br>

            <div>
                สถาบัน : <input name="university" type="text" value="<?= $university ?>">
                <br></div>
            <br>

            <div>
                คณะ : <input name="faculty" type="text" value="<?= $faculty ?>">
                <br></div>
            <br>

            <div>
                สาขา : <input name="major" type="text" value="<?= $major ?>">
                <br></div>
            <br>

            <div>
                ปีพ.ศ.ที่จบการศึกษา :
                <span style="width:140px" class='input-group date' id='datetimepicker5'>
                    <input type='text' class="form-control" name="year_grad" value="<?=$year_grad?>"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </span>
                </div>
            <br>

            <div>
                คะแนนเฉลี่ย(GPA) : <input name="GPA" type="text" value="<?= $GPA ?>">
                <br></div>
            <br>

            <div>
                รางวัล/ความสำเร็จ/เกียรตินิยม : <input name="honor" type="text" value="<?= $honor ?>">
                <br></div>
            <br>

            <div>
                ทักษะด้านภาษา : <input name="language" type="text" value="<?= $language ?>">
                <br></div>
            <br>

            <div>
                รางวัล/ความสำเร็จ/เกียรตินิยม : <input name="experience" type="text" value="<?= $experience ?>">
                <br></div>
            <br>

            <br>

            <!--<a href="register-3.php"><button value="submit" type="submit">ถัดไป</button></a>-->
            <input form="registerform2" value="ถัดไป" type="submit">


        </form>
    </div>
</div>

<script
    src="https://code.jquery.com/jquery-2.2.3.min.js"
    integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="
    crossorigin="anonymous"></script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script>
    d = new Date();
    d.setFullYear(d.getFullYear() + 543);
    $(function () {

        $('#datetimepicker5').datetimepicker({
            defaultDate: d,
            maxDate: d,
            format: 'YYYY'
        });
    });
    $('form').validate({
        errorClass: "invalid",
        rules: {
            edu_level: "required",
            year_grad: {
                number: true,
                minlength: 4,
                maxlength: 4
            },
            GPA: {
                float: true,
                maxlength: 4
            }
        },
        messages: {
            edu_level: "กรุณาเลือกคำนำหน้าชื่อ",
            year_grad: "กรอกปีการศึกษาไม่ถูกต้อง",
            GPA: "กรอกเกรดไม่ถูกต้อง"
        }

    });
</script>

</body>
</html>