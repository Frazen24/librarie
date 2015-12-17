<?php
$servername="localhost";
$username="root";
$password="";
$databasename="library ";
?>

<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Caritas Library-Books Room</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
<!--
.style1 {
	color: #990000;
	font-style: italic;
}
-->
    </style>
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
		<div class="post">
		  <h1 align="center"><em>Register The Book Here </em></h1>
			<p>
			<div>
			  <div align="center" style="background-color:#999999"><strong>Order A Book - Register A Book - Bring Back And Register A Book </strong></div>
			</div>
			<br><br>
			<div align="center" class="style1">You May Also Make Some transactions on The Booked Books <a href="trans.php"><strong>Here</strong></a>
	          </p>
    		  </div>
			<form name="form1" method="post" action="post_new.php">
			  <table width="502" border="0" align="center">
                <tr>
                  <td width="146"><strong>Names:</strong></td>
                  <td width="346"><label>
                    <input name="names" type="text" id="names" size="40">
                  </label></td>
                </tr>
                <tr>
                  <td><strong>Book Title:</strong></td>
                  <td><input name="title" type="text" id="title" size="40"></td>
                </tr>
                <tr>
                  <td><strong>Author:</strong></td>
                  <td><input name="author" type="text" id="author" size="40"></td>
                </tr>
                <tr>
                  <td><strong>Published Date: </strong></td>
                  <td><input name="published_date" type="text" id="published_date" size="40"></td>
                </tr>
                <tr>
                  <td><strong>Type:</strong></td>
                  <td><label>
                    <select name="type" id="type">
                      <option value="IT">IT</option>
                      <option value="Business And Entrepreneurship">Business And Entrepreneurship</option>
                      <option value="Swahili">Swahili</option>
                      <option value="French">French</option>
                      <option value="Novel">Novel</option>
                      <option value="History">History</option>
                      <option value="Geography">Geography</option>
                      <option value="Statistics">Statistics</option>
                      <option value="Economie">Economie</option>
                  </select>
                  </label></td>
                </tr>
                <tr>
                  <td><strong>Borrow Time: </strong></td>
                  <td><input name="borrow_time" type="text" id="borrow_time" size="40"></td>
                </tr>
                <tr>
                  <td><strong>Return Date: </strong></td>
                  <td><input name="return_date" type="text" id="return_date" size="40"></td>
                </tr>
                <tr>
                  <td><strong>Use kind: </strong></td>
                  <td><label>
                    <select name="user_kind" id="user_kind">
                      <option value="Offline">Offline</option>
                      <option value="Online">Online</option>
                  </select>
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                    <input type="submit" name="Submit" value="Order Book">
                  </label></td>
                </tr>
              </table>
          </form>
			<p>&nbsp;</p>
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