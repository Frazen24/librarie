<?php
include ("connection.php");
$connect=mysql_connect("localhost","root","") or die("Unable to connect to The Server");
$select_db=mysql_select_db("library")or die("Unable to select to The db");

$strquery="INSERT INTO books SET names= '". $_POST['names']. "', title= '". $_POST['title']. "', author= '". $_POST['author']. "', published_time= '". $_POST['published_time']. "', borrow_time= '". $_POST['borrow_time']. "', return_time= '". $_POST['return_time']. "', kind= '". $_POST['kind']. "' ";
$results=mysql_query ($strquery);
header( 'Location:post.php' ) ;

?>