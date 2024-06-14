<html>
<head>
    <title>Excluir usuario</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-">

</head>
    <body>
        <form name="form" method="post" action="teste_seleciona.php">
            <br>
        <?php
            require_once('conn.php');
            $sql=mysqli_query($conn, "SELECT * FROM usuarios");

    While($linha=mysqli_fetch_array($sql))
    {
        $id=$linha['id'];
        $usuario=$linha['usuario'];
        $senha=$linha['senha'];
        $nivel=$linha['nivel'];
   
   
        echo"<br><br>";

        echo"<table><tr><td> Id do usuario </td><td>$id</td>";
        echo"<tr><td>Usuario</td><td> $usuario</td>";
        echo "<tr><td>Senha</td><td> $senha</td>";
        echo "<tr><td>Nivel</td><td> $nivel</td></table";
    }


        ?>
        </from>
</body>

    </html>