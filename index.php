<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="validacao.php" method="post">
    <fieldset>
	<legend> Dados de Login</legend>
	   <label for ="txtusuario"> Usuario</label>
	   <input type="text" name="usuario" id="usuario" maxlength="25"/>
	   <label type="senha"> Senha</label>
	   <input type="password" name="senha" id="senha" />

       <input type="submit" value="Entrar" />
</fieldset>
</form>


</body>
</html>