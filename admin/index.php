<?php
    session_start();
    $login = 'admin';
    $password = '12345';

    if ($_SESSION['login'] !== $login && $_SESSION['password'] !==$password){
        header('location: ../login/index.php');
    }
    include "../assets/conf.php";
    include "../assets/function.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Адмін-панель</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2>Адміністративна панель сайту</h2>
        </div>
        <div class="col-2">
            <a href="logout.php" class="d-block btn btn-primary">Вихід</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Назва новини</th>
                    <th>Додаткові опції</th>
                    <th></th>
                </tr>
                </thead>
                <?php $news = get_news();
                foreach ($news as $new):?>
                <tbody>
                <tr>
                    <th scope="row"><?=$new['id'];?></th>
                    <td><?=$new['title'];?></td>
                    <td><a href="edit-new.php?news_id=<?=$new['id']?>" class="btn btn-info">Редагувати</a></td>
                    <td><a href="delete-new.php?news_id=<?=$new['id']?>" class="btn btn-danger">Видалити</a></td>
                </tr>
                </tbody>
                <?php endforeach;?>
            </table>
            <a href="add-new.php" class="btn btn-success">Додати новину</a>
        </div>
    </div>
</div>
</body>
</html>
