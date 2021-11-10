<?php

define("HOSTNAME","localhost"); 
define("DATABASE","storelinks"); 
define("PASSWORD","");
define("USER","root"); 
define("KEYSITE","@store-links#123"); //key 16 bits

$conn = new PDO("mysql:dbname=".DATABASE.";host=".HOSTNAME."", USER, PASSWORD);
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'utf8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

session_start();

?>