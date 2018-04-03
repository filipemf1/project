<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta charset="utf-8">
        <title>Lista de cadastro</title>
        <link type="text/css" href="style.css" rel="stylesheet">
        <script type="text/jscript" src="script.js"></script>
        <link rel="stylesheet" href="fontawesome.min.css">
    </head>
    <body>
    <div align="center">
        <h1 class="titulo">Lista de cadastro</h1>
    </div>
        <table width="100%" border="1" bordercolor="#EEE" cellspacing="0" cellpadding="10">
            <tr>
                <td><strong>Nome</strong></td>
                <td><strong>Pai</strong></td>
                <td><strong>Mãe</strong></td>
                <td><strong>CPF</strong></td>
                <td><strong>RG</strong></td>
                <td><strong>Idade</strong></td>
                <td><strong>Email</strong></td>
                <td><strong>Fone fixo</strong></td>
                <td><strong>fone Comercial</strong></td>
                <td><strong>Celular</strong></td>
                <td><strong>nascimento</strong></td>
                <td><strong>Cidade</strong></td>
                <td><strong>UF</strong></td>
                <td><strong>Curso</strong></td>
</tr>
<?php
include("config.php");
$seleciona=mysqli_query($con, "SELECT * FROM cadastro order by id desc");
while($campo=mysqli_fetch_array($seleciona)){

    $nome = $campo["nome"];
    $pai = $campo["pai"];
    $mae = $campo["mae"];
    $cpf = $campo["cpf"];
    $rg = $campo["rg"];
    $idade = $campo["idade"];
    $email = $campo["email"];
    $fixo = $campo["fixo"];
    $comerc = $campo["comerc"];
    $cel = $campo["cel"];
    $nasc = $campo["nasc"];
    $cit = $campo["cidade"];
    $estado = $campo["estado"];
    $curso = $campo["curso"];
    ?>
<tr>
    <td><?=$nome?></td>
    <td><?=$pai?></td>
    <td><?=$mae?></td>
    <td><?=$cpf?></td>
    <td><?=$rg?></td>
    <td><?=$idade?></td>
    <td><?=$email?></td>
    <td><?=$fixo?></td>
    <td><?=$comerc?></td>
    <td><?=$cel?></td>
    <td><?=$nasc?></td>
    <td><?=$cit?></td>
    <td><?=$estado?></td>
    <td><?=$curso?></td>
</tr>
<?php }?>
</table>
</body>
</html>