<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'blog';

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo 'Помилка підключення до бази даних ('.mysqli_connect_errno().'):'.mysqli_connect_error();
        exit();
    }