<?php
$servername="localhost";
$username="root";
$password="";
$databasename="library ";
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
	
<div style="position:absolute; left: 187px; top: 74px; width: 744px; height: 338px;">
	  <div align="center" style="font:'Times New Roman', Times, serif"><strong>Sign In If You Have An Account </strong></div>
	  <div style="position:absolute; left: 185px; top: 50px;">
	  <form action="login.php" method="post">
	    <table width="440" border="0" align="center">
          <tr>
            <td width="125"><div align="right">Username:</div></td>
            <td width="305"><label>
              <input name="login_username" type="text" id="login_username" size="40" />
            </label></td>
          </tr>
          <tr>
            <td><div align="right">Password:</div></td>
            <td><input name="login_password" type="password" id="login_password" size="40" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input name="login" type="submit" id="login" value="Login" />
            </label></td>
          </tr>
        </table>
	  
	  </form>
	  </div>
	    
	  <div style="position:absolute; left: 258px; top: 260px; width: 375px; height: 43px;">
	    <div align="center"><strong>Sign In If You Have An Account	  </strong></div>
	  </div>
	  
	  <div align="center" style="position:absolute; left: 309px; top: 276px;" >
	    <div style="position:absolute; left: -120px; top: 71px;">
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
                <td>&nbsp;</td>
                <td><label>
                  <input type="submit" name="Submit22" value="Create Account" />
                </label></td>
              </tr>
            </table>
          </form>
        </div>
	</div>
</div>
	
	<div style="position:absolute; left: 126px; top: 215px; width: 237px; height: 278px;"><img src="images/box-of-icons.png" alt="Icon Welcome" width="218" height="300" /> </div>
	
	
	

</body>
</html>
