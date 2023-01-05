<?php
include "connect.php";

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $username=$_POST['username'];
    $collage=$_POST['collage'];
    $password=$_POST['password'];
    // echo $username;
    $sql="insert into crud(username,email,mobile,U_password,collage) values('$username','$email','$mobile','$password','$collage')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<p style='color:#4ce310;background-color:#2e6b15;text-align:center'>Data insreted Successfully!!!</p>";
    }else{
        echo "Not inserted";
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
    <input type="email" required name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" required name="username" id="username" placeholder="username">
  </div>
  <div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="text" class="form-control" required name="mobile" id="mobile" placeholder="mobile">
  </div>
  <div class="form-group">
    <label for="collage">Collage</label>
    <input type="text" class="form-control" required id="collage" name="collage" placeholder="collage">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="text" class="form-control" required id="passsword" name="password" placeholder="password">
  </div>
  <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
</form>
<a href="display.php" class="float-end btn btn-outline-warning mt-5">Display</a>
    </div>
</body>

<script>


</script>

</html>