<?php 
session_start(); 
require "fixpost.php";
require "vendor/autoload.php";
//save to database
$db = new MongoDB\Client();
$collection = $db->JobDisable->savejob;
$res=0;
function checkNum($result) {
    if ($result['company_name'] != '') {
        echo 'already added';
        throw new Exception("งานนี้ได้ถูกเพิ่มเข้าไปแล้ว");
    }
    return true;
}
try{//"beam@hot.com"
$result = $collection->findOne(array('email'=>$_SESSION["email"],'_id' => $_POST['id'],'company_name'=>$_POST["company"],
    'position'=>$_POST["position"],'fieldofwork'=>$_POST["fieldofwork"]));
    checkNum($result);
    //"beam@hot.com"
    $collection->insertOne(array('email' => $_SESSION["email"], '_id' => $_POST['id'], 'company_name' => $_POST["company"],
        'position' => $_POST["position"], 'fieldofwork' => $_POST["fieldofwork"]));
    $res=1;
}
catch(Exception $e) {
    echo "งานนี้ได้ถูกเพิ่มเข้าไปแล้ว";
}
?>
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
                    <br>
                    <?php
                    if ($res == 1) {
                        ?>
                        <h3>เพิ่มข้อมูลสำเร็จ!</h3>
                        <center><a href="save.php"><button class='btn btn-lg btn-info'>ดูงานที่บันทึก</button></a></center>
                        <?php
                    } else {
                        ?>
                        <h3>เพิ่มข้อมูลไม่สำเร็จ<br>งานนี้ได้ถูกเพิ่มเข้าไปแล้ว</h3>
                        <center><a href="search.php"><button class='btn btn-lg btn-info'>กลับไปสู่หน้าค้นหางาน</button></a></center>
                        <?php
                    }
                    ?>
                </div>
                <!-- /.col-lg-12 -->
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
