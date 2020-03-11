<?php
require_once 'classes/Stanza.php';

$stanza = new Stanza();
var_dump($stanza->getById(15));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Stanza numero: <?php echo $stanza->getNumber() ?></h1>
  <ul>
    <li>ID: <?php echo $stanza->getId() ?></li>
    <li>Letti: <?php echo $stanza->getBeds() ?></li>
    <li>Piano: <?php echo $stanza->getFloor() ?></li>
  </ul>
</body>

</html>