<?php
// Configurações do banco de dados
$dbHost = "Localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "phpmyadmin";

$conexao = new mysqLi($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno)
{
    echo "Erro";
}
else
{
    echo "Conexão Efetuado com Sucesso";
}
