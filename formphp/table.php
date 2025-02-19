
<?php
include 'connection.php';

$sql ="SELECT id,fname,lname,mobile_no,address,imagename FROM textuplode";
$result = mysqli_query($conn,$sql);
// $rows = mysqli_fetch_assoc($result);
// print_r($rows);
// exit();
if(""){
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

  <title>Delete Table</title>
  <style>
        .but{
          border: none;
        }
        .but{
          border: none;
          border-radius: 10px;
        }
        .bt{
          text-align: center;
          margin-left: 45%;
        }
  </style>
</head>
<body>
  <div >
<table class="table  table-bordered border-black table-hover" class="row g-12" style="text-align: center;">
  <thead class="table-dark">
    <tr>
      <th class="col-1" scope="gcol">Id</th>
      <th class="col-1" scope="col">First Name</th>
      <th class="col-1" scope="col">Last Name</th>
      <th class="col-1"scope="col">Mobile_no</th>
      <th class="col-1" scope="col">Address</th>
      <th class="col-1" scope="col">photo</th>
      <th colspan="2" class="col-1" scope="col">Action</th>
    </tr>
  </thead>
  <?php
  
   $sql1="DELETE from `textuplode` WHERE `id`=2";

while( $rows =mysqli_fetch_assoc($result)){

 ?> 

  <tbody>
    <tr>
      <th class="col-1" ><?php echo $rows['id']?></th>

      <td class="col-1"><?php echo $rows['fname']?></td>

      <td class="col-1"><?php echo $rows['lname']?></td>
 
      <td class="col-1"><?php echo $rows['mobile_no'] ?></td>

      <td class="col-1"><?php echo $rows['address']?></td>

      <td class="col-1"><img src="uploads/<?php echo $rows['imagename'] ?>" width="80px" height="50px"></td>

      <td class="col-1"><button class="but"><?php echo "<a class='btn btn-outline-info' href='update.php?id=$rows[id]''role='button'>Update</a>";?></button>

      <td class="col-1"><button class="but"><?php echo "<a class='btn btn-outline-danger' href='delete.php?id=$rows[id]''role='button'>Delete</a>";?></button>
      </td>
      
      </td>
    </tr>
  </tbody>

  <?php
}
  ?>
</table>
<button type="button" class="btn btn-outline-warning bt"><a href="http://localhost/formphp/submit.php">Ragistration Form</a></button>

</body>
</html>
