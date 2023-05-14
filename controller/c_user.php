<?php
function showSignIn()
{
    render('sign-in', []);
}

function showSignUp()
{
    render('sign-up', []);
}

function addUser()
{
    $img = $_FILES['avatar'];
    $imgName = "./src/img/" . $img['name'];
    if (!empty(checkMail($_POST['email']))) {
        echo "<script>alert('Email đã được đăng kí trên tài khoản khác')</script>";
        showSignUp();
    } else {
        $data = [
            "username" => $_POST['username'],
            "email" => $_POST['email'],
            "password" => $_POST['password'],
            "avatar" => $imgName,
            "status" => 0
        ];
        move_uploaded_file($img['tmp_name'], $imgName);
        signUp($data);
        echo "<script>alert('Đăng kí thành công.')</script>";
        showSignIn();
    }
}

function CheckSignIn()
{
    if (!empty(checkMail($_POST['email']))) {
        $id = checkMail($_POST['email'])['id'];
        $infoUser = getOneDataUser($id);
        if ($infoUser['password'] == $_POST['password']) {
            $_SESSION['iduser'] = $id;
            changeStatusOn($id);
            header("location:index.php?ctr=home");
        } else {
            echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu.')</script>";
            showSignIn();
        }
    } else {
        echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu.')</script>";
        showSignIn();
    }
}

function logOut(){
    changeStatusOff($_SESSION['iduser']);
    unset($_SESSION['iduser']);
    header("location:index.php?ctr=sign-in");
}

function showHome(){
    $arrUser = getListDataUser($_SESSION['iduser']);
    render('main',["arrUser"=>$arrUser]);
}

function checkUser(){
    if(!isset($_SESSION['iduser'])){
        header("location:index.php?ctr=sign-in");
    }
}
