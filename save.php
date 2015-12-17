<?php
include ("connection.php");
$connect=mysql_connect("localhost","root","") or die("Unable to connect to The Server");
$select_db=mysql_select_db("library")or die("Unable to select to The db");

$strquery="INSERT INTO login SET names= '". $_POST['names']. "', username= '". $_POST['username']. "', password= '". $_POST['password']. "', privilege= '". $_POST['privilege']. "'";
$results=mysql_query ($strquery);
header( 'Location:index.php' ) ;

?>
