<?php
include ("connection.php");
$connect=mysql_connect("localhost","root","") or die("Unable to connect to The Server");
$select_db=mysql_select_db("library")or die("Unable to select to The db");

$strquery="INSERT INTO emails SET name= '". $_POST['name']. "', email= '". $_POST['email']. "', subject= '". $_POST['subject']. "', content= '". $_POST['content']. "'";
$results=mysql_query ($strquery);
header( 'Location:contact.php' ) ;

?>
