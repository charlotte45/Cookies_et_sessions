<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 16/10/17
 * Time: 10:31
 */

setcookie('cookie1', "0", -3600);
setcookie('cookie2', "0", -3600);
setcookie('cookie3', "0", -3600);
setcookie('cookie4', "0", -3600);

session_start();
$_SESSION["loginname"] = NULL;

session_unset();
session_destroy();

header("location: login.php");