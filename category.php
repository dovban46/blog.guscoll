<?php
    require "include/header.php";
?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php
            $category_id = $_GET['category_id'];
            $news = get_news_by_category ($category_id);
            $category = get_category_title ($category_id);
            ?>
            <h2><?=$category['title'];?></h2>

            <?php foreach ($news as $new):?>
            <div class="card" style="width: 48rem;" >
                <img src="<?=$new['image']?>"  alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$new['title']?></h5>
                    <p class="card-text"><?= mb_substr($new['content'], 0,280, 'UTF-8') . '...'?></p>
                    <a href="post.php?news_id=<?=$new['id']?>" class="btn btn-primary">Переглянути</a>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
