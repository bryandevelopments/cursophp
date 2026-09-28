<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Conversor de Moedas</h1>
  <?php
    // cotação copiada do Google
    $cotação = 5.13;

    // Quanto R$ você tem?
    $real = $_REQUEST['din'] ?? 0;

    // Equivalência em dólar
    $dólar = $real / $cotação;

    // Mostrar o Resultado
    // echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US \$" . number_format($dolar, 2, ",", ".");

    // Formatação de moedas com internalização!
    //Biblioteca intl (Internallization PHP)

    $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "<p]>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dólar, "USD") . "</p>";
  ?>
  <button onclick="javascript:history.go(-1)">Voltar</button>
  </main>
</body>
</html>