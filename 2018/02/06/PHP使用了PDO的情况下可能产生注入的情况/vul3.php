<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/6/18
 * Time: 6:39 PM
 */
if (!isset($_GET['id'])){
    die();
}

$dbh=new PDO('mysql:host=localhost;dbname=test_data','root','');
$sql="SELECT * FROM `users` WHERE `id`=:".$_GET['id'];
$sth=$dbh->prepare($sql);
$sth->execute(array(":id"=>1));
$result=$sth->fetch(PDO::FETCH_ASSOC);
foreach ($result as $item){
    echo $item;
}

