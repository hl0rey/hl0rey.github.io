<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>xss test</title>
    <script src="bootstrap/jquery.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <meta charset="utf8">
</head>
<body>
<div class="container">
    <div class="text-center">输入</div><br />
<form action="test.php" method="get" class="form-group">
    <input type="text" name="content" class="form-control"><br />
    <input type="submit" value="submit" class="btn btn-lg btn-primary btn-block"><br />
</form>

    <?php
    if(isset($_GET['content'])){
        $content=$_GET['content'];
    ?>
        <?php echo $content ?><br />
        <script><?php echo $content; ?></script><br />



    <?php
    }
    ?>

</div>

</body>


</html>