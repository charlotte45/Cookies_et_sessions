<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 16/10/17
 * Time: 10:31
 */

setcookie('cookie1', "", -1);
setcookie('cookie2', "", -1);
setcookie('cookie3', "", -1);
setcookie('cookie4', "", -1);

session_start();
$_SESSION["loginname"] = NULL;

session_unset();
session_destroy();

header("location: login.php");