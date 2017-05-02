<?php


class Posts {
    public $pdo;
    public function __CONSTRUCT($pdo) {
        $this->pdo = $pdo;
    }

    public function get_all_posts(){
        $stmt = $this->pdo->prepare("SELECT posts.title, posts.body, posts.tags, posts.date, users.firstname, users.lastname FROM posts
        INNER JOIN users 
        ON posts.user_id = users.user_id");
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $posts;
    }



}