<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>


<title>Login as Admin</title>
<link rel="stylesheet" href="css/stylex.css">
<style>
body 
{
  background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-smart-robot-arm-advertising-background-backgroundrobotblue-backgrounddark-backgroundlightlight-image_68405.jpg' );
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
.bigbox{
top: 50%;
  left: 50%;
  position: absolute;
  margin: 0;
  transform: translate(-50%, -50%);
      line-height: 1.34;
}
.table {
background-color: #fff;
padding: 20px;
border: 1px solid #ddd;
}
.table {
  border-spacing: 0;
  width: 400px;
  border: 1px solid #ddd;
}
.headtext{
  text-align: center;
  text-decoration: bold;
  font-size: 25px;
  font-weight: 600;
}
.subtext{
  text-align: center;
}
.email{
   width: 399px;
   height: 36px;
}
.submit{
  background-color: #00a400;
   width: 200px;
   height: 36px;
   font-size: 19px;
   text-align: center;
   font-weight: 600;
   color: #fff;
   border-radius: 8px;
   border: none;
   outline: none;

}
.submitbut{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>



</head>

<br>
<br>
<br>
<br>
<br>
<br>


<body>
	<div class="bigbox">
  <div class="table">
    <div class="headtext">
			<div class="imgcontainer">
			<img src="image/admin.png" class="avatar" style="height: 100px;width: 100px;" />
		</div>
    </div>
    <div class="subtext">
    <h2><strong>Admin Login</strong></h2>
  </div>
  <hr>
    <form action="adminlogin.php" method="post">
      <input class="email" name="password" type="password" placeholder="Type your password" required/><br><br>
      <div class="submitbut">
      <a href="adminlogin.php"><input class="submit" name="login" type="submit"  value="Login"/></a>
      </div>
    </form>
    <p style="text-align: center;font-size: 20px;"><a href="index.php">Don't have an admin account?</a></p>
  </div>
</div>
</body>
</html>