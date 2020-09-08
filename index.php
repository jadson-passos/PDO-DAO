<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("select id, nome, email from usuarios");

echo json_encode($usuarios);


?>