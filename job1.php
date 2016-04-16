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
<?php
require 'vendor/autoload.php';
use MongoDB\BSON\ObjectID;

$db = (new MongoDB\Client)->JobDisable->company;

$item = $db->findOne(array('_id' => new ObjectId($_POST['id'])));

//echo $_POST['id'];
//echo $_POST['company'];
?>
<body>
<!-- Navigation -->
    <?php include 'header.php';?>
<div class="container">
<div class="row">
        <div class="col-lg-10" >
            <div class="row">
                <br>
                <div class="col-lg-12">
                    <h2 align="center" class="page-header"><?php echo $item['company_name'] ?></h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div  class="container col-lg-12">
                                    <form role="form">

                                        <img width="450" style="margin: 0 auto; display:block;" src=<?php echo $item['pic'] ?> /><p>
                                        <div class="col-lg-1"></div>
                                            <div class="col-lg-10">
												<h3>รายละเอียดงาน</h3><br>
                                                <?php echo $item['description'] ?>
												<br>
												<br>
												<h3>คุณสมบัติผู้สมัคร</h3><br>
                                                <?php echo $item['property'] ?>
												<br>
												<br>
												<h3>เอกสารหลักฐานที่ใช้ในการสมัคร</h3><br>
                                                <?php echo nl2br($item['document']) ?>
												<br><br>

												<h3>ประสบการณ์การทำงาน</h3><br>
                                                <?php echo nl2br($item['experience']) ?>
												<br><br>

												<h3>ข้อมูลติดต่อ</h3><br>
                                                <?php echo nl2br($item['contact']) ?>
                                                <br><br>
                                            </div> </p>
                                        <br>
										</form>


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
