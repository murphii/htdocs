<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Navigation -->
    <?php include 'header.php';?>
<div class="container">
<div class="row">
        <div class="col-lg-10" >
            <div class="row">
                <br>
                <div class="col-lg-12">
                    <h1 align="center" class="page-header">บริษัท อิตัลไทยอุตสาหกรรม จำกัด สาขา สำนักงานใหญ่</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">

                                            <img align="middle" src="img/search_p1.jpg" ></img>



                                        <p>
												<h3>รายละเอียดงาน</h3><br>
												ตำแหน่ง ผลิตทั่วไป 3 อัตรา งานประจำ อัตราค่าจ้าง เดือนละ 9,000 บาท สวัสดิการ ประกันสังคม ค่าอาหาร เงินช่วยเหลือการศึกษาบุตร เงินช่วยเหลือกรณีมีบุตร งานกีฬาสี งานเลี้ยงครบรอบปีบริษัท แพทย์และพยาบาลประจำ การฝึกอบรมในบริษัท การฝึกอบรมนอกบริษัท วันหยุดพักผ่อน เงินช่วยเหลือการเสียชีวิต เงินกู้ยืม ของขวัญวันปีใหม่ กองทุนเงินทดแทน ประกันชีวิต โบนัสประจำปี staff party ชุดยูนิฟอร์ม ค่าเดินทาง เบี้ยเลี้ยงออกต่างจังหวัด รถรับส่งประจำทาง เบี้ยขยัน และ ของขวัญวันเกิด 
												หน่วยงานอนามัย
												<br>
												<br>
												<h3>คุณสมบัติผู้สมัคร</h3><br>
												พิการทางการได้ยินหรือสื่อความหมาย พิการทางร่างกายหรือการเคลื่อนไหว หรือ พิการทางจิตใจหรือพฤติกรรม ไม่จำกัดเพศ อายุ 20 ปี แต่ไม่เกิน 40 ปี
												<br>
												<br>
												<h3>เอกสารหลักฐานที่ใช้ในการสมัคร</h3><br>
												- สำเนาบัตรประชาชน<br>
												- สำเนาทะเบียนบ้าน<br>
												- สำเนาวุฒิการศึกษา (ถ้ามี)<br>
												- สมุดประจำตัวคนพิการ<br>
												- บัตรประจำตัวคนพิการ<br>
												<br><br>

												<h3>การรับสมัคร</h3><br>
												-<br>
												<br><br>

												<h3>สิ่งอำนวยความสะดวก</h3><br>
												-<br>
												<br><br>

												<h3>ข้อมูลติดต่อ</h3><br>
												คุณนายกลยุทธ์ ศรีนิลปกรณ์<br>
												หน่วยงาน : บ. เอส แอนด์ พี ซินดิเคท จำกัด (มหาชน) สาขา โรงงานลาดกระบัง<br>
												โทรศัพท์ : 027394494-6<br>
												อีเมล : konlayut@snpfood.com<br> </p>
                                        <br>
										<button type="reset" class="btn btn-default">สมัครงาน</button>
                                        <button type="reset" class="btn btn-default">บันทึกงาน</button> </form>
                                        <?php
                                        require 'vendor/autoload.php';
                                        use MongoDB\BSON\ObjectID;

                                        $db = (new MongoDB\Client)->JobDisable->company;

                                        $item = $db->findOne(array('_id' => new ObjectId($_POST['id'])));
                                        echo $item['company_name'];
                                        print '<pre>';
                                        foreach ($cursor as $doc) {
                                            echo 'hi';
                                            echo sprintf("name: %s, Type: %s%s", $doc['company_name'], $doc['disabletype'], PHP_EOL);

                                            //var_dump($doc);
                                        }
                                        print '<pre>';

                                        //echo $_POST['id'];
                                        //echo $_POST['company'];
                                        ?>

										</div>
                                        
                                        
                                        

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>



    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
