<?php

include_once('config.php');

if (isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    // $conexao->query($conexao, "INSERT INTO usuarios(nome,email,telefone,cpf,sexo,data_nasc,endereco,cidade,estado) VALUES ('$nome','$email','$telefone','$cpf','$sexo','$data_nasc','$endereco','$cidade','$estado')");
    
    $result = $conexao->query("INSERT INTO desbravadores (nome, email) VALUES ('$nome', '$email')");

    header('Location: login.php');

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="shortcut icon" href="imagem/favicon.ico" type="image/x-icon">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: url(imagem/logo\ clube.png);
            background-size: cover;
            background-position: center center;
            height: 100vh;
        }
        .box {
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 15px;
            border-radius: 15px;
            width: 25%;
            background-color: #f2cb07;
            color: #0b0b0d;
        }
        @media (max-width: 760px) {
            .box {
                width: 55%;
            }
        }
        fieldset {
            border: 3px solid #bf1a0b;
        }
        legend {
            border: 1px solid #bf1a0b;
            padding: 10px;
            text-align: center;
            background-color: #f2cb07;
            border-radius: 5px;
        }
        .inputbox {
            position: relative;
        }
        .inputuser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelinput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputuser:focus ~ .labelinput, .inputuser:valid ~ .labelinput {
            top: -20px;
            font-size: 12px;
            color: #bf1a0b;
        }
        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit {
            background-color: #bf1a0b;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover {
            background-color: #bf1a0bb4;
        }
        .success-message {
            color: green;
            margin: 20px 0px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="" method="POST">
            <fieldset>
                <legend><strong>Registro de Membro</strong></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputuser" required>
                    <label for="nome" class="labelinput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputuser" required>
                    <label for="Email" class="labelinput">Email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="Telefone" class="inputuser" required>
                    <label for="Telefone" class="labelinput">Telefone</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="cpf" name="cpf" id="cpf" class="inputuser" required>
                    <label for="cpf" class="labelinput">CPF</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br><br>
                <label for="data_nascimento"><strong>Data de Nascimento:</strong></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputuser" required>
                    <label for="endereco" class="labelinput">Endereço</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputuser" required>
                    <label for="cidade" class="labelinput">Cidade</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputuser" required>
                    <label for="estado" class="labelinput">Estado</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>