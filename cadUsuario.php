<?php
    if(!isset($_SESSION)) session_start();

    if(!isset ($_SESSION['UsuarioID']) or $_SESSION['UsuarioNivel'] !=1 ){
        session_destroy();
        header("Location: index.php"); exit;
    }
?>

<html>
<head>
    <meta charset = "utf-8"/>
    <meta name="viewport" conteent="width=device-width, initial-scale=1"> 
    <title>Cadastro do Usuário</title>
</head>
    <body>
    <form name="form1" method="post" action="cadUsuario.php" >
    <table>
    <tr><td>Usuário</td> <td><input type="text" name="txt_usuario"></td></tr>
    <tr><td>Senha</td> <td><input type="text" name="txt_senha"></td></tr>
    <tr><td>Nivel</td> <td><input type="text" name="txt_nivel"></td></tr>
    </table>
    <input type="submit" name="Submit" value="Cadastrar">
    </form>
   <?php 

        require_once('conn.php');
        $usuario=$_POST['txt_usuario'];
        $senha=$_POST['txt_senha'];
        $nivel=$_POST['txt_nivel'];

        if (empty($usuario) || empty($senha) || empty($nivel)){
        echo "por favor, preencha todos os dados ";
        }
        else {
            $insere=mysqli_query($conn, "INSERT INTO usuarios(usuario,senha,nivel) values('$usuario', '$senha', '$nivel')") or die(mysqli_error());
        }
   ?>
</body>

</html>