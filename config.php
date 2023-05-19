<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'veiculo');

$conn = new MySQLi(HOST, USER, PASS, BASE);

if (!$conn)
    die ('Erro de conexão ');
//else 
    //var_dump ($conn);