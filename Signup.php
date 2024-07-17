<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="regis.css"/>
<script src="reg.js" type="text/javascript"></script>
<title>sign up</title>
</head>
<body>
<?php include 'connect.php'; ?>
<div id="back" align="center">
    <form id="frm" action="configreg.php" method="post" class="reg">
        <h3 id="top">Owshadham Registration</h3>
        <label class="lbl"><b>First Name</b></label><br>
        <input type="text" id="fname" name="fname" class="wdth" placeholder="Enter Your First Name" required="required"><br><br>
        <label class="lbl"><b>Last Name</b></label><br>
        <input type="text" id="lname" name="lname" class="wdth" placeholder="Enter Your Last Name" required="required"><br><br>
        <label class="lbl"><b>User Name</b></label><br>
        <input type="text" id="Uname" name="Uname" class="wdth" placeholder="Enter Your User Name" required="required"><br><br>
        <label class="lbl"><b>Mobile Number</b></label><br>
        <input type="number" id="Mnumber" name="Mnumber" class="wdth" required="required" placeholder="Enter Valid Mobile Number"><br><br>
        <label for="email" class="lbl"><b>Email</b></label><br>
        <input type="text" placeholder="Enter Email" name="myEmail" class="wdth" id="myEmail" required><br><br>
        <label class="lbl"><b>Password</b></label><br>
        <input type="password" id="pwrd" name="pwrd" class="wdth" placeholder="Enter Password" required="required"><br><br>
        <label class="lbl">Accept privacy Policy and Terms</label><br>
        <input type="checkbox" id="cb" value="true" onclick="enableButton()"><br>
        <p id="text" style="display:none"></p><br>
        <input type="submit" id="btn" name="sign" onclick="checkpassword()" value="Sign Up" disabled>
    </form>
</div>
</body>
</html>
