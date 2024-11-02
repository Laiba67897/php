<?php
require("connection/connection.php");


if(isset($_POST['btn']))
{
  $userName = $_POST['userName'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $city = $_POST['city'];
   


  $insertQuery = "INSERT INTO `pdo_users`(`username`,`email`,`password`,`city`)  VALUES (:username,:email,:pass,:city);";

  $insertPrepare = $conn->prepare($insertQuery);

 $insertPrepare->bindParam(":username", $userName, PDO::PARAM_STR);
$insertPrepare->bindParam(":email", $email, PDO::PARAM_STR);
$insertPrepare->bindParam(":pass", $password, PDO::PARAM_STR);
$insertPrepare->bindParam(":city", $city, PDO::PARAM_STR);
 

$insertPrepare->execute();

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
<h1 class="text-center">User Registration Form</h1>
<div class="container">
  <div class="row">
    <form class="row g-3" method="POST">
    <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Username</label>
    <input type="text" class="form-control" name="userName">
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="col-md-12">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" name="city">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="btn">Register</button>
  </div>
</form>
</div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</body>
</html>