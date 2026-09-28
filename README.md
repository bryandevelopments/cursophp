# Curso de PHP

Repositório de estudos com exercícios e desafios desenvolvidos durante o aprendizado de PHP. Os exemplos combinam PHP, HTML e CSS e podem ser executados individualmente.

## Conteúdo

- `exercicios/`: exercícios numerados de `ex000` a `ex006`.
- `desafios/`: desafios numerados de `d01` a `d13`, incluindo a variação `d07.2`.
- Cada pasta contém uma atividade independente. Algumas incluem arquivos HTML, PHP e CSS; outras usam apenas parte deles.

Os exemplos praticam conceitos básicos como formulários, leitura de dados enviados por `GET`, cálculos em PHP e exibição de resultados em páginas HTML. O desafio `d13`, por exemplo, calcula a quantidade de notas de cada valor para um saque.

## Requisitos

- PHP 7 ou superior.
- Um navegador moderno.
- Um servidor web com suporte a PHP, como o Apache incluído no XAMPP.

## Como executar com XAMPP

1. Instale e abra o XAMPP.
2. Coloque ou clone este repositório dentro da pasta `htdocs` do XAMPP.
3. No painel do XAMPP, inicie o serviço **Apache**.
4. Acesse no navegador a pasta do exercício ou desafio que deseja executar. Por exemplo:

   - `http://localhost/cursophp/exercicios/ex006/`
   - `http://localhost/cursophp/desafios/d13/`

Para executar outro exemplo, substitua o caminho final pela pasta correspondente. Não há uma página inicial na raiz do repositório; cada atividade deve ser aberta diretamente.

## Como executar com o servidor embutido do PHP

Com o PHP instalado e disponível no terminal, abra o terminal na pasta do repositório e execute:

```bash
php -S localhost:8000
```

Depois, acesse, por exemplo, `http://localhost:8000/desafios/d13/`. Para encerrar o servidor, pressione `Ctrl+C` no terminal.

## Estrutura

```text
.
├── desafios/
│   ├── d01/
│   ├── d02/
│   ├── ...
│   ├── d07.2/
│   ├── ...
│   └── d13/
└── exercicios/
    ├── ex000/
    ├── ...
    └── ex006/
```

Este projeto tem finalidade educacional e reúne atividades feitas durante o curso.