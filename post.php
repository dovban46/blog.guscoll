<?php
    require "include/header.php";

    $news_id = $_GET['news_id'];
    if (!is_numeric($news_id))
        header('location: ../404.php');

    $new = get_news_by_id($news_id);
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card"">
            <img src="<?=$new['image'];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$new['title'];?></h5>
                <p class="card-text"><?=$new['content'];?></p>
                <a href="index.php" class="btn btn-primary">&larr; Повернутися назад</a>
            </div>
        </div>
        </div>
    </div>
</div>