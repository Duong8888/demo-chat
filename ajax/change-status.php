<?php
include_once "../model/config.php";
include_once "../model/database.php";
function getListDataUser($id)
{
    global $pdo;
    $query = "SELECT * FROM user WHERE id != $id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
function loadMessageNew($idSend, $idTake)
{
    global $pdo;
    $query = "SELECT * FROM user_message WHERE id_user_send = $idSend AND id_user_take = $idTake OR id_user_send = $idTake AND id_user_take = $idSend ORDER BY id_message DESC LIMIT 1";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetch();
    return $data;
}
$arrUser = getListDataUser($_SESSION['iduser']);
foreach ($arrUser as $value) {
    $active = "";
    $msg = loadMessageNew($value['id'],$_SESSION['iduser']);
    if(empty($msg)){
        $messageNew = "Các bạn hiện đã được kết nối";
    }else{
        if($msg['status'] == 0 && $msg['id_user_send'] !=$_SESSION['iduser']){
            $active = "active";
        }
        $messageNew = $msg['message'];
    };
    ($value['status'] == 1) ? $status = "1" : $status = "hidden";
    echo '
    <a href="?ctr=message-detai&id=' . $value['id'] . '" class="box-user '.$active.'">
        <!-- active -->
        <div class="user-left ">
            <img src="' . $value['avatar'] . '" alt="">
        </div>
        <div class="user-center">
            <p class="user-name">' . $value['username'] . '</p>
            <p class="message">'.$messageNew.'</p>
        </div>
        <div class="user-end">
            <span class="status" ' . $status . '></span>
        </div>
    </a>
    ';
}
