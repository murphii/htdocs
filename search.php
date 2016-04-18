<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <style type="text1/css">
        p.margin {
            margin: 4cm 4cm 3cm 4cm
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
          type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<SCRIPT Language="JavaScript">

</SCRIPT>
<body>

<!-- Navigation -->
<?php include 'header.php'; ?>


<!-- Header -->
<a name="about"></a>
<div class="intro-header">
    <div class="container">
        <form name="DD" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <br>
            <h1>ค้นหางานที่คุณต้องการ</h1>
            <br>
            <br>
            <div class="form-group">
                <label for="inputFirstname" class="col-sm-4 control-label"><h4>เลือกประเภทความพิการ </h4></label>
                <div class="btn-group" role="group" aria-label="...">
                    <select class="form-control" name="filter1">
                        <option>เลือกประเภทความพิการ</option>
                        <option value="พิการทางการเห็น">พิการทางการเห็น</option>
                        <option value="พิการทางการได้ยินหรือสื่อความหมาย">พิการทางการได้ยินหรือสื่อความหมาย&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                        <option value="พิการทางร่างกายหรือการเคลื่อนไหว">พิการทางร่างกายหรือการเคลื่อนไหว</option>
                        <option value="พิการทางจิตใจหรือพฤติกรรม">พิการทางจิตใจหรือพฤติกรรม</option>
                        <option value="พิการทางสติปัญญา">พิการทางสติปัญญา</option>
                        <option value="พิการทางการเรียนรู้">พิการทางการเรียนรู้</option>
                        <option value="พิการทางออทิสติก">พิการทางออทิสติก</option>
                    </select>
                </div>
                <br>
                <br>
                <br>
                <label for="inputLastname" class="col-sm-4 control-label"><h4>เลือกประเภทงานที่ต้องการ</h4></label>
                <div class="btn-group" role="group" aria-label="...">
                    <select name="filter2" class="form-control">
                        <option>เลือกประเภทงานที่ต้องการ</option>
                        <option value="การตลาด"> การตลาด</option>
                        <option value="ประชาสัมพันธ์">ประชาสัมพันธ์</option>
                        <option value="การผลิต">การผลิต</option>
                        <option value="การศึกษา/วิชาการ">การศึกษา/วิชาการ</option>
                        <option value="ขนส่ง">ขนส่ง</option>
                        <option value="ฝ่ายขาย">ฝ่ายขาย</option>
                        <option value="บริการลูกค้า">บริการลูกค้า</option>
                        <option value="ฝ่ายจัดซื้อ">ฝ่ายจัดซื้อ</option>
                        <option value="ท่องเที่ยวและโรงแรม">ท่องเที่ยวและโรงแรม</option>
                        <option value="อาหารและเครื่องดื่ม">อาหารและเครื่องดื่ม</option>
                        <option value="การเงินและธนาคาร">การเงินและธนาคาร</option>
                        <option value="ทรัพยากรบุคคล">ทรัพยากรบุคคล</option>
                        <option value="บริการเฉพาะทาง"> บริการเฉพาะทาง</option>
                        <option value="ัญชี"> บัญชี</option>
                        <option value="หน่วยงานราชการ">หน่วยงานราชการ</option>
                        <option value="โภชนาการ/สุขภาพ/ความงามด้านต่างๆ">
                            โภชนาการ/สุขภาพ/ความงามด้านต่างๆ&nbsp;</option>
                        <option value="ออกแบบ">ออกแบบ</option>
                        <option value="สื่อและโฆษณา">สื่อและโฆษณา</option>
                        <option value="ไอที"> ไอที</option>
                        <option value="อื่นๆ"> อื่นๆ</option>
                    </select>
                </div>
                <br>
                <br>
                <br>
                <label for="inputLastname" class="col-sm-4 control-label"><h4>เลือกจังหวัดที่ต้องการ</h4></label>
                <div class="btn-group " role="group" aria-label="...">
                    <select name="filter3" class="form-control">
                        <option>เลือกจังหวัดที่ต้องการ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </option>
                        <option value="ปริมณฑล">ปริมณฑล</option>
                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                        <option value="ต่างจังหวัด">ต่างจังหวัด</option>

                    </select>
                </div>
                <br>
                <br>
                <br>
                <!--
                <a class="btn btn-primary" type="submit" role="button">ค้นหา</a>
                -->

                <button type="submit" class="btn btn-lg btn-info">ค้นหา</button>
                <br>
            </div>
        </form>
    </div>

</div>


<!-- /.container -->
<script>
    <?php
    if(isset($_POST['filter1']) && isset($_POST['filter1']) && isset($_POST['filter1'])){

    require 'vendor/autoload.php';
    $search_output = "";
        $search_input1 = "";
        $search_input2 = "";
        $search_input3 = "";

            $search_input1 = $_POST['filter1'];
            $search_input2 = $_POST['filter2'];
            $search_input3 = $_POST['filter3'];
                if($search_input1 == ''&&$search_input2 == ''){
                    $js = "function() {
        return this.province ==  '$search_input3' ;}";
                }
                else if($search_input1 == ''&&$search_input3 == ''){
                    $js = "function() {
        return  this.fieldofwork == '$search_input2' ;}";
                }
                else if($search_input2 == ''&&$search_input3 == ''){
                    $js = "function() {
        return this.disabletype == '$search_input1';}";

                }
                else if ($search_input1 == '') {
                    $js = "function() {
    return this.province ==  '$search_input3' && this.fieldofwork == '$search_input2' ;}";

                } else if ($search_input2 == '') {
                    $js = "function() {
    return this.province ==  '$search_input3' && this.disabletype == '$search_input1' ;}";

                } else if ($search_input3 == '') {
                    $js = "function() {
    return this.fieldofwork == '$search_input2' && this.disabletype == '$search_input1';}";

                }else if($search_input1 == ''&&$search_input2 == ''){
                    $js = "function() {
    return this.province ==  '$search_input3' ;}";
                }
                else if($search_input1 == ''&&$search_input3 == ''){
                    $js = "function() {
    return  this.fieldofwork == '$search_input2' ;}";
                 }
                else if($search_input2 == ''&&$search_input3 == ''){
                    $js = "function() {
    return this.disabletype == '$search_input1';}";

                }
                else {
                    $js = "function() {
    return this.province ==  '$search_input3' && this.fieldofwork == '$search_input2' && this.disabletype == '$search_input1';}";
                }
            ?>
