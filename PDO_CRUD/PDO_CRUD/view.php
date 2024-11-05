<?php
require "connection/connection.php";

$viewQuery = "SELECT * FROM pdo_users";

$viewPrepare = $conn->prepare($viewQuery);
$viewPrepare->execute();

$viewData = $viewPrepare->fetchAll(PDO::FETCH_ASSOC); 

echo"<pre>";
print_r( $viewData);
echo "</pre>";








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
  <h1 class="text-center m-3" >Users Data</h1>
    <div class="container">
<div class="row">
<table class="table">
  <thead>
    <tr>
      <th scope="col">User Id</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">City</th>
      <th scope="col">Registration Time</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
 

  <?php
foreach ($viewData as $data){
  ?>

  <tr>
<td><?=$data["userId"]?></td>
<td><?=$data["username"]?></td>
<td><?=$data["email"]?></td>
<td><?=$data["password"]?></td>
<td><?=$data["city"]?></td>
<td><?=$data["registrationTime"]?></td>
<td>
<a href="update.php?upId=<?= $data['userId']?>"><i class="fa-solid fa-pen-to-square"></i></a>
<a href="delete.php?delId=<?= $data['userId']?>"><i class="fa-solid fa-trash"></i></a>

</td>
  </tr>
  <?php
}
  ?>


</tbody>
</table>
</div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   
</body>
</html>






