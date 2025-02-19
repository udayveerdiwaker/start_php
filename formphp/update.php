<?php
include 'connection.php';
    $id=$_GET['id'];
// print_r($id);
$_GET['id'];

$sql = "SELECT * FROM `textuplode`  WHERE `id` = '$id' ";
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_assoc($result);
// print_r($rows);
// exit();

if(isset($_POST['uploads'])){

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mobile_no = $_POST['mobile_no'];
  $address = $_POST['address'];

    $update = "UPDATE `textuplode` SET `fname`= '$fname', `lname`= '$lname', `mobile_no`='$mobile_no', `address`='$address' WHERE `id` = '$id' ";
  
    $result= mysqli_query($conn,$update);
    // print_r($update);
    header("location:table.php");
}

?>
<!DOCTYPE html>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Update Form</title>
    <style>
        .text{
            color: yellow;
            text-align: center;
            font-size: 30px;
        }
        .container{
            height: 60vh; 
            width: 50%;
            margin-top: 100px;
            border-radius: 5px;
            
            box-shadow: 0px 0px 30px rgba(255, 255, 255, 0.9);
        }
        .submit{
            text-align: center;
        }
        /* .body{
          background-color:rgba(0, 0, 0, 0.9);
        } */
    </style>
</head>
<body class="body">
<div class="container bg-black border border-warning">
<p class="text"><b>Update Form <?php echo $id?></b></p>
<form action="update.php?id=<?php echo $id?>" method="POST" enctype="multipart/form-data" class="row g-3">
          
  <div class="col-md-6">
    <label for="inputfname" class="form-label"></label>
    <input type="text" class="form-control" id="inputfname" value="<?php echo $rows['fname'] ?>" placeholder="Enter Fname" name="fname">
  </div>

  <div class="col-md-6">
    <label for="inputlname" class="form-label"></label>
    <input type="text" class="form-control" id="inputlname" value="<?php echo $rows['lname'] ?>" placeholder="Enter Lname" name="lname">
  </div>

  <div class="col-md-6">
    <label for="inputmobile" class="form-label"></label>
    <input type="mobile" class="form-control" id="inputmobile" value="<?php echo $rows['mobile_no'] ?>" placeholder="Enter Monile No." name="mobile_no">
      </div>

      <div class="col-md-6">
    <label for="inputfile" class="form-label"></label>
    <input type="file" class="form-control" id="inputfile" name="imagename">
  </div>
  <div class="col-md-12">
    <label for="inputaddress" class="form-label"></label>
    <input type="address" class="form-control" id="inputaddress" value="<?php echo $rows['address'] ?>" placeholder="Enter Address" name="address">
  </div>  
  <div class="col-12 submit">
    <button type="submit" class="btn btn-warning"  name="uploads">Update</button>
  </div>
</form>
</div>

</body>
</html>