</script>
    <h2 align="middle">ผลการค้นหา</h2>
<?php
$db = (new MongoDB\Client)->JobDisable->company;
$cursor = $db->find(array('$where' => $js));


foreach ($cursor as $doc) {

    if ($doc['company_name'] == '') {
        echo 'notfound';
    } else {

        ?>
        <div class="well">
            <div>
                <div>
                    <form action="job1.php" method="post">
                        <h3>เปิดรับสมัครตำแหน่ง<?php echo $doc['position']; ?></h3>
                        <img width="150" align="left" src=<?php echo $doc['pic']; ?> alt="">

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อหน่วยงาน :<?php echo $doc['company_name']; ?>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สถานที่ปฏิบัติงาน :<?php echo $doc['province']; ?>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระดับเงินเดือน :<?php echo $doc['salary']; ?>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวนที่เปิดรับ :<?php echo $doc['employment_rate']; ?>
                        อัตรา
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ประเภทความพิการ :<?php echo $doc['disabletype']; ?>
                        <br>
                        <br>


                        <input type="hidden" name="id" value="<?php echo $doc['_id'] ?>"/>
                        <input type="hidden" name="company" value="<?php echo $doc['company_name'] ?>"/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-lg btn-info">บันทึก</button>
                        <button type="submit" class="btn btn-lg btn-info">ข้อมูล</button>
                    </form>
                </div>
            </div>

            <br>
            <br>


        </div>


        <?php

    }
}

// $count = mysql_num_rows($query);
}

?>


<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
