<p class="title">Đăng ký</p>
<form action="?ctr=add-user" class="form-sign-in" method="POST" enctype="multipart/form-data">
    <div class="sub-input">
        <input type="text" name="username" id="username" placeholder=" " required>
        <label for="username">Username</label>
    </div>

    <div class="sub-input">
        <input type="email" name="email" id="email" placeholder=" " required>
        <label for="email">Email</label>
    </div>

    <label for="avatar" class="box-avatar">
        <img class="imgChange" src="src/img/199308887_1412477172468089_2593694400813705621_n.jpg" alt="">
        <i class='bx bx-image-add'></i>
        <input type="file" name="avatar" id="avatar" style="transform: translateX(-100000px);position: absolute;" required>
    </label>
    <div class="sub-input">
        <input type="password" name="password" id="password" placeholder=" " required>
        <label for="password">Password</label>
    </div>

    <div class="sub-input">
        <input type="password" id="repassword" placeholder=" " required>
        <label for="repassword">Re-Password</label>
    </div>
    <button id="btn-sign-in" type="button">Đăng Ký</button>
</form>
