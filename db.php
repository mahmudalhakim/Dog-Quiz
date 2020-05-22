<?php 
/**************************************** *
 * connect to database and server
**************************************** */

$db_server   = "localhost";
$db_database = "hundquiz";
$db_username = "root";
$db_password = "root"; 

try {
  $db = new PDO("mysql:host=$db_server;dbname=$db_database;charset=utf8" 
                , $db_username 
                , $db_password );
  $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
  //echo "<p>Connected Successfully</p>";
} catch(PDOException $e){
  echo "<h2>Error: " . $e-> getMessage() . "</h2>";
}
