<?php include __DIR__ . '/../header.php'; ?>
<!--<h1>--><?php //= $article['name'] ?><!--</h1>-->
<!--<p>--><?php //= $article['text'] ?><!--</p>-->
<h1><?= $article->getName() ?></h1>
<p><?= $article->getText() ?></p>
<?php include __DIR__ . '/../footer.php'; ?>
