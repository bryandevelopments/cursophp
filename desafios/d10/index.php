<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 10, parte 2 - PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
    $atual = date("Y");
    $nasc = $_GET['nasc'] ?? '2000';
    $ano = $_GET['ano'] ?? $atual;
    $idade = $ano - $nasc;
  ?>
  <main>
    <header>
      <h1>Calculando a sua idade</h1>
    </header>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="nasc">Em que você nasceu?</label>
      <input type="number" name="nasc" id="nasc" min="1900" max="2022" value="<?=$nasc?>">
      <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
      <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>">
      <input type="submit" value="Qual será minha idade?">
    </form>
  </main>
  <section>
    <h2>Resultado</h2>
    <?php 
      echo "<p>Quem nasceu em $nasc vai ter <strong>$idade anos</strong> em $ano.</p>"
    ?>
  </section>
</body>
</html>