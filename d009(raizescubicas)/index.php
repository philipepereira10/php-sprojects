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
        $numero = $_GET["num"] ?? 1;
    ?>
        <main>
            <h1>Informa um Número:</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
                <label for="num">Número</label>
                <input type="number" name="num" id="num" value="<?= $numero?>">
                <input type="submit" value="Calcular Raízes">
            </form>
        </main>

       <section id="resultado">
            <h1>Resultado Final:</h1>
            <?php
                $rq = $numero ** (1/2);
                $rc = $numero ** (1/3);

                echo "<p>Analisando o número <strong>$numero</strong>, temos:<br></p>";
                echo "<ul><li>A sua raiz quadrade é de <strong> " . number_format($rq, 2, ",", "."). "</strong></li>";
                echo "<li>A sua raiz cúbica é de  <strong>" . number_format($rc, 2, ",", "."). "</strong></li></ul>";
            ?>
        </section>

         <footer>
             <p style="text-align: center;">&copy; Philipe Santos</p>
        </footer>
</body>
</html>