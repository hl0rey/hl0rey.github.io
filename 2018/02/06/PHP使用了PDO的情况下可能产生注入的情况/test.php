<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/6/18
 * Time: 4:28 PM
 */

if (!isset($_GET['id'])){
    die();
}

$dbh=new PDO('mysql:host=localhost;dbname=test_data','root','');

$sql="SELECT * FROM `users` WHERE `username`=:username";

$sth=$dbh->prepare($sql);

$sth->execute(array(':username'=>$_GET['id']));

$result=$sth->fetch(PDO::FETCH_ASSOC);

echo $result['id'];