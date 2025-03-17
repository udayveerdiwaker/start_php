<?php
include 'connection.php';

      ?>
<?php
date_default_timezone_set('Asia/Calcutta')."<br>";  
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $number = $_POST['mobile_no'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $imagename = $_FILES['imagename']['name'];
    $imagename=time().'_'.$imagename;

    $sql = "INSERT INTO `textuplode`(`fname`,`lname`,`mobile_no`,`email`,`password`,`address`,`imagename`) VALUES ('$fname','$lname','$number','$email','$password','$address','$imagename')";
    mysqli_query($conn,$sql);

  //   $cookie_name ="user";
  //  $cookie_value = $fname;
  //  setcookie($cookie_name,$cookie_value,time()+(86400 * 30),"/");  

    $filename = $_FILES['imagename'] ['name'];
    $tmpname = $_FILES["imagename"] ['tmp_name'];
    $filename = time().'_'.$filename;
   
    $folder ='uploads/'.$filename;
    echo $folder;
move_uploaded_file($tmpname,$folder);
 

  header("location:http://localhost/start_php/formphp/login.php");

  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Ragistration Form</title>
    <style>
.container{
    width: 50%;
    height: 70vh;
    border-radius: 10px;
    box-shadow: 0px 0px 30px rgba(255, 255, 255, 0.9);
    color: white;
   margin-top: 150px;
}
.submit{
  text-align: center;
}

.text{
            font-size: 30px;
            color: yellow;
            text-align: center;
        }
        .body{
          background-color:rgba(0, 0, 0, 0.9);
        }
    </style>
</head>
<body class="body">
<div class="container bg-black border border-warning">
<p class="text"><b>Ragistration Form</b></p>

<form action="submit.php" method="POST" enctype="multipart/form-data" class="row g-3">
<input type="hidden" name="access_key" value="e41470fe-73c2-424c-9495-6447a2180a5b">
  <div class="col-md-6">
    <label for="inputfname" class="form-label"></label>
    <input type="text" class="form-control" id="inputfname" placeholder="Enter Fname" name="fname">
  </div>
  <div class="col-md-6">
    <label for="inputlname" class="form-label"></label>
    <input type="text" class="form-control" id="inputlname" placeholder="Enter Lname" name="lname">
  </div>
  <div class="col-md-6">
    <label for="inputmobile" class="form-label"></label>
    <input type="mobile" class="form-control" id="inputmobile" placeholder="Enter Monile No." name="mobile_no">
      </div>
      <div class="col-md-6">
    <label for="inputfile" class="form-label"></label>
    <input type="file" class="form-control" id="inputfile" name="imagename">
  </div>
  <div class="col-md-6">
    <label for="inputemail" class="form-label"></label>
    <input type="email" class="form-control" id="inputemail" placeholder="Enter Email Address" name="email">
      </div>
      <div class="col-md-6">
    <label for="inputpassword" class="form-label"></label>
    <input type="password" class="form-control" id="inputpassword" placeholder="Enter Password"name="password">
    <input type="checkbox" id="password" onclick="myFunction()">
    <label for="password">Show Password</label>
      </div>
  <div class="col-md-12">
    <label for="inputaddress" class="form-label"></label>
    <input type="address" class="form-control" id="inputaddress" placeholder="Enter Address" name="address">
  </div>  
  <div class="col-12 submit">
    <button type="submit" class="btn btn-outline-warning" value="uploads" name="submit">Submit</button>
  </div>
</form>
</div>
<script>
  function myFunction(){
    var pass =document.getElementById("inputpassword");
    if(pass.type === "password"){
      pass.type="text";
    }else{
      pass.type="password";
    }
  }
</script>
</body>
</html>