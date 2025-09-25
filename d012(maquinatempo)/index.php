<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
      $total = $_GET["segu"] ?? 0;
      

       
            ?>
        <main>
            <h1>Calculadora de Tempo</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
                <label for="preco">Qual é o total de segundos?</label>
                <input type="number" name="segu" id="segun" min="0" step="1" value="<?=$total_segundos?>" required>


                <input type="submit" value="Calcular">
            </form>
        </main>

        <?php

            $sobra = $total;
            //total de semanas
            $semana = (int)($sobra / 604_800); // 1 semana tem 604,800 segundos
            $sobra = $sobra % 604_800; // sobra variavel da sobra de uma conta de divisao
            //Total de dias 
            $dia = (int)($sobra / 86_400); // 1 dia tem 86,400 segundos
            $sobra = $sobra % 86_400;
            //Total de horas
            $hora = (int)($sobra / 3_600); // 1 hora tem 3,600 segundos
            $sobra = $sobra % 3_600;
            //total de minutos
            $minuto = (int)($sobra / 60);
            $sobra = $sobra % 60;
            //total de segundos
            $segundo = $sobra;

        ?>

       <section id="resultado">
        
            <h1>Totalizando tudo:</h1>
            <p>Analisando o valor que você digitou <strong><?=number_format($total, 0, ",", ",")?> segundos</strong> equivalem a um total de:</p>
            <ul>
                <li><?=$semana?> semanas</li>
                <li><?=$dia?> dias</li>
                <li><?=$hora?> horas</li>
                <li><?=$minuto?> minutos</li>
                <li><?=$segundo?> segundos</li>
            </ul>
        </section>

         <footer>
             <p style="text-align: center;">&copy; Philipe Santos</p>
        </footer>
</body>
</html>