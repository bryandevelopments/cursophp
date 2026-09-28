<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 13, parte 2 - PHP</title>
  <link rel="stylesheet" href="style.css">
  <style>
    img.nota {
      height: 50px;
    }
  </style>
</head>
<body>
  <?php
    $saque = $_GET['saq'] ?? 0;

    $resto = $saque;

    $tot100 = floor($resto / 100);
    $resto %= 100;

    $tot50 = floor($resto / 50);
    $resto %= 50;

    $tot10 = floor($resto / 10);
    $resto %= 10;

    $tot5 = floor($resto / 5);
    $resto %= 5;
  ?>
  <main>
    <h1>Caixa Eletrônico</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="saq">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
      <input type="number" name="saq" id="saq" step="5"  value="<?=$saque?>" required>
      <p style="font-size: 0.6em;"><sup>*</sup> Notas disponíveis: R$100, R$50, R$10, R$5</p>
      <input type="submit" value="Sacar">
    </form>
  </main>
  <section>
    <h2>Saque de R$<?=$saque?> realizado</h2>
    <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
    <ul>
      <li><img src="./imagens/100-reais.jpg" alt="nota de 100 reais" class="nota"> x <?=$tot100?></li>
      <li><img src="./imagens/50-reais.jpg" alt="nota de 50 reais" class="nota"> x <?=$tot50?></li>
      <li><img src="./imagens/10-reais.jpg" alt="nota de 10 reais" class="nota"> x <?=$tot10?></li>
      <li><img src="./imagens/5-reais.jpg" alt="nota de 5 reais" class="nota"> x <?=$tot5?></li>
    </ul>
  </section>
</body>
</html>