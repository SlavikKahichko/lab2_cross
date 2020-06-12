<?php
session_start();
include 'E:\trash\OSPanel\domains\lab3\data.php';
include 'E:\trash\OSPanel\domains\lab3\data.php';
$login = $_POST['login'];
$password = $_POST['password'];

if($login == $users[0]['login']){
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    $_SESSION['role'] = $users[0]['role'];
    header('location: users/admin.php');
}else if (($login == $users[2]['login']) || ($login == $users[4]['login'])){
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    if($login == $users[2]['login']){
        $_SESSION['role'] = $users[2]['role'];
    }else if ($login == $users[4]['login']){
        $_SESSION['role'] = $users[4]['role'];
    }
    header('location: users/manager.php');
}else if (($login == $users[1]['login']) || ($login == $users[3]['login'])){
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    if($login == $users[1]['login']){
        $_SESSION['role'] = $users[1]['role'];
    }else if ($login == $users[3]['login']){
        $_SESSION['role'] = $users[3]['role'];
    }
    header('location: users/client.php');
}