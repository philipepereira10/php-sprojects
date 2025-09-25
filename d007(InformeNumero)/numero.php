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

    <h1>Analisador de Número Real</h1>
    <?php 

        $num = $_POST["n"] ?? 0;  //Caso nao seja enviado nenhum numero ?? igual a 0; //POST OU REQUEST $REQUEST OU $POST

        echo " <p>Analisando o número <strong>" . number_format($num, 3 , ",", ".") . " </strong> informado pelo utilizador: </p>";

        $int = (int) $num;
        $fra =  $num - $int;

        echo "<ul><li> A parte inteira do número é <strong>" .number_format($int, 0, ",", ".") . "</strong>.</li>";

        echo "<li> A parte fracionária do número é <strong>" . number_format($fra, 3, ",", "."). "<strong>. </li> </ul>";
    ?>

    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

        <footer>
             <p style="text-align: center;">&copy; Philipe Santos</p>
        </footer>
    
</body>
</html>