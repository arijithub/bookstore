
<?php 
error_reporting(0);
include '../config/dbconfig.php'; 
if(isset($_POST['registersub'])&&$_POST['registersub']=='SIGNUP'){
if($_POST['password']==$_POST['confirm_password']){

if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$file_name)));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"profilepicture/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }


	$sql1="Select email from userlogin where id=(select max(id) from userlogin)";
	$res_query=$con->query($sql1);
	$row_login=mysqli_fetch_assoc($res_query);
	
	$email=$row_login['email'];
	if($_POST['email']==$email){
     $errormsg="User Already Exists";
}else{
$sql="Insert into userlogin(name,email,password,phone,status,address,pincode,state,city,image,role) values('".$_POST['Username']."','".$_POST['email']."','".md5($_POST['password'])."','".$_POST['phone']."','Active','".$_POST['Address']."','".$_POST['pincode']."','".$_POST['state']."','".$_POST['city']."','".$file_name."','user')";
if($con->query($sql)){
	
      
  $succmsg="Registration successful";
}else{

 $errormsg=$con->error;
}

}

}else{
$errormsg="Passwords donot match";

}

}

?>
<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

<link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  <title>SignUp Form</title>
  
  
  
  
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#mberr').text('');
        $('#mobile').keyup(function(){
          var mbdt= $('#mobile').val();
          
           if(mbdt==''){
             $('#mberr').text('');
           }
          if(mbdt.length<10&&mbdt>0){

           $('#mberr').text('Please enter a 10 digit mobile number');
          }else {

             $('#mberr').text('');
             //$('#mobile').val('');
          }
          

        });


    });
</script>
</head>

<body translate="no" >
<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
   <?php
          if(isset($succmsg)){
            echo "<span style='color:green'>".$succmsg."</span>";

          }
          ?>
	<div class="main-w3layouts wrapper">
		<h1>Creative SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="post" enctype="multipart/form-data">
					<input class="text" type="text" name="Username" placeholder="Username" required="">
          <input class="text" type="text" name="phone" id="mobile" placeholder="Mobile" pattern="^\{10}d$" required>
          <span id="mberr" style="color:red"></span>
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="confirm_password" placeholder="Confirm Password" required="">
					<input class="text" type="text" name="Address" placeholder="Address" required="">
					<input class="text" type="text" name="pincode" placeholder="pincode" required="">
					<input class="text" type="text" name="state" placeholder="state" required="">
					<input class="text" type="text" name="city" placeholder="city" required="">
					<input type="file" name="image">
          <?php
          if(isset($errormsg)){
            echo "<span style='color:red'>".$errormsg."</span>";

          }
          ?>
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP" name="registersub">
				</form>
				<p>Don't have an Account? <a href="#"> Login Now!</a></p>
			</div>
		</div>
    
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>
  
  
  
  

</body>

</html>
 
