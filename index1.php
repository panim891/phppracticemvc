<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Welcome: <?php echo $_POST["name"]; ?><br><br>
Your Email <?php echo $_POST["email"]; ?> -->
 
<?php 
 echo "<pre>";
 print_r($_REQUEST);
 echo $_REQUEST["name"];
 echo $_REQUEST["email"];

?>
</body>
</html>