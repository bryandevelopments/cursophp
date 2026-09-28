<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 12, 2ª parte - PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
   $segnds = $_GET["seg"] ?? 0;
  ?>
  <main>
    <h1>Calculadora de Tempo</h1>
    <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
      <label for="seg"><p>Qual é o total de <strong>segundos?</strong></p></label>
      <input type="number" name="seg" id="seg" value="<?=$segnds?>" required>
      <input type="submit" value="Calcular">
    </form>
  </main>

  <section>
    <h2>Totalizando</h2>
    <?php
      $sobra = $segnds;
      // Total de Semanas
      $semana = (int)($sobra / 604_800);
      $sobra = $sobra % 604_800;
      // Total de Dias
      $dia = (int)($sobra / 86_400);
      $sobra = $sobra % 86_400;
      // Total de Horas
      $hora = (int)($sobra / 3_600);
      $sobra = $sobra % 3_600;
      // Total de Minutos
      $minuto = (int)($sobra / 60);
      $sobra = $sobra % 60;
      // Total de Segundos
      $segundo = $sobra;

      echo "<p>Analisando o valor que você digitou é <strong>" . number_format($segnds, 2, ",", ".") . " segundos </strong>, equivalem a um total de:</p>";

      echo "<ul><li><strong>$semana</strong> semanas</li><li><strong>$dia</strong> dias</li><li><strong>$hora</strong> horas</li><li><strong>$minuto</strong> minutos</li><li><strong>$segundo</strong> segundos</li></ul>";
    ?>
  </section>

</body>
</html>