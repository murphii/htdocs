
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
	<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php include 'header-company.php';?>
<br>

<div class="container">
<div class="col-lg-12 well">
	<div class="row">
    	<ul class="nav nav-tabs">
 		<li role="presentation"><a href="companyregister-1.php">ข้อมูลส่วนตัว</a></li>
  		<li role="presentation" class="active"><a href="companyregister-2.php">ข้อมูลผู้ประกอบการ</a></li>
		</ul>
		<br><br>
       <div class="col-sm-7 form-group">
         ชื่อบริษัท/หน่วยงาน/ผู้ประกอบการ : <input name="" type="text">
         <br><br>
         สาขา : <input name="" type="text">
         <br><br>
         ประเภทหน่วยงาน :  <select name="">
        				<option>เลือกประเภทหน่วยงาน</option>
                        <option>รัฐบาล</option>
                      	<option>เอกชน</option>
        			</select>
         <br><br>
        ประเภทกิจการ :  <select name="">
        				<option>เลือกประเภทกิจการ</option>
                        <option>ห้างหุ้นส่วน</option>
                      	<option>บริษัทจำกัด</option>
                        <option>บริษัทมหาชนจำกัด</option>
                        <option>องค์กรธุรกิจจัดตั้งหรือจดทะเบียนภายใต้กฎหมายเฉพาะ</option>
                        <option>กิจการเจ้าของคนเดียว</option>
        			</select>
         <br><br>
         โทรศัพท์ : <input name="" type="tel">
         <br><br>
         โทรสาร : <input name="" type="tel">
         <br><br>
         ที่อยู่ : <input name="" type="text">
         <br><br>
         จังหวัด : <input name="" type="text">
         <br><br>

         
         
         <a href="reg-completed.php"><button type="submit">บันทึก</button></a>
		 </div>
         <br><br><br><br><br>
         
</div>
</div>
</div>
</body>
</html>