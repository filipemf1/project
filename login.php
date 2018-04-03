<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="login">
    <div align="center">
    <form method="POST" action="verificalogin.php">
    <table id=log_table>
    <tr>
    <td>Email</td>
    <td><input type="text" name="email" id="email" placeholder="EMAIL" class="txt"  / ></td>
    </tr>
    <tr>
    <td>Senha</td>
    <td><input type="password" name="senha" id="senha" placeholder="SENHA" class="txt"  /></td>
    </tr>
    <tr>
    <td colspan="2"><input type="submit" value="logar" nome="logar" id="btnlog" /></td>
</tr>
    <td><a href="cadastro.php">Cadastrar</a></td>
    </table>
    </form>
    </div>
</div>
</body>
</html>