<?php
$result = require __DIR__ . '/calc.php';
?>
<html lang="ru">
<head>
  <title>Калькулятор</title>
</head>
<body>
<b>Результат вычислений:</b>
<br>
<?= $result ?>
</body>
</html>