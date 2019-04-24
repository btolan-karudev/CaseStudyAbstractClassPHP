<?php

spl_autoload_register(function ($className) {
    include 'src/' . $className . '.php';
});


header('Content-Type:text/plain', true);
//PDO
$pdo = (new PDOClient('mysql', 'localhost', 'oo_battle', 'root', ''))->connect();

//MySQLiClient
$mysqli = (new MySQLiClient('localhost', 'oo_battle', 'root', ''))->connect();

$ships = $mysqli->select("SELECT * FROM ship")->get();

foreach ($ships as $ship) {
    var_dump($ship->name);
}
//var_dump($ships);