<?php
// post.php

class Post {
    public $title;
    public $content;
    public $author;

    public function __construct($title, $content, $author) {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }
}

function initializePosts() {
    $posts = [
        new Post('First Post', 'This is the content of the first post.', 'JohnDoe'),
        new Post('Another Post', 'This is another post by JaneSmith.', 'JaneSmith'),
        // Add more posts as needed
    ];

    return $posts;
}

function displayUserPosts($users, $posts) {
    foreach ($users as $user) {
        echo "<h2>{$user->username}'s Posts:</h2>";
        echo "<ul>";
        foreach ($posts as $post) {
            if ($post->author === $user->username) {
                echo "<li><strong>{$post->title}</strong>: {$post->content}</li>";
            }
        }
        echo "</ul>";
    }
}
?>
