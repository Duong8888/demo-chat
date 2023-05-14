<div class="cube">
    <div class="box-cube">
        <div class="face face1"></div>
        <div class="face face2"></div>
        <div class="face face3"></div>
        <div class="face face4"></div>
        <div class="face face5"></div>
        <div class="face face6"></div>
    </div>
</div>
<div class="header">
    <div class="btn-back"><a href="?ctr=home" class='bx bx-arrow-back'></a></div>
    <div class="avatar">
        <img src="<?= getOneDataUser($_GET['id'])['avatar'] ?>" alt="">
    </div>
    <a href=""><?= getOneDataUser($_GET['id'])['username'] ?></a>
</div>
<div class="main-chat-message">
    <div class="box-message">

    </div>
    <div class="box-send">
        <form action="" class="form-message">
            <input type="text" name="" id="message" placeholder="Nhắn tin">
            <i class='bx bx-send'></i>
        </form>
    </div>
</div>
<script>
    // scroll khi có tin nhắn mới
    var url = window.location.search;
    var id = new URLSearchParams(url);
    var valueID = id.get('id');
    $(document).ready(function() {
        function sendMsg() {
            if ($('#message').val().length != 0) {
                jQuery.ajax({
                    url: "ajax/send-message.php",
                    method: "post",
                    data: {
                        message: $('#message').val(),
                        idTake: valueID
                    }
                });
            }
            $('#message').val("");
            $('.box-message').load('ajax/load-message.php');
            $('.box-message').scrollTop($('.box-message')[0].scrollHeight);
        };
        $('.bx.bx-send').on('click', sendMsg);
        $("input[type=text]").keypress(function(e)  {
            if ((e.which && e.which === 13) ||
                (e.keyCode && e.keyCode === 13)) {
                sendMsg();
                return false;
            } else {
                return true;
            }
        });
        setInterval(function() {
            $('.box-message').load('ajax/load-message.php');
        }, 1000);
        setTimeout(function() {
            $('.box-message').scrollTop($('.box-message')[0].scrollHeight);
        }, 2000);
    });
</script>