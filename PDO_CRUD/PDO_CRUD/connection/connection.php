<?php   


define("dsn","mysql:host=localhost;dbname=2311c3_products");
define("username","root");
define("password","");


try{
       // $com = new PDO("mysql:host=localhost;dbname=2311c3_products")
       $conn = new PDO(dsn,username,password);

}


catch(PDOException $e){
    echo $e->getMessage();

}










?>