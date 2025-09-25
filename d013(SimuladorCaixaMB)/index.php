<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            width:180px;
            margin: 3px;
        }
    </style>
</head>
<body>

    <?php
      $levantamento = $_GET["lev"] ?? 0;

      
      ?>
        <main>
            <h1>Caixa MultiBanco</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
                <label for="lev">Qual  o montante que deseja levantar?(€)<sup>*</sup></label>
                <input type="number" name="lev" id="lev" min="0" step="5" value="<?=$levantamento?>" required>


                <p style="font-size: 0.8em;"><sup>*</sup>Notas disponíveis: 100€, 50€, 10€ e 5€.</p>
                <input type="submit" value="Levantar">
            </form>
        </main>

        <?php

            $resto = $levantamento;
            // Levantamento de 100€
            $tot100 = floor($resto / 100); // floor funciona como tag int 
            $resto %= 100; //mesmo que $resto = $resto % 100;

            //Levantamento de 50€
            $tot50 = floor($resto / 50);
            $resto %= 50;

            //Levantamento de 10€
            $tot10 = floor($resto / 10);
            $resto %= 10;

            //Levantamento de 5€
            $tot5 = floor($resto / 5);
            $resto %= 5;
        ?>

       <section id="resultado">
        
            <h1>Levantamento de <?=number_format($levantamento,2,",", ".")?>€ efetuado</h1>
            <p>O caixa MultiBanco vai levantar as seguintes notas:</p>
            <ul>
                <li style="text-align: left;"> <img src="imagens/100euros.jpg" alt="Nota de 100€" class="nota" > X<?=$tot100?></li>
                <li style="text-align: left;"><img src="imagens/50-euros.jpg" alt="Nota de 50€" class="nota"> X<?=$tot50?></li>
                <li style="text-align: left;"><img src="imagens/10euros.jpeg" alt="Nota de 10€" class="nota"> X<?=$tot10?></li>
                <li style="text-align: left;"><img src="imagens/5eruos.jpg" alt="Nota de 5€" class="nota"> X<?=$tot5?></li>
            </ul>
        </section>

         <footer>
             <p style="text-align: center;">&copy; Philipe Santos</p>
        </footer>

</body>
</html>