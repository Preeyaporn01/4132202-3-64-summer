<?php

echo "Montira Thankhom";
echo "<br>";
echo "ID : 4132202-3-64-summer";



//conDB
<!-- conDB.php -->
<?php

$host = "mysql";
$user = "root";
$pass = "1234";
$db = "db_test";

try{
    $mysqli = new mysqli($host,$user,$pass,$db);
    $mysqli->query("SET NAMES utf8");
    //$mysql->set_charset("uft8")
}catch(Exception $e){
    echo $e->getMessage();
}