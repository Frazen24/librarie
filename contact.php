<?php
$servername="localhost";
$username="root";
$password="";
$databasename="library ";
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Caritas Lib-Contact Us</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div class="logo">
				<a href="home.php">Caritas library </a>			</div>
		<ul id="navigation">
				<li>
					<a href="home.php">Home</a>
				</li>
				<li>
					<a href="features.php">Features</a>
				</li>
				<li>
					<a href="post.php">Borrow Book</a>
				</li>
				
				<li>
				<a href="about.php">About</a>
				</li>
				<li class="active">
					<a href="contact.php">Contact</a>
				</li>
				
			</ul>
		</div>
	</div>
	</div>
	<div id="contents">
		<div class="section">
			<h1>Contact</h1>
			<p>
				You can contact us whenever you want and you will get the feedback in a very short time so what you have to do is sending us a message in the fields provided down aboutabything you want or a book that you may nedd to request. </p>
			<form action="contact_msg.php" method="post" class="message">
				<input name="name" type="text" id="name" onFocus="this.select();" onMouseOut="javascript:return false;" value="Name"/>
				<input name="email" type="text" id="email" onFocus="this.select();" onMouseOut="javascript:return false;" value="Email"/>
				<input name="subject" type="text" id="subject" onFocus="this.select();" onMouseOut="javascript:return false;" value="Subject"/>
				<textarea name="content" id="content"></textarea>
				<input type="submit" value="Send"/>
			</form>
		</div>
		<div class="section contact">
			<p>
				For Inquiries Please Call: <span>0785857225</span>
			</p>
			<p>
				Or you can visit us at: <span>Caritas Library <br>
				 Avenue 10, Street 2 Town, Kigali, 0012 House </span>
			</p>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a><a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a><a href="http://www.freewebsitetemplates.com/misc/contact/" target="_blank" class="tumbler"></a>
			</div>
			<p>
				© 2015 <a href="index.html">Caritas</a>. All Rights Reserved.			</p>
		</div>
	</div>
</body>
</html>