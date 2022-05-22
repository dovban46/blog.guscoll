<?php
session_start();
$login = 'admin';
$password = '12345';

if ($_SESSION['login'] !== $login && $_SESSION['password'] !==$password){
    header('location: ../login/index.php');
}
include_once "../assets/conf.php";
include "../assets/function.php";
$news_id = $_GET['news_id'];
if (!is_numeric($news_id))
    header('location: ../404.php');

$new = delete_new($news_id);
header('location: index.php');
