<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 16/10/17
 * Time: 13:02
 */


if ($_POST['id'] == 1) {
    if(empty($_COOKIE['cookie1'])) {
        setcookie('cookie1', 1, time()+ 3600);
    } else {
        $add = $_COOKIE['cookie1']+1;
        setcookie('cookie1', $add, time()+ 3600);
    }
}

if ($_POST['id'] == 2) {
    if(empty($_COOKIE['cookie2'])) {
        setcookie('cookie2', 1, time()+ 3600);
    } else {
        $add = $_COOKIE['cookie2']+1;
        setcookie('cookie2', $add, time()+ 3600);
    }
}

if ($_POST['id'] == 3) {
    if(empty($_COOKIE['cookie3'])) {
        setcookie('cookie3', 1, time()+ 3600);
    } else {
        $add = $_COOKIE['cookie3']+1;
        setcookie('cookie3', $add, time()+ 3600);
    }
}

if ($_POST['id'] == 4) {
    if(empty($_COOKIE['cookie4'])) {
        setcookie('cookie4', 1, time()+ 3600);
    } else {
        $add = $_COOKIE['cookie4']+1;
        setcookie('cookie4', $add, time()+ 3600);
    }
}

header('Location: index.php');
