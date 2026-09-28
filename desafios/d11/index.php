<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 11, parte 2 - PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $preco = $_GET['preco'] ?? '0';
    $reaj = $_GET['reaj'] ?? '0';

    $aumento = $preco * $reaj / 100;
    $novo = $preco + $aumento;
  ?>
  <main>
    <header>
      <h1>Reajustador de preços</h1>
    </header>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="preco">Preço do produto (R$)</label>
      <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">
      <label for="reaj">Qual o será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
      <input type="range" name="reaj" id="reaj" min="0" max="100" oninput="mudaValor()" value="<?=$reaj?>">
      <input type="submit" value="Reajustar">
    </form>
  </main>
  <section>
    <h2>Resultado do Reajustador</h2>
    <p>O produto que custava <strong>R$<?=number_format($preco, 2, ",", ".")?></strong>, com <strong><?=$reaj?>% de aumento</strong>, vai passar a custar <strong>R$<?=number_format($novo, 2, ",", ".")?></strong> a partir de agora.</p>
  </section>
  <script>
    //Declarações automáticas
    mudaValor()

    function mudaValor() {
      p.innerText = reaj.value;
    }
  </script>
</body>
</html>