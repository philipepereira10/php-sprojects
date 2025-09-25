<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 

<br><br>
    <main>
            <?php

    //Cotaçáo  
    $cotacao = 1.17;

    //Quanto tenho
    $euro = $_REQUEST["din"] ?? 0;

    //Equivalencia em dólar
    $dolar = $euro / $cotacao;

    //Mostrar Resultado

    // 1 forma simples de mostrar
    // echo "Seus   " . number_format($euro, 2, ",",".") . " € equivalem a " . number_format($dolar, 2, ",", "."). " $" ;

    //Formatação de moedas com intercionalização
    $padrão = numfmt_create("pt_PT", NumberFormatter::CURRENCY);

    echo "<p>Os seus   " . numfmt_format_currency($padrão, $euro, "EUR") . "  equivalem a <strong>" . number_format($dolar, 2, ",", "."). "<strong>  $</p>" ;

    ?>

    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
     <footer>
             <p style="text-align: center;">&copy; Philipe Santos</p>
        </footer>

    </body>
</html>