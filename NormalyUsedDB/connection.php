<?php


try 
{
  $connection = mysqli_connect('localhost','root' ,''  ,'laiba');
   echo "connected successfully";
}
catch (Exception $e) 
{
    echo $e->getMessage();
}

