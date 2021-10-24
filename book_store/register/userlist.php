<?php 
  include '../config/dbconfig.php';
  $fetch="select id,name,email,phone,image,status from userlogin";
  $sql=$con->query($fetch);
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Table</h2>
  <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Image</th>
        <th>Status</th>
         <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $i=1;
        while($row=$sql->fetch_assoc()){
        ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><img src="profilepicture/<?php echo $row['image']; ?>" alt="no-image" height="100px" width="100px"></td>
        <td><?php echo $row['status']; ?></td>
        <td><a href="edituser.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a><a href="" onclick="return confirm('Do you really want to delete?')" class="btn btn-warning">Delete</a></td>
      </tr>
      <?php
      }
    ?>
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
