<html>
<head>
    <meta charset="gbk">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/11/18
 * Time: 1:35 PM
 */

//http://www.91ri.org/8611.html

$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "test_data");

mysqli_query($conn,"SET NAMES gbk");

if (!isset($_GET['user'])) {

    die();

}

//stripcslashes 可识别类似 C 语言的 \n，\r，... 八进制以及十六进制的描述。 \a, \b, \f, \n, \r, \t and \v
//addslashes " '
$user = addslashes($_GET['user']);



$sql = "SELECT * FROM `users` WHERE `username`='{$user}'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

echo $row['id'] . "<br/>";
echo $row['username'];

echo "<br/>------------------------<br/>";
echo $sql . "<br/>";
echo mysqli_error($conn);
?>
</body>

</html>

