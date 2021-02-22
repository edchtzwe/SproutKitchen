<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!--Chong Tze Wei @ Edmund; 7440820@gmail.com; https://github.com/edchtzwe; https://au.linkedin.com/in/chong-tze-wei-7b7564103;-->
<HTML><HEAD><TITLE>Sprout Kitchens</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<link rel="stylesheet" type="text/css" href="style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</HEAD>
<BODY>	
<?php
	include_once("header.php");
    if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
    $_SESSION['page'] = "landing_page.php";    
?>
<DIV class="row">
	<DIV class="col-sm-4"><!--Left Side-Bar--></DIV>
	<DIV class="col-sm-4">
		<!--This is the form that is to be submitted to the signup processing back-end-->
		<P>
        <FIELDSET>
        <LEGEND>Sign Up</LEGEND>
		<FORM method=post action="signup_process.php">
            <DIV class="form-group col-lg-10">
                <P><INPUT required name=signup_username class="form-control" placeholder="username"></p> 
                <P><INPUT required type=password class="form-control" name=signup_password placeholder="password"></P>
                <P><INPUT required pattern="[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-z]{3}" name=email class="form-control" placeholder="email"></P>			                
                <P>
                <DIV class="row">
                <INPUT type=submit class="btn btn-primary col-lg-12" value="Sign Up" name=signup>
                </DIV>
                </P>
            </DIV>
		</FORM>
        </FIELDSET>
	</DIV>
	<DIV class="col-sm-4"><!--Right Side-Bar--></DIV>
</DIV>
</BODY>
</HTML>