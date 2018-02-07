<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/6/18
 * Time: 6:01 PM
 */


if (!isset($_GET['id'])){
    die();
}

$dbh=new PDO('mysql:host=localhost;dbname=test_data','root','');
$sql="SELECT * FROM `users` WHERE `id`=".$_GET['id'].";";

$result=$dbh->exec($sql);

echo $result;
