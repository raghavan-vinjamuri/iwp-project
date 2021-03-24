<?php
$mysqli = new mysqli("localhost","root","","customer_details","3306");
$email = "";
$pass = "";
$details = "";
if(!empty(($_POST['submit_value']))){
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $temp = $mysqli->query("SELECT * FROM account_details WHERE Email='$email' AND Password='$pass'") or die("cannot do");
  $result = mysqli_fetch_assoc($temp);
  if($result['Email'] == $email && $result['Password'] == $pass){
    echo "<script type='text/JavaScript'> window.location= '../homepage/homepage.php' </script>";
  }
  else{
    $details = "wrong details enter again";
  }

}

 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login | AlluraSkin</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<img src="Symbol.png"	alt="Logo" class="logo1">
<div id="underlogo"><p><b>&nbspAllura<b>Skin</b></b></p></div>
<div id="underlogo1"><p>&nbspPlease login to continue using AlluraSkin.<br><br><br>&nbsp &nbsp &nbsp &nbspWelcome Back! Filters are great,<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspbut great skin is better!</p></div>
<div id="underlogo1"><p><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspPlease Login with email</p></div>
<div id="error-message">
  Please check ur details properly and type again
</div>
<br>
 <div class="bunny">
  <form action="" method="post">
    <?php if(!empty($details)){
     ?>
     <script type="text/javascript">
       var object = document.getElementById('error-message');
       object.style.display = "block";
     </script>
   <?php } ?>
   <br>
    <input type="text" id="fname" name="email" placeholder="Email">
    <br>
    <input type="password" id="lname" name="password" placeholder="Password">
   <br>
    <input type="submit" name="submit_value" value="Login">
  </form>
</div>
	<div class="bunny">
</div>
	<br>
		<div id="underlogo1"><span>&nbsp &nbsp &nbsp Don’t have an account ? </span><span style="color:#00DBD0;"></span><span style="color:#00DBD0;"><a href="../signuppage/index.html" style="text-decoration:none; color:#00DBD0;">Sign Up</a></span></div>
        <div id="underlogo1"><span><br>&nbsp &nbsp &nbsp &nbsp &nbsp Forgot password ? </span><a href="../forgotpassword/main.html" style="text-decoration:none; color:#00DBD0;">click here</a></div>

</body>
</html>
