



<?php

require("connection/connection.php");

$delId= $_GET['delId'];

$deleteQuery= "DELETE FROM pdo_users WHERE userId = :delId";
$deletePrepare = $conn->prepare($deleteQuery);

$deletePrepare->bindparam(":delId" , $delId, PDO::PARAM_INT);
if(
    $deletePrepare->execute())
{
    header("location: view.php");
}
else{
    echo"Deletation Failed";
}







?>