<!DOCTYPE html>

<html lang="en">

<head>
    <style type="text1/css">
        p.margin {margin: 4cm 4cm 3cm 4cm}
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
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

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
<?php include 'header.php';?>
<br><br><br>
<!-- /.container -->
    <h2 align="middle">งานที่บันทึก</h2>
    <?php
    session_start();
    require 'vendor/autoload.php';
    $db = (new MongoDB\Client)->JobDisable->savejob;
    $cursor = $db->find(array('email' => $_SESSION["email"]));
    //"beam@hot.com"
    foreach ($cursor as $doc) {

        if ($doc['email'] == '') {
            echo 'Not Found';
        } else {

            ?>
            <div class="well" >
                <div >
                    <div>
                        <form  action="job1.php" method="post">
                            <h3><?php echo $doc['position']; ?></h3>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อหน่วยงาน : <?php echo $doc['company_name']; ?>
                            <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ประเภทงาน : <?php echo $doc['fieldofwork']; ?>
                            <br><br>
                            <input type="hidden" name="id" value="<?php echo $doc['_id']?>"/>
                            <input type="hidden" name="company" value="<?php echo $doc['company_name']?>"/>
                            <button type="submit" class="btn btn-lg btn-info">ข้อมูล</button><br><br>
                        </form>
                        <form action='savedelete.php' method='post'>
                            <input type="hidden" name="id" value="<?php echo $doc['_id']?>"/>
                            <button type='submit' class='btn btn-lg btn-danger'>ลบ</button>
                        </form>
                    </div>
                </div>


            </div>


            <?php

        }
    }


?>


<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
