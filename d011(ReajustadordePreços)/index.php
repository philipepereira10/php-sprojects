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
        //Área de Declarações
        $preco = $_REQUEST["preco"] ?? "0";
        $reaj = $_REQUEST["reaj"] ?? "0";
            ?>
        <main>
            <h1>Reajustador de Preços</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
                <label for="preco">Preço do Produto(€):</label>
                <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">

                <label for="reaj">Qual será o percentual de reajuste? (<strong> <span id="p"> ?</span> % </strong>)</label>
                <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>">

                <input type="submit" value="Reajustar">
            </form>
        </main>

        <?php

            $aumento = $preco * $reaj / 100;
            $novo = $preco + $aumento;
        ?>

       <section id="resultado">
        
            <h1>Resultado:</h1>
            <p>O produto que custava <?= number_format($preco, 2, ",", ".")?>€, com <strong><?=number_format($reaj, 2, ",", ".")?>% de aumento</strong> vai passar a custar <strong><?=number_format($novo, 2, ",", ".")?>€</strong> a partir de agora.</p>
        </section>

        <script>
            //Declarações automaticas
            mudaValor()

            function mudaValor(){
                p.innerText = reaj.value;
            }
        </script>
        <footer>
             <p style="text-align: center;">&copy; Philipe Santos</p>
        </footer>
</body>
</html>