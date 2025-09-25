<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número:</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php

        $valor1 = $_GET["v1"] ?? 0;
        $peso1 = $_GET["p1"] ?? 1;
        $valor2 = $_GET["v2"] ?? 0;
        $peso2 = $_GET["p2"] ?? 1;

    ?>
        <main>
            <h1>Médias Aritméticas</h1>
            <h3>A média aritmética é calculada somando todos os valores de um conjunto e dividindo pela quantidade de valores. Já a média ponderada, ou média aritmética ponderada, é usada quando alguns valores têm mais relevância ou "peso" que outros. Para calculá-la, multiplica-se cada valor pelo seu peso, soma-se esses produtos e, por fim, divide-se pela soma de todos os pesos. </h3>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
                <label for="v1">1º Valor:</label>
                <input type="number" name="v1" id="v1" required value="<?= $valor1?>"> 
                
                <label for="p1">1º Peso:</label>
                <input type="number" name="p1" id="p1" min="1"  required value="<?= $peso1?>">

                <label for="v2">2º Valor:</label>
                <input type="number" name="v2" id="v2" required  value="<?= $valor2?>">

                <label for="p2">2º Peso:</label>
                <input type="number" name="p2" id="p2"  min="1" required value="<?= $peso2?>">
                
                <input type="submit" value="Calcular Médias">
            </form>
        </main>

       <section id="resultado">

       <?php
            $ma = ($valor1 + $valor2) / 2;
            $mp = ($valor1 * $peso1 + $valor2 * $peso2)/($peso1+$peso2);
       ?>
            <h1>Resultado Final:</h1>
            <p>Analisando os valores <?= $valor1?> e <?=$valor2?>:</p>

            <ul>
                <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($ma,2, ",", ".")?>.</li>
                <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?=number_format($mp,2, ",", ".")?>.</li>
            </ul>
          
        </section>

         <footer>
             <p style="text-align: center;">&copy; Philipe Santos</p>
        </footer>
</body>
</html>