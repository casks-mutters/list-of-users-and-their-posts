<?php
// user.php

class User {
    public $username;
    public $email;

    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }
}

function initializeUsers() {
    $users = [
        new User('JohnDoe', 'john@example.com'),
        new User('JaneSmith', 'jane@example.com'),
        // Add more users as needed
    ];

    return $users;
}
?>
