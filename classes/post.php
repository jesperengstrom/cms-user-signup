<?php 

class Post {
    public $title;
    public $body;
    public $tags;
    public $user_id;
    public $date;
    public $pdo;

    public function __CONSTRUCT($title, $body, $tags, $pdo) {
        $this->user_id = 1;
        $this->title = $title;
        $this->body = $body;
        $this->tags = $tags;
        $this->date = date('Y-m-d H:i:s');
        $this->pdo = $pdo;
    }

    public function store_post(){
        return $this->pdo->prepare("INSERT INTO posts
            (user_id, 
            title, 
            body, 
            tags, 
            date) 
            VALUES 
            ('$this->user_id', 
            '$this->title', 
            '$this->body',
            '$this->tags', 
            '$this->date')
            ");
    }



}