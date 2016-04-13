<?php
session_start();
ob_start();
?>
<!doctype html>
<html>
<head>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
	<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body>
<?php

$username=$_POST[username];
//ประกาศตัวแปรชื่อusernameโดยการรับค่ามาจากกล่องusernameที่หน้าLogin
$password=$_POST[password];
//ประกาศตัวแปรชื่อpasswordโดยการรับค่ามาจากกล่องpasswordที่หน้าLogin
if($username==""){//ถ้ายังไม่ได้กรอกข้อมูลที่ชื่อผู้ใช้ให้ทำงานดังต่อไปนี้
echo"คุณยังไม่ได้กรอกชื่อผู้ใช้ครับ";
}
elseif($password==""){//ถ้ายังไม่ได้กรอกรหัสผ่านให้ทำงานดังต่อไปนี้
echo "คุณยังไม่ได้กรอกรหัสผ่านครับ";
}
else{//ถ้ากรอกข้อมูลทั้งหมดแล้วให้ทำงานดังนี้
mysql_connect("localhost","root","root");
mysql_select_db("Senior_Project");//เรียกfunctionสำหรับติดต่อฐานข้อมูลจากหน้าconnect.phpขึ้นมา
mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci';");
$strSQL="SELECT * FROM Staff WHERE Username ='$username' and Password = '$password'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{		echo "Username and/or Password Incorrect!";
			echo "
 				<html>
   					<meta http-equiv=\"Refresh\" content=\"1; URL=index.php\">
 				</html>
 			";
	}
	else
	{		
			$_SESSION["Username"] = $objResult["Username"];
 			$_SESSION["Staff_ID"] = $objResult["Staff_ID"];
			$_SESSION["Name"] = $objResult["Name"];
			session_write_close();
			echo "Login Successfully";
			echo "
 				<html>
   					<meta http-equiv=\"Refresh\" content=\"1; URL=main_page.php\">
 				</html>
 			"; 
			

	}
}

?>

</body>
</html>