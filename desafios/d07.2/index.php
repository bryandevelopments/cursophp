<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 7, parte 2 - PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $url = "https://api.bcb.gov.br/dados/serie/bcdata.sgs.1619/dados/ultimos/1?formato=json";
    $ch = curl_init($url);
    curl_setopt_array($ch, [
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_CONNECTTIMEOUT => 5,
      CURLOPT_TIMEOUT => 10
    ]);

    $resposta = curl_exec($ch);
    $erroApi = null;
    $minimo = null;
    $vigencia = null;

    if ($resposta === false) {
      $erroApi = "Erro ao consultar a API: " . curl_error($ch);
    } elseif (curl_getinfo($ch, CURLINFO_HTTP_CODE) !== 200) {
      $erroApi = "A API do Banco Central respondeu com um erro.";
    } else {
      $dados = json_decode($resposta, true);
      if (isset($dados[0]["valor"], $dados[0]["data"]) && is_numeric($dados[0]["valor"])) {
        $minimo = (float) $dados[0]["valor"];
        $vigencia = $dados[0]["data"];
      } else {
        $erroApi = "A API não retornou um valor válido para o salário mínimo.";
      }
    }
    curl_close($ch);

    $entradaSalario = $_GET["sal"] ?? "";
    $salario = is_numeric($entradaSalario) ? (float) $entradaSalario : $minimo;
  ?>
  <main>
    <h1>Informe seu salário</h1>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
      <label for="sal">Salário</label>
      <input type="number" name="sal" id="sal" value="<?=htmlspecialchars((string) $salario, ENT_QUOTES, "UTF-8")?>" step="0.01" min="0">
      <?php if ($erroApi): ?>
        <p><?=$erroApi?></p>
      <?php else: ?>
        <p>Considerando o salário mínimo de <strong>R$<?=number_format($minimo, 2, ",", ".")?></strong>, vigente desde <?=$vigencia?>.</p>
      <?php endif; ?>
      <input type="submit" value="Calcular">
    </form>
  </main>
  <section>
    <h2>Resultado Final</h2>
    <?php
      if ($erroApi) {
        echo "<p>Não foi possível calcular sem o valor atualizado do salário mínimo.</p>";
      } elseif ($salario === null || $salario < 0) {
        echo "<p>Informe um salário válido.</p>";
      } else {
        $salarioCentavos = (int) round($salario * 100);
        $minimoCentavos = (int) round($minimo * 100);
        $tot = intdiv($salarioCentavos, $minimoCentavos);
        $dif = $salarioCentavos % $minimoCentavos;

        echo "<p>Quem recebe um salário de R\$ " . number_format($salario, 2, ",", ".") . " ganha <strong>$tot</strong> salários mínimos + R\$ " . number_format($dif / 100, 2, ",", ".") . ".</p>";
      }
    ?>
  </section>
</body>
</html>