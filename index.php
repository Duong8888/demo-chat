<?php
require_once "./model/config.php";
require_once "./model/database.php";
require_once "./model/m_message.php";
require_once "./model/m_user.php";

require_once "./controller/c_render.php";
require_once "./controller/c_message.php";
require_once "./controller/c_user.php";

isset($_GET['ctr']) ? $path = $_GET['ctr'] : $path = "/";
require_once "./view/header.php";
switch ($path) {
    case '/':
        showSignIn();
        break;
    case 'sign-in':
        showSignIn();
        break;
    case 'sign-up':
        showSignUp();
        break;
    case 'check-singIn':
        CheckSignIn();
        break;
    case 'add-user':
        addUser();
        break;
    case 'home':
        showHome();
        break;
    case 'out':
        logOut();
        break;
    case 'message-detai':
        showMessage();
        break;  
    default:
        showSignIn();
        break;
}
require_once "./view/footer.php";
