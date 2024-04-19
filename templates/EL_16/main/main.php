<?php include __DIR__ . '/../header.php'; ?>
<?php foreach ($articles as $article): ?>
<!--  <h2>--><?php //= $article['name'] ?><!--</h2>-->
  <h2><a href="/EL-16/articles/<?= $article['id'] ?>"><?= $article['name'] ?></a></h2>
  <p><?= $article['text'] ?></p>
  <p>Автор: <i><?= $article['nickname'] ?></i></p>
  <hr>
<?php endforeach; ?>
<?php include __DIR__ . '/../footer.php'; ?>
