<?php
include ("connection.php");
$connect=mysql_connect("localhost","root","") or die("Unable to connect to The Server");
$select_db=mysql_select_db("library")or die("Unable to select to The db");
	$id =$_REQUEST['id'];
	
	
	// sending query
	mysql_query("DELETE FROM books WHERE id = '$id'")
	or die(mysql_error());  	
	
	echo'Delete successfully Done!<br>';
	echo'<a href="trans.php">Back Home</a>';
?>