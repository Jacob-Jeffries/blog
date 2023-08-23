<!DOCTYPE html>

<title>My Blog Test</title>
<link rel="stylesheet" href="/app.css">

<body>
    <h1>Hello World!</h1>

    <?php foreach ($posts as $post) : ?>
        <article>
            <h2><a href="/post/<?= $post['filename']; ?>"><?= $post['title']; ?></a></h2>

            <div>
                <?= $post['body']; ?>
            </div>
        </article>
    <?php endforeach; ?>
</body>
