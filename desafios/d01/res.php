<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primeiro Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Resultado Final</h1>
    <?php
      $num = $_GET["numero"] ?? "Sem número";

      echo "O número escolhido foi $num <br>";
      echo "Seu antecessor é " . ($num - 1) . "<br>";
      echo "Seu sucessor é " . ($num + 1) . "<br>";
    ?>
  </main>
</body>
</html>