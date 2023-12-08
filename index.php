<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Posts</title>
</head>
<body>
    <?php
        include 'user.php';
        include 'post.php';

        $users = initializeUsers();
        $posts = initializePosts();

        displayUserPosts($users, $posts);
    ?>
</body>
</html>
