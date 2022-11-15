<?php
include('../libreria/principal.php');

use Medoo\Medoo;

$database = new Medoo(['type' => 'mysql','host' => DB_HOST,'database' => DB_NAME,'username' => DB_USER,'password' => DB_PASS]);

$data = $database->select('evento','*');

$rs = new Resultado($data);

$rs->finalizar();
