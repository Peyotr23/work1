<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
  </body>
</html>

<?php
$user = "15057";
$pass = "student";

$mysqli = new PDO('mysql:host=10.100.3.6;dbname=15057', $user, $pass);

$stmt = $mysqli->prepare ('SELECT * FROM auto');
$stmt->execute();

while($sql= $stmt->fetch())
{
echo 'Marka:' . $sql['Marka_A'] . ' Nazv: ' .  $sql['Nazv_A']. 'Year:' . $sql['Year_A']. 'Color:' . $sql['Color_A']. '<br>';

}

