<?php 
  include '../config/dbconfig.php';
  $fetch="select * from userlogin where id=".$_GET['id'];
  $sql=$con->query($fetch);
  while($row=$sql->fetch_assoc()){
$id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
$password=$row['password'];
  }
  if(isset($_POST['edsub'])){
    echo $_POST['uname'];

$sql1="update userlogin set name='".$_POST['uname']."' and email='".$_POST['uemail']."' and phone='".$_POST['uphone']."' and password='".md5($_POST['upassword'])."' where id=".$_POST['hdid'];
$res=$con->query($sql1);
if($res){
  echo $sql1;
//  echo $con->error;
 // header('Location:userlist.php');
}else{

  echo "Update failed";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update user</h2>
  <form class="form-horizontal" action="" method="post">
    <input type="hidden" name="hdid" value="<?php echo $id; ?>">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter name" name="uname" value="<?php echo $name; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="uemail" value="<?php echo $email; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter phone" name="uphone" value="<?php echo $phone; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="email" placeholder="Enter password" name="upassword" value="<?php echo $password; ?>">
      </div>
    </div>
    

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="edsub" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
