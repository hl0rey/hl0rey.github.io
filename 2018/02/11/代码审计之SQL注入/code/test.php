<?php

include_once "conn.php";

if(!isset($_GET['id'])){

    die();

}


$id=$_GET['id'];

$sql="SELECT * FROM `users` WHERE `id`='{$id}' LIMIT 0,1";

$result=$conn->query($sql);
$row=$result->fetch();
echo $row['id']."<br/>";
echo $row['username'];


echo "<br/>------------------------<br/>";
echo $sql."<br/>";
var_dump($conn->errorInfo());
