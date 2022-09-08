<?php
/*
 * This code was written by enotit.
 * distribution/modification/copying is free (but please mention me).
 * t.me/enotit 9.2022
 *
 */

namespace Index;
require_once "class/user.php";
use Index\Classes\User;

session_start();
require_once "db.php";

$query = "SELECT username FROM users WHERE active = '{session_id()}';";
$r = $db->query($query);

$user = new User();


?>

<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,900;1,100&display=swap');
    </style>
    <title> Today: <?= date("h:i:s") ?> </title>
    <link href="styles\style.css" rel="stylesheet" type="text/css">
</head>
<? require_once "header.php"; ?>


<body> </body>
</html>