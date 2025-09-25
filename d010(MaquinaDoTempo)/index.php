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
        $atual = date("Y");
        $nasc = $_GET["nasc"] ?? "2000";
        $ano = $_GET["ano"] ?? $atual;
    ?>
        <main>
            <h1>Calculando a sua idade:</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
                <label for="nasc">Em que ano você nasceu?</label>
                <input type="number" name="nasc" id="nasc" max="<?=($atual-1)?>" value="<?= $nasc?>" min="1900">
                <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
                <input type="number" name="ano" id="ano" value="<?= $ano?>"  min="1900">

                <input type="submit" value="Qual será a minha idade?">
            </form>
        </main>

       <section id="resultado">
            <?php
        
                $idade = $ano - $nasc;
            ?>
            <h1>Resultado:</h1>
            <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?></strong> anos em <strong><?=$ano?></strong>!</p>
        </section>

         <footer>
             <p style="text-align: center;">&copy; Philipe Santos</p>
        </footer>
</body>
</html>