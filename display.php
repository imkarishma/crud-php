<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Display details</title>
</head>
<body>
    <div class="container">
        <a href="user.php" class="btn btn-primary my-5">Add User</a>
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Collage</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="Select * from `crud`";
    $result=mysqli_query($conn,$sql) ;
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $username=$row['username'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $collage=$row['collage'];
            echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$username.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$collage.'</td>
      <td>
    <a href="update.php?updateId='.$id.'" class="btn btn-sm btn-warning">Update</a>
    <a href="delete.php?deleteId='.$id.'" class="btn btn-sm btn-danger">Delete</a>
</td>
    </tr>';
        }
    }
    ?>  

    <!-- <tr>
      <th scope="row">1</th>
      <td>Karishma</td>
      <td>karishma@gmail.com</td>
      <td>9999999999</td>
      <td>Millennium institute of technology</td>
    </tr> -->
  </tbody>
</table>
    </div>
</body>
</html>