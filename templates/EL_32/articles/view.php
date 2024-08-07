<?php include __DIR__ . '/../header.php'; ?>

<h1><?= $article->getName() ?></h1>
<p><?= $article->getText() ?></p>
<p>Автор:<?= $article->getAuthor()->getNickname() ?></p>

<? if ($user !== null 
// проверка на администратора
&& $user->isAdmin()
): ?>
  <p>
    <a href="/EL-32/articles/<?= $article->getId() ?>/edit">Редактировать</a>
  </p>
<? endif ?>

<hr>
<p>Комментарии:</p>

<!--    --><?php
//var_dump($comments);
foreach ($comments as $comment) { ?>
  <a name="comment<?= $comment->getId() ?>"></a>
  <p class="comment">
    <span class="comment__user"><?= $comment->getUser()->getNickname() ?></span>
    <?= $comment->getText() ?>
  </p>
<? } ?>
<?php
if (!empty($user)) { ?>
  <form action="/EL-32/articles/<?= $article->getId() ?>/comments" method="post">

    <label for="text">Текст Комментария</label><br>
    <textarea name="text" id="text" rows="10" cols="80"></textarea><br>
    <br>
    <input type="submit" value="Ок">
  </form>
<? } else { ?>
  <p>Для того, чтобы оставить комментарий, необходимо авторизоваться</p>
  <p>
    <a href="http://myproject.loc/EL-32/users/login">Войти</a>|<a
      href="http://myproject.loc/EL-32/users/register">Зарегистрироваться</a>
  </p>
<? }
?>

<?php include __DIR__ . '/../footer.php'; ?>