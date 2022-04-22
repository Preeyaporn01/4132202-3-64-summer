<!-- conDB.php -->
<?php 

$host = "mysql";
$user = "root";
$pass = "1234";
$db = "db_test";

try{

    $mysqli = new mysqli($host, $user, $pass, $db);
    $mysqli->query("SET NAME urf8");
    // $mysqli->set_charset("utf8")
} catch (Exeption $e) {
      echo $e->getMessage();
}