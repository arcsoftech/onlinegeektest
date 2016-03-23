
<html>
<head>
<title>Registration Form for geek test</title>
<link href="mystyle2.css" rel="stylesheet" type="text/css">
</head>
<body>
<img src="geek.jpg" alt="geek" style="width:290px;height:220px" "><br>
<?php
include "dbConfig.php";
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$address=$_POST["address"];
$email=$_POST["email"];
$sex=$_POST["sex"];
$qualification=$_POST["qualification"];
echo "<h1>Thank you for registration<h1>"; 
$sql="INSERT INTO user_details(first_name,last_name,address,email,sex,qualification)
VALUES ('$first_name','$last_name','$address','$email','$sex','$qualification')";
mysql_query($sql) or die(mysql_error());
?>
Click on go to start your test<a href="geek_quiz.php">GO--></a>
</body>
</html>