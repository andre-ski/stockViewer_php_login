<?php
$servername = "localhost";
$username = "homestead";
$password="secret";
$dbname="homestead";

   //this is the connection to my database using my details 
   try{
$conn = new PDO('mysql:host=localhost;port=33060;dbname=homestead','homestead','secret');
}catch (PDOException $e){
	echo "Connection failure " .$e->getMessage();
}

   
