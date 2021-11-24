<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        if(isset($_POST)){
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        echo "$nome e essa é sua senha $senha";
    }else{
        echo "Digite os valores";
        }
    ?>
</head>
<body>
    <form name="formulario" action="" method="POST">
        Nome <input type="text" id="nome" name="nome">
        senha <input type="password" id="senha" name="senha">
        <button  type= "submit" id="button" name="button">Enviar</button>
    </form>
</body>
</html>