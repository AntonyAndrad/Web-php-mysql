
<?php
if(isset($_POST["submit"]))
{
    include_once("config.php");
    $nome = $_POST["nome"];
    $data_nasc = $_POST["data_nasc"];
    $genero = $_POST["genero"];
    $endereco = $_POST["endereco"];
    $numero_tel = $_POST["numero_tel"];
    $end_email= $_POST["end_email"];

    $response = mysqli_query($conexao, "INSERT INTO aluno(nome,data_nasc,genero,endereco,numero_tel,end_email) VALUES('$nome','$data_nasc','$genero','$endereco','$numero_tel','$end_email')");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="form1.css">
    <title>Form1</title>
</head>
<body>
<div>
<form action="form1.php" method="post">
    <label for="user">Nome</label>
    <input type="text" name="nome" id="nome">
    
    <label for="user">Data de nascimento</label>
    <input type="date" name="data_nasc" id="nome">
    
    <label for="user">Genero</label>
    <input type="text" name="genero" id="nome">
    
    <label for="user">Endereço</label>
    <input type="text" name="endereco" id="nome">
    
    <label for="user">Número de telefone</label>
    <input type="text" name="numero_tel" id="nome">
    
    <label for="user">Email</label>
    <input type="text" name="end_email" id="nome">
    </div>
    <input type="submit" value="Enviar" name="submit">
    </form> 
</body>
</html>