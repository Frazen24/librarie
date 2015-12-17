<?php

$conn= mysql_connect("localhost","root","");
mysql_select_db("library",$conn);
$sql= mysql_query("Select * From books");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Caritas Library</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onload="MM_preloadImages('images/signin.jpg')">
<div id="header">
		<div>
			<div class="logo">
				<a href="home.php">Caritas library </a>			</div>
		
		</div>
</div>
	
<div style="position:absolute; left: 77px; top: 159px; width: 917px; height: 333px;">
  <table width="913" border="0" align="center">
    <tr>
     
      <td><div align="center"><strong>Names</strong></div></td>
      <td><div align="center"><strong>Book</strong></div></td>
      <td><div align="center"><strong>Author</strong></div></td>
      <td><div align="center"><strong>Published</strong></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"><strong>Borrow Time </strong></div></td>
      <td><div align="center"><strong>Return Date </strong></div></td>
      <td><div align="center"><strong>Kind</strong></div></td>
      <td><strong>Update</strong></td>
      <td><strong>Delete</strong></td>
    </tr>
	 <?php
			
			
				
			$result= mysql_query("SELECT * FROM books");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";
				echo"<td><font color='black'>" .$test['names']."</font></td>";
				echo"<td><font color='black'>" .$test['title']."</font></td>";
				echo"<td><font color='black'>" .$test['author']."</font></td>";
				echo"<td><font color='black'>". $test['published_time']. "</font></td>";
				echo"<td><font color='black'>". $test['type']. "</font></td>";
				echo"<td><font color='black'>". $test['borrow_time']. "</font></td>";
				echo"<td><font color='black'>" .$test['return_time']."</font></td>";
				echo"<td><font color='black'>" .$test['kind']."</font></td>";
								echo"<td> <a href ='update.php?id=$id'>Update</a>";
				echo"<td> <a href ='del.php?id=$id'>Delete</a>";
									
				echo "</tr>";
			}
			mysql_close($conn);
			?>
  </table>
</div>
	
	
	

</body>
</html>
