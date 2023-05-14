<?php
include_once "../model/config.php";
include_once "../model/database.php";
function getOneDataUser($id)
{
    global $pdo;
    $query = "SELECT * FROM user WHERE id = $id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetch();
    return $data;
}
//  thay đổi trạng thái tin nhắn từ chưa xem thành đã xem
// chỉ updat tin nhắn khi mình là người nhận
function changeStatusMessage($idSend, $idTake)
{
    global $pdo;
    $query = "UPDATE user_message SET status=1 WHERE id_user_send = $idSend AND id_user_take = $idTake";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}
changeStatusMessage($_SESSION['id_take'], $_SESSION['iduser']);

function getDataMessage($idSend, $idTake)
{
    global $pdo;
    $query = "SELECT * FROM user_message WHERE id_user_send = $idSend AND id_user_take = $idTake OR id_user_send = $idTake AND id_user_take = $idSend";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
$arrMessage = getDataMessage($_SESSION['iduser'], $_SESSION['id_take']);
if (count($arrMessage) == 0) {
    echo '<p style="font-size: 10px;text-align: center;color: #cccc;margin-top: 20px;user-select: none;">các bạn chưa có cuộc trò truyện nào</p>';
}
foreach ($arrMessage as $key => $value) {
    if ($value['id_user_send'] === $_SESSION['iduser']) {
        echo '
        <!-- tin nhắn gửi -->
        <div class="item-message send">
            <div class="text-messega">' . $value['message'] . '</div>
        </div>
        ';
    } else {
        echo '
        <!-- tin nhắn nhận -->
        <div class="item-message">
            <div class="avatar-author">
                <img src="' . getOneDataUser($value['id_user_send'])['avatar'] . '" alt="">
            </div>
            <div class="text-messega">' . $value['message'] . '</div>
        </div>
        ';
    }
}

