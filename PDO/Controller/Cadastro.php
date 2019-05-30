<?php
include('../Includes/Variaveis.php');
include("../Class/ClassCrud.php");

$Crud=new ClassCrud();
$Crud->insertDB("cadastro","{$Nome}, {$Sexo}, {$Cidade}");

echo "Cadastro realizado com sucesso";