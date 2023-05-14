<?php
require_once "config.php";
require_once "database.php";

function getDataMessage($idSend,$idTake){
    global $pdo;
    $query = "SELECT * FROM user_message WHERE id_user_send = $idSend AND id_user_take = $idTake";
    $stmt = $pdo->prepare($query);
    $data = $stmt->execute();
    return $data;
}
