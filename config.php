<?php
// Desclarando variáveis.
$login = $_POST["login"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$genero = $_POST["genero"];
$idade = $_POST["idade"];
$celular = $_POST["celular"];
$facebook = $_POST["facebook"];
$twitter = $_POST["twitter"];
$github = $_POST["github"];




//verificar os registros
if(empty($nome)){
  $erro .= "NOME NAO INFORMADO!";
}
if(empty($email)){
  $erro .= "E-MAIL NAO INFORMADO!";
}
if(empty($senha)){
  $erro .= "SENHA NAO INFORMADA!";
}
//caso registro esteja ok
if(empty($erro)){
    //inclui dado no banco
    //conectar ao banco
    mysql_connect("localhost", "root", "")
        or die("Erro ao conectar ao banco:".mysql_error());
    //selecionar o database
    mysql_select_db("escola")
        or die("Erro ao selecionar o database: ".mysql_error());
        
    //executar comando
    $sql = "INSERT INTO alunos (email, nome, senha) ";
    $sql .= "VALUES('$email', '$nome', '$senha')";
    
    mysql_query($sql)
        or die("Erro no SQL: ".mysql_error());

    mysql_close();
    header("Location:listar.php");
    exit();
}else{
    //caso registro errado
    //redireciona para incluir.php
    header("Location:incluir.php?erro=$erro");
    exit();

}

?>
