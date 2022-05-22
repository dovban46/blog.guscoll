<?php
    function get_menu() {
        global $conn;

        $sql = "SELECT * FROM menu";
        $result = mysqli_query($conn, $sql);

        $menus = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $menus;
    }
    $menus = get_menu($conn);

    function get_news() {
        global $conn;
        $sql = "SELECT * FROM news";
        $result = mysqli_query($conn, $sql);

        $news = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $news;
    }

    function get_news_by_id ($news_id) {
        global $conn;
        $sql = "SELECT * FROM news WHERE id = ".$news_id;
        $result = mysqli_query($conn, $sql);

        $new = mysqli_fetch_assoc($result);
        return $new;
    }
    function get_news_by_category ($category_id) {
        global $conn;

        $category_id = mysqli_real_escape_string($conn, $category_id);
        $sql = "SELECT * FROM news WHERE category_id = " .$category_id;
        $result = mysqli_query($conn, $sql);
        $news = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $news;
    }
function get_category_title ($category_id) {
    global $conn;

    $category_id = mysqli_real_escape_string($conn, $category_id);
    $sql = "SELECT * FROM menu WHERE id = " .$category_id;
    $result = mysqli_query($conn, $sql);
    $category = mysqli_fetch_assoc($result);
    return $category;
}

function delete_new($news_id) {
    global $conn;
    $news_id = mysqli_real_escape_string($conn, $news_id);

    $sql = "DELETE FROM news WHERE id = " .$news_id;
    $result = mysqli_query($conn, $sql);
}
