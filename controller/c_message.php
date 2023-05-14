<?php
function showMessage(){
    // lưu tạm thời id người đang nhắn tin
    $_SESSION['id_take'] = $_GET['id'];
    render('detail-chat',[]);
}
