<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
  $randomNumbers = [];

  while (count($randomNumbers) < 15) {
    $randomNumber = rand(0, 100);
    if (!in_array($randomNumber, $randomNumbers)) {
      $randomNumbers[] = $randomNumber;
    }
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
    <?php var_dump($randomNumbers) ?>
  </pre>
</body>
</html>