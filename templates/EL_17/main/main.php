<?php include __DIR__ . '/../header.php'; ?>
<?php foreach ($articles as $article): ?>
<!--  <h2><a href="/EL-17/articles/--><?php //= $article['id'] ?><!--">--><?php //= $article['name'] ?><!--</a></h2>-->
<!--  <p>--><?php //= $article['text'] ?><!--</p>-->
    <h2><a href="/EL-17/articles/<?= $article->getId() ?>"><?= $article->getName() ?></a></h2>
    <p><?= $article->getText() ?></p>
    <hr>
<?php endforeach; ?>
<?php include __DIR__ . '/../footer.php'; ?>