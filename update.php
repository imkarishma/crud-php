<?php
include "connect.php";
$id = $_GET['updateId'];

$sql="select * from `crud` where id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$username=$row['username'];
$email=$row['email'];
$password=$row['U_password'];
$mobile=$row['mobile'];
$collage=$row['collage'];

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $username=$_POST['username'];
    $collage=$_POST['collage'];
    $password=$_POST['password'];
    // echo $username;
    $sql="update `crud` set id='$id',username='$username',email='$email',mobile='$mobile',U_password='$password' where id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:display.php');
    }else{
        echo "Not updated";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>crud</title>
</head>
<body>
    
    <div class="container my-5">
    
    <form class="form-control" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" value="<?php echo $email;?>" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" value="<?php echo $username;?>" class="form-control" name="username" id="username" placeholder="username">
  </div>
  <div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="text" value="<?php echo $mobile;?>" class="form-control" name="mobile" id="mobile" placeholder="mobile">
  </div>
  <div class="form-group">
    <label for="collage">Collage</label>
    <input type="text" value="<?php echo $collage;?>" class="form-control" id="collage" name="collage" placeholder="collage">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="text" value="<?php echo $password;?>" class="form-control" id="passsword" name="password" placeholder="password">
  </div>
  <button type="submit" class="btn btn-primary mt-3" name="submit">Update</button>
</form>
    </div>
</body>

<script>


</script>

</html>