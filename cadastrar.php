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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>Alterar Dados</title>
    <style>

    html {
        margin: 0px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-image: url("img/fundo4.jpg");
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

        <form style="opacity: 0.92;" action="config.php" method="post">

            <h1>Cadastrar</h1>

            <fieldset>
                <legend>Informações de Login</legend>

                <label for="loginId">Login:</label>
                <input type="text" id="loginId" name="login">

                <label for="emailId">Email:</label>
                <input type="email" id="emailId" name="email">

                <label for="senhaId">Senha:</label>
                <input type="password" id="senhaId" name="senha">
            </fieldset>

            <fieldset>
                <legend>Informações Pessoais</legend>

                <label for="nomeId">Nome:</label>
                <input type="text" id="nomeId" name="nome">
                <br>

                <label for="idadeId">Idade Aproximada:</label>
                <select id="idadeId" name="idade">
                    <optgroup label="Selecione sua Idade">
                        <option value="1">13-17</option>
                        <option value="2">18-22</option>
                        <option value="3">23-30</option>
                        <option value="4">31-40</option>
                        <option value="5">50-60</option>
                        <option value="6">61+</option>
                    </optgroup>
                </select>
            </fieldset>

            </fieldset>
        <button type="submit">Cadastrar</button>
        </form>

    </body>
</html>