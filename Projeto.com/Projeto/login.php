<!DOCTYPE html>
<?php
//conexão com o banco de dados
include("bd-connect.php");

if(isset($_POST['entrar'])){
    $erros = array();
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
        // If para verificar se existe foi digitado algo no Input
            if(empty($email) or empty($senha)){
                $erros[] = "<li>Preencha os dados para poder Continuar </li>";
            }else{
                //$sql = "SELECT email FROM usuários WHERE email = 'email' ";
                 $resultado = mysqli_query($connect, "SELECT email FROM usuários WHERE email = 'email'" );
             }

             if(mysqli_num_rows($resultado) <= 0){
                        $erros[] = " <li> Email Invalido </li>";
             }else{
                //$slq = "SELECT * FROM usuários WHERE email = 'email' AND senha = 'senha'";
                $resultado = mysqli_query($connect, "SELECT * FROM usuários WHERE email = 'email' AND senha = 'senha'" );

                            if(mysqli_num_rows($resultado) == 1){
                                echo $resultado;
                            }else{
                                $erros[]="<li> Senha Invalida </li>";
                            }

            }
}else{
}
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Pagina Inicial</title>
</head>
<body>
<div id = "div">
        <h1>Solicite os materiais do seu almoxarifado de forma facilitada</h1>
        <?php
            if(!empty($erros)){
                foreach($erros as $erro):
                    echo $erro;
                endforeach;
            }
        ?>
        <form action="" method="POST">
            <input type = "email" id="email" name="email" placeholder = "E-mail"></br>
            <input type = "password" id="senha" name ="senha" placeholder = "Senha">
            <input type ="submit" id="entrar" name ="entrar" value = "Entrar">
        </form>
</div>   

</body>
</html>
