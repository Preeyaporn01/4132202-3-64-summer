<?php
require_one ('conDB.php');

$name = $_POST['name'];
$sname = $_POST['sname'];
$age = $_POST['age'];
$sex = $_POST['sex'];

$sql = "INSERT INTO tb_user VALUE($name, $sname, $age, $sex)";

try{
    $mysqli->query($sql);
}catch(Exception $e){
    echo $e->getMessage();
}
