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
<!-- hide from old browsers
function Linkup()
{
var number = document.DD.DDM.selectedIndex;
location.href = document.DD.DDM.options[number].value;
}
//-->
</SCRIPT> 
<body>

    <!-- Navigation -->
    <?php include 'header-company.php';?>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">
			<form name="DD">
						<br>
			<h1>ค้นหาคนพิการ</h1>
						<br>
						<br>
							<div class="form-group">
						<label for="inputFirstname" class="col-sm-4 control-label"><h4>เลือกประเภทความพิการ </h4></label>
						<div class="btn-group" role="group" aria-label="..."><select name="DDM" class="form-control">
						<option>เลือกประเภทความพิการ</option>
                        <option value="http://localhost/resultdisable1.php" >พิการทางการเห็น</option>
                      	<option value="http://localhost/resultdisable1.php">พิการทางการได้ยินหรือสื่อความหมาย&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                        <option value="http://localhost/resultdisable1.php">พิการทางร่างกายหรือการเคลื่อนไหว</option>
                        <option value="http://localhost/resultdisable1.php">พิการทางจิตใจหรือพฤติกรรม</option>
                        <option value="http://localhost/resultdisable1.php">พิการทางสติปัญญา</option>
                        <option value="http://localhost/resultdisable1.php">พิการทางการเรียนรู้</option>
                        <option value="http://localhost/resultdisable1.php">พิการทางออทิสติก</option> 
						  </select>
						  </div>
						<br>
						<br>
						<br>
						<label for="inputLastname" class="col-sm-4 control-label"><h4>เลือกประเภทงานที่ต้องการ</h4></label>
						<div class="btn-group" role="group" aria-label="...">
						<select name="DDM" class="form-control">
						<option>เลือกประเภทงานที่ต้องการ</option>
                        <option value="http://localhost/job1.php"> การตลาด</option>
                      	<option value="http://localhost/job2.php">ประชาสัมพันธ์ </option>
                        <option>การผลิต</option>
						<option>การศึกษา/วิชาการ </option>
						<option>ขนส่ง </option>
						<option> ฝ่ายขาย </option>
						<option>  บริการลูกค้า</option>
						<option> ฝ่ายจัดซื้อ</option>
						<option>ท่องเที่ยวและโรงแรม </option>
						<option>อาหารและเครื่องดื่ม</option>
						<option>การเงินและธนาคาร </option>
						<option>ทรัพยากรบุคคล </option>
						<option> บริการเฉพาะทาง</option>
						<option> บัญชี </option>
						<option> หน่วยงานราชการ </option>
						<option> โภชนาการ/สุขภาพ/ความงามด้านต่างๆ&nbsp;&nbsp;&nbsp;</option>
						<option>ออกแบบ </option>
						<option>สื่อและโฆษณา </option>
						<option>  ไอที </option>
						<option> อื่นๆ </option>
                        
						  </select>
						  </div>
						<br>
						<br>
						<br>
						<label for="inputLastname" class="col-sm-4 control-label"><h4>เลือกจังหวัดที่ต้องการ</h4></label>
						<div class="btn-group " role="group" aria-label="..."><select  class="form-control">
						<option>เลือกจังหวัดที่ต้องการ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </option>
						<option>ปริมณฑล</option>
                        <option value="http://localhost/job2.php" >กรุงเทพมหานคร</option>
                      	<option>ต่างจังหวัด</option>
                        
						  </select>
						  </div>
						<br>
					<br>
					<br>
					
					<a class="btn btn-primary" onClick = "Linkup(this.form)" role="button">ค้นหา</a>
					
					  </div>
					  </form>
                </div>
				
            </div>

       
        <!-- /.container -->
		
     
      <footer>
            
        <p class="pull-right"><a href="#">Back to top</a></p>
        
      </footer>

    </div><!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
