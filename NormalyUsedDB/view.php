
<?php
require("connection.php");

$viewQuery = "SELECT * from laiba";
$result= mysqli_query($connection, $viewQuery);


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
      <h1 class = "text-center"> All Product</h1>

      <div class="container">
        <div class="row g-5">

        <?php

 foreach ($result as $row ){
?>
 <div class="card" style = "width : 18rem; ">
 <div class="card-body">
    <h5 class="card-title"><?= $row['prodName']; ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $row['prodPrice']; ?></h6>
    <h5 class="card-text"><?= $row['prodDesc']; ?></h5>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
    <a href="" class="btn-warning">Update</a>
    <a href="delete.php?delID=<?= $row['prodID'] ?>" class="btn btn-danger">Delete</a>

 </div>
</div>
 
        </div>
      </div>

      <?php }
      ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
