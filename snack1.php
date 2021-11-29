<!-- Passare come parametri GET name, mail e age
verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola 
che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = (int) $_GET["age"];
  $login = false;
  $nameOk = false;
  $mailOk = false;
  $ageOk = false;

  if (strlen($name) > 3) {
    $nameOk = true;
  };
  if (strpos($mail, ".") && strpos($mail, "@")) {
    $mailOk = true;
  };
  if (gettype($age) === "integer" && $age > 0) {
    $ageOk = true;
  };
  if ($nameOk && $mailOk && $ageOk) {
    $login = true;
  };

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
  <p>name: <?php echo $name ?></p>
  <p>mail: <?php echo $mail ?></p>
  <p>age: <?php echo $age ?></p>
  <p>
    Stato accesso: 
    <?php
      if ($login === true) {
        echo "riuscito";
      } else {
        echo "negato";
      };
    ?> 
  </p>
</body>
</html>