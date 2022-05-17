<?php

echo "Prof. Alberico é TOP - Docker Checkpoint 2 - Fiap";

$mysqli = new mysqli("db", "root", "admin", "Fiap Checkpoint 2");

$sql = "INSERT INTO users (name, fav_color) VALUES('Flavin do Pneu', 'Azul')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, fav_color) VALUES('Almondega', 'Vermelho')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, fav_color) VALUES('Serjão berranteiro', 'Rosa')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, fav_color) VALUES('Relampago Marquinhos', 'Lilas')";
$result = $mysqli->query($sql);


$sql = 'SELECT * FROM users';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->name . " " . $user->fav_color;
    echo "<br>";
}