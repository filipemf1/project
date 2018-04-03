<?php
include_once('config.php');
session_start();
$nome = $_POST['nome'];
$pai = $_POST['pai'];
$mae = $_POST['mae'];
$cpf = $_POST['cpf'];
$verificacpf = mysqli_query($con, "SELECT cpf FROM cadastro WHERE cpf= '$cpf'");
$numlinhacpf = mysqli_num_rows($verificacpf);
$rg = $_POST['rg'];
$verificarg = mysqli_query($con, "SELECT rg FROM cadastro WHERE rg= '$rg'");
$numlinharg = mysqli_num_rows($verificarg);
$ida = $_POST['ida'];
$email = $_POST['email'];
$verificaemail = mysqli_query($con, "SELECT email FROM cadastro WHERE email= '$email'");
$numlinhaemail = mysqli_num_rows($verificaemail);
$hashemail = password_hash($email, PASSWORD_DEFAULT);
$_SESSION['emaillog'] = $hashemail;
$fix = $_POST['fix'];
$com = $_POST['com'];
$cel = $_POST['cel'];
$nasc = date("Y-m-d", strtotime($_POST['nasc']));
$cit = $_POST['cit'];
$est = $_POST['est'];
$curso = $_POST['curso'];
$senha = ($_POST['senha']);
$hash = password_hash($senha, PASSWORD_DEFAULT);
$_SESSION['senha'] = $hash;
if($numlinhacpf != 0 AND $numlinhaemail != 0 AND $numlinharg == 0){
    include_once('cadastro.php');
    echo "<script>alert('Este CPF e Email já estão cadastrados.'); history.back(cpf, email);</script>";
}
else if($numlinhacpf != 0 AND $numlinharg != 0 AND $numlinhaemail == 0){
    include_once('cadastro.php');
    echo "<script>alert('Este CPF e RG já estão cadastrados.'); history.back(cpf, rg);</script>";
}
else if($numlinharg != 0 AND $numlinhaemail != 0 AND $numlinhacpf == 0){
    include_once('cadastro.php');
    echo "<script>alert('Este RG e Email já estão cadastrados.'); history.back(rg, email);</script>";
}
else if($numlinhacpf != 0 AND $numlinharg != 0 AND $numlinhaemail != 0){
    include_once('cadastro.php');
    echo "<script>alert('Este CPF, RG e Email já estão cadastrados.'); history.back(cpf, rg, email);</script>";
}
else if($numlinhacpf != 0){
    include_once('cadastro.php');
    echo "<script>alert('Este CPF já esta cadastrado.'); history.back(cpf);</script>";
}
else if($numlinharg != 0){
     include_once('cadastro.php');
    echo "<script>alert('Este RG já esta cadastrado.'); history.back(rg);</script>";
}
else if($numlinhaemail != 0){
    include_once('cadastro.php');
    echo "<script>alert('Este Email já esta cadastrado.'); history.back(email);</script>";
}else{
$salva = "INSERT INTO cadastro (nome, pai, mae, cpf, rg, idade, email, emaillog, fixo, comerc, cel, nasc, cidade, estado, curso, senha) VALUES ('$nome', '$pai', '$mae', '$cpf', '$rg', '$ida', '$email', '$hashemail', '$fix', '$com', '$cel', '$nasc', '$cit', '$est', '$curso', '$hash')";

$result_salva = mysqli_query($con, $salva);

$certidao = '';
$residencia = '';
$declaracao = '';
$historico = '';
$cpfresponsavel = '';
$rgresponsavel = '';
$adimplencia = '';

$tester = $nome ."_". $cpf;
$pathName = "upload/{$tester}";
$cria = mkdir($pathName, 0777, true);

if($_FILES['certidao']['size'] != 0){
$extensao = strtolower(substr($_FILES['certidao']['name'], -4));
$certidao = $nome ."_Certidao". "_". $cpf . $extensao;
$diretorio = "upload/$tester/";
move_uploaded_file($_FILES['certidao']['tmp_name'], $diretorio . $certidao);
}
if($_FILES['residencia']['size'] != 0){
    $extensao = strtolower(substr($_FILES['residencia']['name'], -4));
    $residencia = $nome ."_Residencia"."_". $cpf . $extensao;
    $diretorio = "upload/$tester/";
    move_uploaded_file($_FILES['residencia']['tmp_name'], $diretorio . $residencia);
}
if($_FILES['declaracao']['size'] != 0){
    $extensao = strtolower(substr($_FILES['declaracao']['name'], -4));
    $declaracao = $nome ."_Declaracao"."_". $cpf . $extensao;
    $diretorio = "upload/$tester/";
    move_uploaded_file($_FILES['declaracao']['tmp_name'], $diretorio . $declaracao);
}
if($_FILES['historico']['size'] != 0){
    $extensao = strtolower(substr($_FILES['historico']['name'], -4));
    $historico = $nome ."_Historico"."_". $cpf . $extensao;
    $diretorio = "upload/$tester/";
    move_uploaded_file($_FILES['historico']['tmp_name'], $diretorio . $historico);
}
if($_FILES['cpfresponsavel']['size'] != 0){
    $extensao = strtolower(substr($_FILES['cpfresponsavel']['name'], -4));
    $cpfresponsavel = $nome ."_CPF_Responsavel"."_". $cpf . $extensao;
    $diretorio = "upload/$tester/";
    move_uploaded_file($_FILES['cpfresponsavel']['tmp_name'], $diretorio . $cpfresponsavel);
}
if($_FILES['rgresponsavel']['size'] != 0){
    $extensao = strtolower(substr($_FILES['rgresponsavel']['name'], -4));
    $rgresponsavel = $nome ."_RG_Responsavel"."_". $cpf . $extensao;
    $diretorio = "upload/$tester/";
    move_uploaded_file($_FILES['rgresponsavel']['tmp_name'], $diretorio . $rgresponsavel);
}
if($_FILES['adimplencia']['size'] != 0){
    $extensao = strtolower(substr($_FILES['adimplencia']['name'], -4));
    $adimplencia = $nome ."_Adimplencia"."_". $cpf . $extensao;
    $diretorio = "upload/$tester/";
    move_uploaded_file($_FILES['adimplencia']['tmp_name'], $diretorio . $adimplencia);
}
$sqli_code = "INSERT INTO arquivo(codigo, certidao, residencia, declaracao, historico, cpfresponsavel, rgresponsavel, adimplencia, data) VALUES (null, '$certidao', '$residencia', '$declaracao', '$historico', '$cpfresponsavel', '$rgresponsavel', '$adimplencia', NOW())";
if (mysqli_query($con, $sqli_code)){
    $msg = "arquivo enviado com sucesso!";
    }
    else{
    $msg = "Falha ao enviar arquivo.";
    }
}
?>