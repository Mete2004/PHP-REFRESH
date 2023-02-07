<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input type="text"  name="getal1">
    <input type="text"  name="getal2">
    <input type="submit">
</form>

<?php



if (isset($_GET['getal1'])) { 
    $getala =  $_GET["getal1"];
    $getalb =  $_GET["getal2"];
    $vermenigvuldigen = $getala * $getalb;
    echo $getala . " x " . $getalb . " = " . $vermenigvuldigen;
}

 
?>
</body>
</html>