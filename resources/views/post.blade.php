<!DOCTYPE html>
<title>Single Post</title>
<link rel="stylesheet" href="/app.css">

<body>
  <article>
    <h2><?= $post['title']; ?></h2>
    <?= $post['body']; ?>
  </article>
  <a href="/">Go Back</a>
</body>
