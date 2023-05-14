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
<p class="title">Đăng Nhập</p>
<form action="?ctr=check-singIn" class="form-sign-in" method="POST">
    <div class="sub-input">
        <input type="text" name="email" id="email" placeholder=" " required>
        <label for="email">Email</label>
    </div>

    <div class="sub-input">
        <input type="password" name="password" id="password" placeholder=" " required>
        <label for="password">Password</label>
    </div>

    <button id="btn-sign-in" type="button">Đăng Nhập</button>
    <p class="text-sign-in">Bạn chưa có tài khoản vui lòng đăng ký <a href="?ctr=sign-up">tại đây</a></p>
</form>