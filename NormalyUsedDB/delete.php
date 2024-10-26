<?php
require "connection.php";

$delID = $_GET['delID'];

$deleteQuery = "DELETE FROM laiba WHERE prodID = '$delID'";

$result = mysqli_query($connection, $deleteQuery);
 header("location: view.php");

?>