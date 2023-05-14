<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../src/js/jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#autoSend').click(function() {
                if ($('input[name="username"]').val() != 0) {
                    setInterval(function() {
                        send();
                        $('html').scrollTop($('html')[0].scrollHeight);
                    }, 2000);
                }
            });
            $('#save').on('click', send);

            function send() {
                jQuery.ajax({
                    url: 'hello.php',
                    method: 'post',
                    // có 2 cách để lấy dữ liệu từ form cách 1 sử dụng name của ô dữ liệu muốn lấy
                    data: {
                        name: $('input[name="username"]').val()
                    },
                    // cách thứ 2 để lấy data sử dụng serialize();
                    // data:$('.form-main').serialize();// lấy tất cả dữ liệu trong form
                });
                $('.data').load('hienthi.php');
            }
            $('.data').load('hienthi.php');
            setInterval(function() {
                $('.data').load('hienthi.php')
            }, 1000);
        });
    </script>
</head>

<body>
    <form action="" class="form-main">
        <label for="">Tên</label>
        <button type="button" id="autoSend">Auto</button>
        <input type="text" name="username" id="">
        <button type="button" id="save">Gửi</button>
    </form>
    <div>
        <table border="1" style="margin-bottom: 100px;">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                </tr>
            </thead>
            <tbody class="data">

            </tbody>
    </div>
</body>

</html>