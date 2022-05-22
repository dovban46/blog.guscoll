<?php


session_start();
$login = 'admin';
$password = '12345';

if ($_SESSION['login'] !== $login && $_SESSION['password'] !==$password){
    header('location: ../login/index.php');
}
    $db = new PDO('mysql:host=localhost; dbname=blog;', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_FILES["image"]) && $_FILES["image"]["tmp_name"] !="") {
    move_uploaded_file($_FILES["image"]["tmp_name"], "../img/" . $_FILES["image"]["name"]);
    $fileName = "../img/" . $_FILES["image"]["name"];
} else {
    $fileName = "../img/no-image.jpg";
}

    $sql = "INSERT INTO news (title, content, image, date)
           VALUES (:title, :content, :image, :date)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(":title", $_POST["title"]);
    $stmt->bindValue(":content", $_POST["content"]);
    $stmt->bindValue(":image", $fileName);
    $stmt->bindValue(":date", $_POST["date"]);

    $stmt->execute();
    header("location:index.php");




