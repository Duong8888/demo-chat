<div class="header">
    <?php checkUser(); ?>
    <div class="avatar">
        <img src="<?= getOneDataUser($_SESSION['iduser'])['avatar'] ?>" alt="">
    </div>
    <p>Chats</p>
    <a href="?ctr=out" class="out"><i class='bx bx-log-out-circle'></i></a>
</div>
<div class="search">
    <form action="" class="formSearch">
        <input type="text" placeholder="Search..." id="inputSearch">
        <button type="button"><i class='bx bx-search'></i></button>
    </form>
    <div class="list-search">
        <div class="item">
            <div class="left">
                <img src="src/img/199308887_1412477172468089_2593694400813705621_n.jpg" alt="">
            </div>
            <div class="right">
                <p>Nguyễn Ánh Dương</p>
            </div>
        </div>

        <div class="item">
            <div class="left">
                <img src="src/img/199308887_1412477172468089_2593694400813705621_n.jpg" alt="">
            </div>
            <div class="right">
                <p>Nguyễn Ánh Dương</p>
            </div>
        </div>

    </div>
</div>
<div class="list-user">

</div>
<script>
    $(document).ready(function() {
        $('#inputSearch').keyup(function(e) {
            e.preventDefault();
            jQuery.ajax({
                url: "ajax/search-user.php",
                method: "post",
                data: {
                    search: $('#inputSearch').val()
                }
            });
            $('.list-search').load('ajax/load-search.php');
            if ($('#inputSearch').val() != 0) {
                $('.list-search').css({
                    'z-index': '50',
                    'opacity': '1',
                    'transition': '.25s',
                    'transform': 'translateY(0px)'
                });
            } else {
                $('.list-search').css({
                    'z-index': '-1',
                    'opacity': '0',
                    'transition': '.0s',
                    'transform': 'translateY(50px)'
                });
            }
        });
        setInterval(function() {
            $('.list-user').load('./ajax/change-status.php')
        }, 1000);
        // chặn nút enter
        $("input[type=text]").keypress(function(ev) {
            if ((ev.which && ev.which === 13) ||
                (ev.keyCode && ev.keyCode === 13)) {
                return false;
            } else {
                return true;
            }
        });
    });
</script>