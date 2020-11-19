<?php
$db_name = 'nome do banco';
$db_host = 'endereco do banco';
$db_user = 'usuario';
$db_pass = 'senha';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);
