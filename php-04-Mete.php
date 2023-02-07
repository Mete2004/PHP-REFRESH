<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html Refresh</title>
    <meta http-equiv="refresh" content="10">
</head>
<body>
  

<?php 
    echo "<b> Lokale tijd: ". "<br> </b>";
  date_default_timezone_set('Europe/Amsterdam');
  $date = date('H:i:s');
  echo $date;
?>

</body>
</html>