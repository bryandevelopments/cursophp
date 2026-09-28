<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultaddo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Resultado do processamento</h1>
  </header>
  <main>
    <?php
      $nome = $_GET["nome"] ?? "Sem nome"; // ?? chama operador de coalescência
      $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
      echo "<p>É um prazer te conhecer, <Strong> $nome $sobrenome</strong>! Este é o meu site!</p>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
  </main>
</body>
</html>