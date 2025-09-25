<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <main>
        <h1>Trabalhando com números aleatórios:</h1>
        </main>
    
        <div id="resultado">
       <?php

        
        $min = 0;
        $max = 100;

        $num = mt_rand($min, $max);
        // rand() = 1951 mais antigo
        // mt_rand() = 1997 (mais atualizado)
        // random_int () gera números aleatórios criptograficamente seguros //leva tempo para ser gerado
        
        echo "<p>Gerando um número entre 0 e 100...</p> <br> ";
        echo "O número gerado foi <strong>$num<strong>";
       ?>

        
       <button onclick="javascript:document.location.reload()">&#x1F504;  Gerar outro</button>
        </div>

         <footer>
             <p style="text-align: center;">&copy; Philipe Santos</p>
        </footer>
</body>
</html>