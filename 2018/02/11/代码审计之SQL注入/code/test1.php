<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/11/18
 * Time: 1:03 PM
 */

include_once "conn.php";

if(!isset($_GET['id'])){

    die();

}

$id=intval($_GET['id']);
//$id=$_GET['id'];

$sql="SELECT * FROM `users` WHERE `id`={$id}";

$result=$conn->query($sql);
$row=$result->fetch();
echo $row['id']."<br/>";
echo $row['username'];


echo "<br/>------------------------<br/>";
echo $sql."<br/>";
var_dump($conn->errorInfo());
//foreach ( $result->fetchAll() as $row){

//    echo $row['id']."<br/>";
//    echo $row['username']."<br/>";

//}

