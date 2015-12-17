<?php
$servername="localhost";
$username="root";
$password="";
$databasename="library ";
?>
<?php
include ("connection.php");
$connect=mysql_connect("localhost","root","") or die("Unable to connect to The Server");
$select_db=mysql_select_db("library")or die("Unable to select to The db");

$strquery="INSERT INTO login SET names= '". $_POST['names']. "', username= '". $_POST['username']. "', password= '". $_POST['password']. "', privilege= '". $_POST['privilege']. "', sex= '". $_POST['sex']. "' ";
$results=mysql_query ($strquery);
header( 'Location:index.php' ) ;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Create Account</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<div id="header">
		<div>
			<div class="logo">
				<a href="home.php">Caritas library </a>			</div>
		
		</div>
</div>
	
<div style="position:absolute; left: 187px; top: 74px; width: 744px; height: 338px;">
	  <div align="center" style="font:'Times New Roman', Times, serif"><strong>Sign In If You Have An Account </strong></div>
	  <div style="position:absolute; left: 185px; top: 50px;">
	  <form action="save.php" method="post">
	    <table width="440" border="0" align="center">
          <tr>
            <td width="125"><div align="right">Names:</div></td>
            <td width="305"><label>
              <input name="names" type="text" id="names" size="40" />
            </label></td>
          </tr>
          <tr>
            <td><div align="right">Username::</div></td>
            <td><input name="username" type="text" id="username" size="40" /></td>
          </tr>
          <tr>
            <td><div align="right">Password</div></td>
            <td><label>
              <input name="password" type="text" id="password" size="40" />
            </label></td>
          </tr>
          <tr>
            <td><div align="right">Privilege</div></td>
            <td><input name="privilege" type="text" id="privilege" size="40" /></td>
          </tr>
          <tr>
            <td><div align="right">Sex:</div></td>
            <td><input name="sex" type="text" id="sex" size="40" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input type="submit" name="Submit2" value="Create Account" />
            </label></td>
          </tr>
        </table>
	  
	  </form>
	  </div>
	    
	  
	  
</div>
	<div style="position:absolute; left: 126px; top: 215px; width: 237px; height: 278px;"><img src="images/box-of-icons.png" alt="Icon Welcome" width="218" height="300" /> </div>
	
	
	
<a href="home.php"></a>
</body>
</html>
