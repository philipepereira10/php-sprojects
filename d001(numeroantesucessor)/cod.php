<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <div id="resultado">
         <h1>Resultado final:</h1>
    <p>

        <?php
             $n = $_GET["num"] ?? 0; // Se o utlizador nao digitar nenhum numero será igual a 0

            // Se estiver vazio ou não for número, corrige para 0
            if ($n === "" || !is_numeric($n)) {
                $n = 0;
            }


            $a = $n -1;  //$a de antecessor
            $s= $n + 1;  //$s de sucessor 

            echo "O número escolhido foi: $n"; 
            echo " <br> O seu antecessor  é $a";
            echo " <br> O seu sucessor de é $s";



        ?>


    </p>
    </div>
                <br>
    <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>

     <footer>
             <p style="text-align: center;">&copy; Philipe Santos</p>
        </footer>
</body>
</html>