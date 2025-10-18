<?php
$posts = [
    [
        'user' => 'franta',
        'avatar' => 'https://i.pinimg.com/1200x/75/cd/8e/75cd8e884849449716e5a4485a7088a3.jpg',
        'image' => 'https://i.pinimg.com/736x/5d/a8/29/5da82972556f833ca752edfeae422e3a.jpg',
        'likes' => 67,
        'caption' => 'perfect view',
        'comments' => [
            ['author' => 'agi', 'content' => 'So beatiful!']
        ],
        'time' => '2 hours ago'
    ],
    [
        'user' => 'lara',
        'avatar' => 'https://i.pinimg.com/736x/82/98/a9/8298a96bb6dabc95e45c8c34c39caa5f.jpg',
        'image' => 'https://i.pinimg.com/736x/9d/2a/f8/9d2af8140f1d9dd93a9c7b134aaf8bd5.jpg',
        'likes' => 69,
        'caption' => 'i love this view',
        'comments' => [
            ['author' => 'croft', 'content' => 'WOW!']
        ],
        'time' => '3 hours ago'
    ],
    [
        'user' => 'skif',
        'avatar' => 'https://i.pinimg.com/736x/0d/2d/b9/0d2db9ec70bcc25255eb7e4e4f85b3f6.jpg',
        'image' => 'https://i.pinimg.com/736x/7b/5e/88/7b5e882617b47516bafcffb74d1976c5.jpg',
        'likes' => 369,
        'caption' => 'poppy field',
        'comments' => [
            ['author' => 'German', 'content' => 'I love Pripyat!']
        ],
        'time' => '5 hours ago'
    ],
]
?>

<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Instagram</title>
</head>
<body>
<div class="feed">
    <?php foreach ($posts as $post): ?>
        <div class="post">
            <div class="post-header">
                <img src="<?php echo $post['avatar']; ?>" alt="avatar" class="avatar">
                <span class="username"><?php echo $post['user']; ?> </span>
            </div>

            <img src="<?php echo $post['image']; ?>" alt="post img" class="main">

            <p class="text-likes"><?php echo $post['likes']; ?> likes</p>
            <p class="text"><strong><?php echo $post['user'] ?> </strong><?php echo $post['caption'] ?></p>

            <?php foreach ($post['comments'] as $comment): ?>
                <p class="text"><strong><?= $comment['author'] ?></strong> <?= $comment['content'] ?></p>
            <?php endforeach; ?>

            <div class="time">
                <p><?php echo $post['time']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
