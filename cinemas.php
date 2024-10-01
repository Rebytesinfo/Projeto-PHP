<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


$esporte = $_GET["esporte"];

sort ($esporte);

foreach ($esporte as $materiais)

echo "<h1>Cumpom de Bilheteria</h1><br>$materiais <br>";

?>

</body>
</html>