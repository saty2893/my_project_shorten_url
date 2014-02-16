<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>shorten your urls</title>
<link href="shorten.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div id="wrapper">
    	<div id="header">SHORTEN YOUR URLS</div>
        <div id="block">
        <p style="font-size:16px;">Shorten your URL, make it suspicious</p><br/>
        	<?php 
		include 'connect_and_generate.php';
	?>
	<div id="block2">
 	<p align="center">Your URL: <strong style="color:#090"><?php echo $_POST['url']; ?></strong></p>
 	<p align="center">&nbsp;</p>
 	<p align="center">Has been shortened to: <strong style="color:#090"><?php echo geturl($_POST['url']); ?></strong></p>
	<p align="center">Want to shorten any other url <a href="index.php" style="color:red;text-decoration:none;">Click here</a></p>        
</div></div>
        <div id="footer">Created by Satyendra. Student@IITR</div>
    </div>

</body>
</html>