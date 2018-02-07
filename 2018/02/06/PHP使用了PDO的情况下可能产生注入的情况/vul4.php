<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/6/18
 * Time: 7:07 PM
 */

if (!isset($_GET['id'])){
    die();
}

$dbh=new PDO('mysql:host=localhost;dbname=test_data','root','');
$sql="SELECT * FROM ".$_GET['id']." WHERE `username`=:name";
$sth=$dbh->prepare($sql);
$sth->execute(array(":name"=>'admin'));
$result=$sth->fetch(PDO::FETCH_ASSOC);
foreach ($result as $item){
    echo $item;
}

