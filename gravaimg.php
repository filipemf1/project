<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>arquivos</title>
</head>
<div align="center">
    <h1>ARQUIVOS</h1>
</div>
<form  method="POST" action="" enctype="multipart/form-data">
    <table id="cod_table">
        <tr>
            <td>Certidão de Nascimento</td>
            <td><input type="file" name="certidao" class="input"  /></td>
        </tr>
        <tr>
            <td>Comprovante de residencia</td>
            <td><input type="file" name="residencia" class="input"  /></td>
        </tr>
        <tr>
            <td>Declaração da Escola Original</td>
            <td><input type="file" name="declaracao" class="input"  /></td>
        </tr>
        <tr>
            <td>Histórico das series Cursadas</td>
            <td><input type="file" name="historico" class="input" /></td>
        </tr>
        <tr>
            <td>CPF do responsável financeiro</td>
            <td><input type="file" name="cpfresponsavel" class="input"  /></td>
        </tr>
        <tr>
            <td>RG do responsável financeiro</td>
            <td><input type="file" name="rgresponsavel" class="input"  /></td>
        </tr>
        <tr>
            <td>Declaração de adimplência</td>
            <td><input type="file" class="input" name="adimplencia" /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="cadastrar" id="btncad"></td>
        </tr>
    </table>
</form>
</html>