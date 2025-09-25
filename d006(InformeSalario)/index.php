<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Desafio:</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    $minimo = 870;
    $salario = $_GET["sal"] ?? $minimo;

?>
        <main>
            <h1>Informe o seu salário:</h1>
            <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
                <label for="sal">Salário(€)</label>
                <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
                
            <p>Considerando o salário mínimo de <strong> €<?=number_format($minimo, 2, ",", ".")?></strong></p>
                <input type="submit" value="Calcular">
            </form>
        </main>

       <section id="resultado">
            <h1>Resultado Final:</h1>
            <?php
                
                $tot = intdiv($salario, $minimo);
                $dif = $salario % $minimo;

                echo "<p>Quem recebe um sálario mínimo de " . number_format($salario, 2, ",", ".").  "€ ganha <strong> $tot salários mínimos +€" . number_format($dif, 2, ",", ".") . "</strong></p>"

            ?>
        </section>
         <footer>
             <p style="text-align: center;">&copy; Philipe Santos</p>
        </footer>
</body>
</html>