<?php
require_once "database.php";

function signUp($data=[]){
    global $pdo;
    $query = "INSERT INTO user (username, email, password, avatar, status) VALUE (:username, :email, :password,:avatar, :status)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}

function changeStatusOn($id){
    global $pdo;
    $query = "UPDATE user SET status=1 WHERE id = $id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}
function changeStatusOff($id){
    global $pdo;
    $query = "UPDATE user SET status=0 WHERE id = $id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}

function getAllDataUser(){
    global $pdo;
    $query = "SELECT * FROM user";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
function getOneDataUser($id){
    global $pdo;
    $query = "SELECT * FROM user WHERE id = $id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetch();
    return $data;
}

function checkMail($email){
    global $pdo;
    $query = "SELECT id FROM user WHERE email = '$email'";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetch();
    return $data;
}

function getListDataUser($id){
    global $pdo;
    $query = "SELECT * FROM user WHERE id != $id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
