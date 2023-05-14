//  sử lý chọn ảnh khi đăng ký
const boxImg = document.querySelector('.box-avatar');
if (boxImg) {
    const icon = document.querySelector('.box-avatar i');
    const imgMain = document.querySelector('#avatar');
    const imgchange = document.querySelector('.imgChange');
    function changeImage() {
        icon.style.display = 'none';
        imgchange.style.display = 'block';
        imgchange.src = URL.createObjectURL(imgMain.files[0]);
    }
    imgMain.addEventListener('change', changeImage);
}

// validate form 
const email = document.querySelector('#email');
const erro = document.querySelector('.erro');
if (email) {
    const username = document.querySelector('#username');
    const avatar = document.querySelector('#avatar');
    const pass = document.querySelector('#password');
    const rePass = document.querySelector('#repassword');
    const btn = document.querySelector('#btn-sign-in');

    email.addEventListener('focusout', function () {
        var pattern = /^[a-z]+[a-z\.0-9-_]{2,}@[a-z\.0-9-_]{3,}.[a-z]{2,}$/;
        if (email.value.length == 0 || !pattern.test(email.value)) {
            email.parentElement.classList.add('erro');
        } else {
            email.parentElement.classList.remove('erro');
        }
    });
    pass.addEventListener('focusout', function () {
        if (pass.value == 0) {
            pass.parentElement.classList.add('erro');
        } else {
            pass.parentElement.classList.remove('erro');
        }
    });

    if (username) {
        username.addEventListener('focusout', function () {
            if (username.value.length == 0) {
                username.parentElement.classList.add('erro');
            } else {
                username.parentElement.classList.remove('erro');
            }
        });

        avatar.addEventListener('click', function () {
            avatar.parentElement.classList.add('erro');
        });
        rePass.addEventListener('focusout', function () {
            if (rePass.value != pass.value) {
                rePass.parentElement.classList.add('erro');
            } else {
                rePass.parentElement.classList.remove('erro');
            }
        });
        btn.addEventListener('click', function () {
            if (avatar.value.length == 0) {
                avatar.parentElement.classList.add('erro');
            } else {
                avatar.parentElement.classList.remove('erro');
            }
            var pattern = /^[a-z]+[a-z\.0-9-_]{2,}@[a-z\.0-9-_]{3,}.[a-z]{2,}$/;
            if (email.value.length == 0 || !pattern.test(email.value)) {
                email.parentElement.classList.add('erro');
            } else {
                email.parentElement.classList.remove('erro');
            }
            if (pass.value == 0) {
                pass.parentElement.classList.add('erro');
            } else {
                pass.parentElement.classList.remove('erro');
            }
            if (rePass.value != pass.value || rePass.value == 0) {
                rePass.parentElement.classList.add('erro');
            } else {
                rePass.parentElement.classList.remove('erro');
            }
        });
    }
    if (!erro) {
        btn.setAttribute("type", "submit");
    }
}

if ($('.cube')) {
    setInterval(function () {
        $('.cube').css('z-index', '-100');
        $('.cube').css('opacity', '0');
    }, 2000);
}
