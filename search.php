<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title></title>
</head>
<body>
<?php
if(isset($_POST["private"])){
    echo "雅房<br>";
}
if(isset($_POST["suite"])){
    echo "套房<br>";
}
if(isset($_POST["family"])){
    echo "家庭套房<br>";
}
if(isset($_POST["con"])){
    echo "冷氣<br>";
}
if(isset($_POST["balcony"])){
    echo "陽台<br>";
}









?>
</body>
</html>