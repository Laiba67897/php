<?php

// $a = 30;

// $username = "Zafar";
// $username2 = "Asfar";
// echo "My name is : $username <br>";
// echo $username . $username2 .  "<br>";
// echo 1+ 2 + true . "<br>";
// echo 1+ 2 + false . "<br>";
// echo "This is numer value of boolen: " . true . "<br>";
// echo "This is numer value of boolen: " . false . "<br>";
// print ("My name is $username2");


// echo 'Hello' . true . "World. \n"; 
// echo 'Hello' . false . "World. \n"; 
// print ('Hello' . false . "World. \n");
// print ('Hello' . false . "World. \n"); 

// $username ="Sohail Khan Niazi";
// $username = ["Sohail","Khan","Niazi"];
// $city = "karachi";
// $phone = "24-567-890";


// $result = strtolower($username);
// $result = strtoupper($username);
// $result = trim($username, "Soha");
// $result = str_pad($city, 10, "-");
// $result = str_replace("-", "" , $phone);
// $result = strrev($username);
// $result = str_shuffle($username);
// $result = strcmp($username ,$username);
// $result = strcmp($username ,$city);
// $result = strlen($username);
// $result = strpos($username ,"h");
// $result = substr($username ,2,6);
// $result = substr($username,6);
// $result = explode("a",$username);
// $result = implode(" ",$username);

// for($i=0 ; $i  < count($result) ; $i++){
//     echo $result[$i]. "<br>"; 
// };


// foreach($username as $el){
//     echo $el . "<br>";

// }




$p = "Aptech Learning Zone";

// for($i=0 ; $i <strlen($p) ; $i++){
//     echo $p[$i]."<br>";
// }
// foreach($p as $el){
//     echo $el . "<br>";
// }
$result =  strpos(strtolower($p), strtolower("n"));

echo "$result";