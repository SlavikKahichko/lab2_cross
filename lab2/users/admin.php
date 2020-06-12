<?php
session_start();
include 'E:\trash\OSPanel\domains\lab3\data.php';
if($_GET["exit"]){
    session_destroy();
    header("Location: ..\index.php");
}

if (isset($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];
}

if (!(isset($_SESSION['login'])) && !(isset($_SESSION['password']))){
    session_destroy();
    header('Location: ..\index.php');
}
if (!($_SESSION['role'] == 'admin')) {
    session_destroy();
    header("Location: ..\index.php");
}

if(!(isset($_GET['lang']))){
    echo $cong[0]['hi'] . " " . $users[0]['name'] . " " . $users[0]['surname'] . " " . $cong[0]['you'] . " " . $users[0]['role'];
}

if(isset($_GET['lang'])){
    if($_GET['lang'] == 'ru'){
        echo $cong[0]['hi'] . " " . $users[0]['name'] . " " . $users[0]['surname'] . " " . $cong[0]['you'] . " " . $users[0]['role'];
    }
    if($_GET['lang'] == 'ua'){
        echo $cong[1]['hi'] . " " . $users[0]['name'] . " " . $users[0]['surname'] . " " . $cong[1]['you'] . " " . $users[0]['role'];
    }
    if($_GET['lang'] == 'en'){
        echo $cong[2]['hi'] . " " . $users[0]['name'] . " " . $users[0]['surname'] . " " . $cong[2]['you'] . " " . $users[0]['role'];
    }
}

?>
<form >
    <select name="lang" method="GET">
        <option value="ru">Русский</option>
        <option value="ua">Українська</option>
        <option value="en">English</option>
    </select>
    <input type="submit" value="Save">
</form>

<form method="GET">
        <input type="submit" name="exit"  value="Exit">
    </form>

    <form name = "test" action = "manager.php" method = "post">
        <button><font color ="black">Manager</font></button>
    </form>
    <form name = "test" action = "client.php" method = "post">
        <button><font color ="black">Client</font></button>
    </form>