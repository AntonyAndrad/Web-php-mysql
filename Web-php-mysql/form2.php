<?php
if(isset($_POST["submit"]))
{
    include_once("config.php");
    $nome = $_POST["nome"];
    $especialidade= $_POST["especialidade"];
    $numero_tel = $_POST["numero_tel"];
    $email = $_POST["email"];

    $response = mysqli_query($conexao, "INSERT INTO instrutor(nome,especialidade,numero_tel,email) VALUES('$nome','$especialidade','$numero_tel','$email')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="form2.css">
    <title>Form2</title>
</head>
<body>
    <form action="form2.php" method="post">
        <label for="user">Nome</label>
        <input type="text" name="nome" id="nome">
        
        <label for="user">Especialidade</label>
        <input type="text" name="especialidade" id="nome">
        
        <label for="user">Número de telefone</label>
        <input type="text" name="numero_tel" id="nome">
        
        <label for="user">Email</label>
        <input type="text" name="end_email" id="nome">
        </div>
        <input type="submit" value="Enviar" name="submit">
       
        
        </form> 
</body>
</html>