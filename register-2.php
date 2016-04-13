<?php
// This
session_start();
error_reporting(0);

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
        <form name="registerform2" id="registerform2" method="post" action="register-3.php">
            
            <div class="row">
                <?php //This
                require 'fixpost.php';
                ?>
                <ul class="nav nav-tabs">
                    <li role="presentation"><a href="register-1.php">ข้อมูลส่วนตัว</a></li>
                    <li role="presentation" class="active"><a href="register-2.php">ประวัติการศึกษา</a></li>
                    <li role="presentation"><a href="register-3.php">ประวัติการทำงาน</a></li>
                    <li role="presentation"><a href="register-4.php">สายอาชีพที่ต้องการ</a></li>
                    <li role="presentation"><a href="register-5.php">ความพิการและอุปกรณ์</a></li>
                    <li role="presentation"><a href="register-6.php">รูปถ่าย</a></li>
                </ul>
                <br><br>
            </div>

            
            กรุณากรอกประวัติการศึกษาสูงสุดของคุณ
            <br><br>

            ระดับการศึกษา : <select name="edu_level" form="registerform2" selected="<?= $edu_level ?>"
                                    data-validation="required"
                                    data-validation-error-msg="กรุณาเลือกระดับการศึกษา">
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
            <br><br>
                  
            ประเทศที่จบ : <input name="country_grad" type="text" value="<?= $country_grad ?>">
            <br><br>
            
            สถาบัน : <input name="university" type="text" value="<?= $university ?>">
            <br><br>
            
            คณะ : <input name="faculty" type="text" value="<?= $faculty ?>">
            <br><br>
            
            สาขา : <input name="major" type="text" value="<?= $major ?>">
            <br><br>
            
            ปีพ.ศ.ที่จบการศึกษา : <input name="year_grad" type="text" value="<?= $year_grad ?>"
                                         data-validation="required number length"
                                         data-validation-length="4" placeholder="2511"
                                         data-validation-error-msg="กรุณากรอกปีที่จบ">
            <br><br>
            
            คะแนนเฉลี่ย(GPA) : <input name="GPA" type="text" value="<?= $GPA ?>"
                                      data-validation="required number length" placeholder="4.00">
            <br><br>
            
            รางวัล/ความสำเร็จ/เกียรตินิยม : <input name="honor" type="text" value="<?= $honor ?>">
            <br><br>
            
            ทักษะด้านภาษา : <input name="language" type="text" value="<?= $language ?>">
            <br><br>
            
            รางวัล/ความสำเร็จ/เกียรตินิยม : <input name="experience" type="text" value="<?= $experience ?>">
            <br><br>
            
            <br>
            
            <!--<a href="register-3.php"><button value="submit" type="submit">ถัดไป</button></a>-->
            <input form="registerform2" value="ถัดไป" type="submit">
        
        
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