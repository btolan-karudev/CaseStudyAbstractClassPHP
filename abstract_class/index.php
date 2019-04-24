<?php

spl_autoload_register(function ($className) {
    include 'src/' . $className . '.php';
});


header('Content-Type:text/plain', true);
$pdo = (new PDOClient('mysql', 'localhost', 'oo_battle', 'root', ''))->connect();

$ships = $pdo->select("SELECT * FROM ship")->get();

foreach ($ships as $ship) {
    var_dump($ship->name);
}