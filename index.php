<?php
echo '
<html>
<head>
<title>Online Geek Test-Check your Geekiness</title>

<script type="text/javascript" language="javascript" src="validate.js"></script>
<link rel="stylesheet" type="text/css" href="mystyle.css">

</head>
<body>

<h2>Project:Online Geek Test<br>Project members:-Arihant,Azhar,Omkar,Yash</h2>
<img src="geek.jpg" alt="geek" style="width:290px;height:220px" "><br>
<form name="frmregister"action="registerAction.php" method="post" onSubmit="return validate();" class="elegant-aero">
            <input class="send_btn" type="submit" value="Submit" alt="Submit" title="Submit" />
				
				<input class="send_btn" type="reset" value="Reset" alt="Reset" title="Reset" />
    </label>    
</form>
</body>
</html>';
?>
