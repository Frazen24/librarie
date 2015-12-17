<?php
 $search= mysql_connect("localhost", "root", "")or die("Cannot connect to the Server");
mysql_select_db("library", $search)or die("cannot connect to the Database");
//Start to check the Submittion button
        if(isset($_POST['login']))
      {
        //Verifying the Field in the Database 
        //Posting them
		

$sql=mysql_query("select * from login where username='$username' AND password='$password'");
    if(mysql_num_rows($sql)==1){
    $report= "Login failed,Username and Password, Try Again!";
    }
      else{
      $row = mysql_fetch_array($sql);
      $_SESSION['login_username'] == $row[username];
      $_SESSION['login_password'] == $row[password];

      $report=header("location: home.php");
}}
?>