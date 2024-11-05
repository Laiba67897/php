
<?php
require "connection/connection.php";


$upId =$_GET['upId'];

$viewQuery = "SELECT * FROM pdo_users WHERE userId = :Id";

$viewPrepare = $conn->prepare($viewQuery);
$viewPrepare->bindParam(':Id' , $upId, PDO::PARAM_INT);

$viewPrepare->execute();

$viewData = $viewPrepare->fetchAll(PDO::FETCH_ASSOC); 
$viewData = $viewData[0];
echo"<pre>";
print_r( $viewData);
echo "</pre>";



if(isset($_POST['btn']))
{
  $userName = $_POST['userName'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $city = $_POST['city'];
   


  $updateQuery = "UPDATE  pdo_users SET username = :username =:username, email=email, password =:pass,city = :city WHERE userId= :userId";

  $updatePrepare = $conn->prepare($updateQuery);

 $updatePrepare->bindParam(":username", $userName, PDO::PARAM_STR);
$updatePrepare->bindParam(":email", $email, PDO::PARAM_STR);
$updatePrepare->bindParam(":pass", $password, PDO::PARAM_STR);
$updatePrepare->bindParam(":city", $city, PDO::PARAM_STR);
$updatePrepare->bindParam(":userId", $upId, PDO::PARAM_STR);

$updatePrepare->execute();


if($updatePrepare->execute())

{
    header("location:view.php");
}
}






?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<h1 class="text-center">User Update</h1>
<div class="container">
  <div class="row">
    <form class="row g-3" method="POST">
    <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Username</label>
    <input type="text" class="form-control" name="userName" value="<?=$viewData['username'] ?>">
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="<?=$viewData['email'] ?>">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" value="<?=$viewData['password'] ?>">
  </div>
  <div class="col-md-12">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" name="city" value="<?=$viewData['city'] ?>">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="btn">Update user</button>
  </div>
</form>
</div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">