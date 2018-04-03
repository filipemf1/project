<!DOCTYPE html>
<?php
require_once "config.php"
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html, charset=utf-8">
    <link rel="icon" href="imagens/favicon.ico" type="image/x-icon"/>
    <title>Matricula UNASP-HT</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity= "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin= "anonymous" > 
</head>
<body>
    <div id="cadastro">
        <div align="center">
            <h1>MATRICULE-SE AQUI</h1>
        </div>
        <form method="POST" action="grava.php" enctype="multipart/form-data">
            <table id="cad_table">
                <tr>
                    <td>Nome do Aluno:</td>
                    <td><input type="text" name="nome" id="nome" placeholder="Nome do aluno" class="txt"  / ></td>
                </tr>
                <tr>
                    <td>Nome completo do Pai:</td>
                    <td><input type="int" name="pai" id="pai" placeholder="Pai" class="txt"  / ></td>
                </tr>
                <tr>
                    <td>Nome completo da Mãe:</td>
                    <td><input type="int" name="mae" id="mae" class="txt" placeholder="Mãe"  / ></td>
                </tr>
                <tr>
                    <td>CPF do aluno:</td>
                    <td><input type="text" name="cpf" id="cpf" placeholder="CPF" class="txt"  required="cpf"/ ></td>
                </tr>
                <tr>
                    <td>RG do aluno:</td>
                    <td><input type="text" name="rg" id="rg" placeholder="RG" class="txt"  required="rg"/ ></td>
                </tr>
                <tr>
                    <td>Idade:</td>
                    <td><input type="text" name="ida" id="ida" class="txt"  / ></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="email" class="txt" required="email" / ></td>
                </tr>
                <tr>
                    <td>Telefone fixo:</td>
                    <td><input type="text" name="fix" id="fix" class="txt" / ></td>
                </tr>
                <tr>
                    <td>Telefone comercial:</td>
                    <td><input type="text" name="com" id="com" class="txt" / ></td>
                </tr>
                <tr>
                    <td>Celular:</td>
                    <td><input type="text" name="cel" id="cel" class="txt"  / ></td>
                </tr>
                <tr>
                    <td>Data de Nascimento:</td>
                    <td><label for="nasc" class="sr-only"></label>
                    <div class="input-group datepicker">
                    <input type="date" name="nasc" class="form-control date-mask" id="nasc" placeholder="dd/mm/aaaa" >
                    </div></td>
                </tr>
                <tr>
                    <td>Cidade Atual:</td>
                    <td><input type="text" name="cit" id="cit" class="txt"  / ></td>
                </tr>
                <tr>
                    <td>Estado:</td>
                    <td><select id="est" name="est" class="form-control"  onclick="return categoria(this);">
                        <option value="" selected="">Selecione</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Selecione seu curso</td>
                        <td><select id="curso" name="curso" class="form-control" onclick="return categoria(this);">

                        <option value="" selected="">Escolha o Curso</option>
                        <option value="" disabled>    ------ Educação Infantil ------</option>
                        <option value="Jardim">Infantil: Jardim</option>
                        <option value="Pré">Infantil: Pré</option>
                        <option value="Materna">Infantil: Materna</option>
						<option value="" disabled>    ------ Fundamental I ------</option>
                        <option value="1º Ano">Fundamental I: 1º Ano</option>
                        <option value="2º Ano">Fundamental I: 2º Ano</option>
                        <option value="3º Ano">Fundamental I: 3º Ano</option>
                        <option value="4º Ano">Fundamental I: 4º Ano</option>
                        <option value="5º Ano">Fundamental I: 5º Ano</option>
                        <option value="" disabled>    ------ Fundamental II ------</option>
						<option value="6º Ano">Fundamental II: 6º Ano</option>
						<option value="7º Ano">Fundamental II: 7º Ano</option>
                        <option value="8º Ano">Fundamental II: 8º Ano</option>
                        <option value="9º Ano">Fundamental II: 9º Ano</option>
                        <option value="" disabled>    ------ Ensino Medio ------</option>
                        <option value="1º Medio">Ensino Medio: 1º Ano</option>
                        <option value="2º Medio">Ensino Medio: 2º Ano</option>
                        <option value="3º Medio">Ensino Medio: 3º Ano</option>
                        <option value="" disabled>    ------ Ensino Medio Técnico em Informatica ------</option>
                        <option value="1º Técnico">Ensino Medio: 1º Ano</option>
                        <option value="2º Técnico">Ensino Medio: 2º Ano</option>
                        <option value="3º Técnico">Ensino Medio: 3º Ano</option>
                        <option value="" disabled>    ------ graduação ------</option>
                        <option value="" disabled>    ------ Curso de Pedagogia  ------</option>
                        <option value="Pedagogia 2º sem">Pedagogia 2º sem.</option>
                        <option value="Pedagogia 4º sem">Pedagogia 4º sem.</option>
                        <option value="Pedagogia 6º sem">Pedagogia 6º sem.</option>
                        <option value="Pedagogia 8º sem">Pedagogia 8º sem.</option>
                        <option value="" disabled>    ------ Curso de Administração  ------</option>
                        <option value="Administração 2º sem">Administração 2º sem.</option>
                        <option value="Administração 4º sem">Administração 4º sem.</option>
                        <option value="Administração 6º sem">Administração 6º sem.</option>
                        <option value="Administração 8º sem">Administração 8º sem.</option>
                        <option value="" disabled>    ------ Curso de Educação Física - Bacharel  ------</option>
                        <option value="EDF. Fisica Bacharel 2º sem">EDF. Fisica Bacharel 2º sem.</option>
                        <option value="EDF. Fisica Bacharel 4º sem">EDF. Fisica Bacharel 4º sem.</option>
                        <option value="EDF. Fisica Bacharel 6º sem">EDF. Fisica Bacharel 6º sem.</option>
                        <option value="EDF. Fisica Bacharel 8º sem">EDF. Fisica Bacharel 8º sem.</option>
                        <option value="" disabled>    ------ Curso de Ciências Contábeis   ------</option>
                        <option value="Contábeis 2º sem">Contábeis 2º sem.</option>
                        <option value="Contábeis 4º sem">Contábeis 4º sem.</option>
                        <option value="Contábeis 6º sem">Contábeis 6º sem.</option>
                        <option value="Contábeis 8º sem">Contábeis 8º sem.</option>
                        <option value="" disabled>    ------ Curso de Educação Física - Licenciatura   ------</option>
                        <option value="EDF. Fisica Licenciatura 2º sem">EDF. Fisica Licenciatura 2º sem.</option>
                        <option value="EDF. Fisica Licenciatura 4º sem">EDF. Fisica Licenciatura 4º sem.</option>
                        <option value="EDF. Fisica Licenciatura 6º sem">EDF. Fisica Licenciatura 6º sem.</option>
                        <option value="" disabled>    ------ Curso de Comunicação Social  ------</option>
                        <option value="Comunicação 2º sem">Comunicação 2º sem.</option>
                        <option value="Comunicação 4º sem">Comunicação 4º sem.</option>
                        <option value="Comunicação 6º sem">Comunicação 6º sem.</option>
                        <option value="Comunicação 8º sem">Comunicação 8º sem.</option>
                        <option value="" disabled>    ------ Curso de Sistemas de Informação   ------</option>
                        <option value="SIS. Informação 2º sem">SIS. Informação 2º sem.</option>
                        <option value="SIS. Informação 4º sem">SIS. Informação 4º sem.</option>
                        <option value="SIS. Informação 6º sem">SIS. Informação 6º sem.</option>
                        <option value="SIS. Informação 8º sem">SIS. Informação 8º sem.</option>
                        <option value="" disabled>    ------ Curso de Engenharia de Computação  ------</option>
                        <option value="ENG. Computação 2º sem">ENG. Computação 2º sem.</option>
                        </select></td>
                </tr>
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
        <tr>
            <td>Senha</td>
            <td><input type="password" name="senha" id="senha" placeholder="SENHA" class="txt"  /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="cadastrar" class="btn" id="btncad"></td>
        </tr>
            </table>
        </form>
        </form>
    </div>
</body>
</html>