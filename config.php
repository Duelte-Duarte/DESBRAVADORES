<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "formulario_desbravadores";

$conexao = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

if ($conexao->connect_errno) {
    echo 'Erro';
}

