<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número:</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <main>
            <h1>Informe um número:</h1>
            <form action="numero.php" method="post">
                <label for="numero">Número</label>
                <input type="number" name="num" id="num">
                
                <input type="submit" value="Calcular Raízes">
            </form>
        </main>

       <section id="resultado">
            <h1>Resultado Final:</h1>
            <?php
                   $soma = $valor1 + $valor2;

                echo "<p>A soma entre os valores $valor1 e $valor2 é igual a <strong>$soma</strong>.</p>";
            ?>
        </section>

         <footer>
             <p>&copy; Philipe Santos</p>
        </footer>
</body>
</html>