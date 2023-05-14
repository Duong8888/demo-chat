<?php
$pdo = new PDO("mysql:host=localhost;dbname=demo1;charset=utf8", "root", "");
$name = $_POST['name'];
$query = "INSERT INTO test (name) VALUE ('$name')";
$stmt = $pdo->prepare($query);
$stmt->execute();
