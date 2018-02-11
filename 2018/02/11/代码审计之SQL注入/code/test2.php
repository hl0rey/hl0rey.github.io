<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/11/18
 * Time: 1:26 PM
 */

include_once "conn.php";

if(!isset($_GET['user'])){

    die();

}

$sql="SELECT * FROM `users` WHERE `username`='{$_GET['user']}'";

$result=$conn->query($sql);
$row=$result->fetch();
echo $row['id']."<br/>";
echo $row['username'];

echo "<br/>------------------------<br/>";
echo $sql."<br/>";
var_dump($conn->errorInfo());