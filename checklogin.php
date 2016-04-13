<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
	<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<?php 
	$username = $_POST["username"];
	echo $username;
	$password = $_POST["password"];
	echo $password;
	if($username==""){
		echo "fill username";
	}
	else if($password==""){
		echo "fill password";
	}
	else{
		$servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
		$sql = "SELECT * FROM member2 WHERE username = '".$_POST["username"]."'";
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);

		if($objResult["password"] != $password || $objResult["username"] != $username){
		 echo "Wrong user/password";
		/*	echo "
 				<html>
   					<meta http-equiv=\"Refresh\" content=\"3; URL=test.php\">
 				</html>
 			"; 
		*/}
		else{
			echo "success";

		}		
	}
?>



</body>
</html>