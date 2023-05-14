<?php

include_once "../model/config.php";
include_once "../model/database.php";

function searchUser($search)
{
    global $pdo;
        
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
$arr = searchUser($_SESSION['arrSearch']);
foreach ($arr as $value) {
    if ($value['id'] == $_SESSION['iduser']) {
    } else {
        echo '
        <a href="?ctr=message-detai&id='.$value['id'].'" class="item">
            <div class="left">
                <img src="' . $value['avatar'] . '" alt="">
            </div>
            <div class="right">
                <p>' . $value['username'] . '</p>
            </div>
        </a>
        ';
    }
}
