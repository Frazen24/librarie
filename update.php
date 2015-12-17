<?php
include ("connection.php");
$connect=mysql_connect("localhost","root","") or die("Unable to connect to The Server");
$select_db=mysql_select_db("library")or die("Unable to select to The db");
$id = $_REQUEST['id'];

$result = mysql_query("SELECT * FROM books WHERE id  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id= $test['id'] ;
				$names= $test['names'] ;	
			    $title= $test['title'] ;			
				$author= $test['author'] ;
				$published_time= $test['published_time'] ;
				$borrow_time= $test['borrow_time'] ;
				$return_time= $test['return_time'] ;
				$kind= $test['kind'] ;
				
				
if(isset($_POST['Submit']))
{	
               	$names= $test['names'] ;
				$title= $test['title'] ;	
			    $author= $test['author'] ;			
				$published_time= $test['published_time'] ;
				$borrow_time= $test['borrow_time'] ;
				$return_time= $test['return_time'] ;
				$kind= $test['kind'] ;
				
	

mysql_query("UPDATE books SET names ='$names', title ='$title', author ='$author', published_time ='$published_time', borrow_time ='&borrow_time',return_time ='$return_time', kind ='$kind' WHERE id = '$id'") or die(mysql_error()); 
echo "Book Successfully Updated!";


}
//mysql_close($conn);
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
<div id="header">
		<div>
			<div class="logo"></div>
		
		</div>
</div>
	
<div class="post">
		  <h1 align="center"><em>Update The Book Here </em></h1>
			<p>
			<div>
			  <div align="center" style="background-color:#999999"><strong>Order A Book - Register A Book - Bring Back And Register A Book </strong></div>
			</div>
			</p>
			<form name="form1" method="post" action="">
			  <table width="502" border="0" align="center">
                <tr>
                  <td width="146"><strong>Names:</strong></td>
                  <td width="346"><label>
                    <input name="names" type="text" id="names" value="<?php echo $names ?>" size="40" />
                  </label></td>
                </tr>
                <tr>
                  <td><strong>Book Title:</strong></td>
                  <td><input name="title" type="text" id="title" value="<?php echo $title ?>" size="40" /></td>
                </tr>
                <tr>
                  <td><strong>Author:</strong></td>
                  <td><input name="author" type="text" id="author" value="<?php echo $author ?>" size="40" /></td>
                </tr>
                <tr>
                  <td><strong>Published Date: </strong></td>
                  <td><input name="published_date" type="text" id="published_date" value="<?php echo $published_time ?>" size="40" /></td>
                </tr>

                <tr>
                  <td><strong>Borrow Time: </strong></td>
                  <td><input name="borrow_time" type="text" id="borrow_time" value="<?php echo $borrow_time?>" size="40" /></td>
                </tr>
                <tr>
                  <td><strong>Return Date: </strong></td>
                  <td><input name="return_date" type="text" id="return_date" value="<?php echo $return_time ?>" size="40" /></td>
                </tr>
                <tr>
                  <td><strong>Use kind: </strong></td>
                  <td><label>
                  <input name="kind" type="text" id="kind" value="<?php echo $kind?>" size="20" />
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                    <input type="submit" name="Submit" value="Update" />
                  </label></td>
                </tr>
              </table>
			</form>
			<p>&nbsp;</p>
</div>
	</div>
	

</body>
</html>
