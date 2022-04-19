<?php
$user = "root";
$password = "";
$DSN = 'mysql:host=localhost;dbname=mcoolima_db';

try{
$pdo = new PDO($DSN,$user,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo ""; 
}
catch(PDOException $e)
{
 echo "Connection failed: " . $e->getMessage();
}


?>

