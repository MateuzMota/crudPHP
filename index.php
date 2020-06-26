<?php
if(!empty($_GET["erro"])){
?>
<script language="JavaScript">
        alert('<?=$_GET["erro"]?>');
</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>Faça login</title>
    <style>
    html {
        margin: 0px;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-image: url("img/fundo2.jpg");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    body {
        margin: 0px;
    }
    </style>
</head>
    <body>
        <form style="padding-top: 13px; padding-bottom: 13px; opacity: 0.92;" action="config.php" method="post">

            <h1 style="margin-bottom: 20px;">Faça login</h1>

            <fieldset style="margin: 2px;">

                <label for="loginId">Login:</label>
                <input type="text" id="loginId" name="login">

                <label for="senhaId">Senha:</label>
                <input style="margin-bottom: 20px;" type="password" id="senhaId" name="senha">
            </fieldset>

        <button type="submit">Entrar</button>
        <li class="botao" style="list-style: none;" onclick="window.location.href='cadastrar.php'">Cadastrar</a></li>
        </form>
    </body>
</html>