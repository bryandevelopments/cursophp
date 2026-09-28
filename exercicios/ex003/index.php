<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos no PHP</title>
</head>
<body>
  <h1>Teste de tipos primitivos</h1>
  <?php
    // 0x = hexadecimal, 0b = binário, 0 = octal
    // $num = 010;
    // echo "O valor da variável é $num";

    // $v = "Bryan";
    // var_dump($v);

    // $num = (int) 3e2; // 3 x 10² coerção
    // echo "O valor é $num"; 

    // $num = (float) "950";
    // var_dump($num);

    // $casado = false;
    // var_dump($casado);

    // print "O valor de casado é $casado";

    // $vet = [6, 2.5, "Maria", 3, false];
    // var_dump($vet);

    // class Pessoa {
    //   private string $nome;
    // }
    // $p = new Pessoa;
    // var_dump($p); 

    // print "\u{1F418}";
    // print '\u{1F418}';

    // echo "\u{1F596}";
///////////////////////////////////////////////////////////////////
    // $nom = "Rodrigo";
    // $snom = "Nogueira";

    // echo "$nom \" Minotauro \" $snom"; // sequência de escape
    // echo "$nom \n $snom"; // quebra de linha
    // echo "$nom \t $snom"; // tabulação

    ///////////////////////////////////////////////////////////////
    // // Heredoc
    // $canal = "Curso em video";
    // $ano = date('Y');
    // echo <<< FRASE
    //     Olá Galera do $canal!
    //         Tudo bem com vocês neste ano de $ano?
    //     Abraços \u{1F596}
    //   FRASE;

    // Nowdoc

    $curso = "PHP";
    $ano = date('Y');

    echo <<< 'FRASE'
        Estou estudando
            $curso em $ano 
      FRASE;
    ?>
</body>
</html>
