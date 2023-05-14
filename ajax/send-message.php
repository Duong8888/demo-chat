<?php
include_once "../model/config.php";
include_once "../model/database.php";

function senDataMessage($data = []){
    global $pdo;
    $query = "INSERT INTO user_message (message, id_user_send, id_user_take, status) VALUE (:message, :id_user_send,:id_user_take, :status)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}

$data = [
    "message"=>$_POST['message'], 
    "id_user_send"=>$_SESSION['iduser'], 
    "id_user_take"=>$_POST['idTake'], 
    "status"=>0
];
senDataMessage($data);


