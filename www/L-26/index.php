<?php
/*---Writing a photo album in PHP---*/
?>

<html lang="ru">
<head>
  <title>Фотоальбом</title>
</head>
<body>
<?php
$files = scandir(__DIR__ . '/uploads');
$links = [];
foreach ($files as $fileName) {
  if ($fileName === '.' || $fileName === '..') {
    continue;
  }
  $links[] = 'http://myproject.loc/L-26/uploads/' . $fileName;
};
var_dump($links);

foreach ($links as $link):?>
  <a href="<?= $link ?>"><img src="<?= $link ?>" alt="<?= $link ?>" height="80px"></a>
<?php endforeach; ?>
</body>
</html>
