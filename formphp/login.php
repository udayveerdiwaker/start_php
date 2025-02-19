<?php
include 'connection.php';
if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql  = "SELECT * FROM textuplode WHERE email='$email' && password='$password'";

  $data=mysqli_query($conn,$sql);
  $result= mysqli_num_rows($data);
  echo $result;
   
if($result ==1){
  header("location:table.php");
}else{
  header("locatioin:login.php");    
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>login</title>
  <style>
    .container0{
      width: 40%;
      height: 40vh;
      margin-top: 150px;
      padding-top: 10px;
      border-radius: 10px;
      box-shadow: 0px 0px 30px rgba(255, 255, 255, 0.9);
      margin-left: 30%;
      border: 2px solid yellow;
    }
    .btn{
      margin-left: 35%;
    }
    .body{
          background-color:rgba(0, 0, 0, 0.9);
        }
        .text{
          text-align: center;
          color: yellow;
          margin-top: 0px;
          
        }
  </style>
</head>
<body class="body">
  <div class="container0 bg-secondary">
  <h3 class="text">Login Form</h3>
<form action="login.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address" aria-describedby="emailHelp" name="email">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="mb-3 btn">
  <button type="submit"  class="btn btn-outline-warning" name="login">login</button>
  </div>
</form>
</div>
</body>
</html>