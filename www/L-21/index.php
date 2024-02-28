<?php

/*---Writing a calculator in PHP---*/

?>

<html lang="ru">
<head>
  <title>Калькулятор</title>
</head>
<body>
<form action="/L-21/result.php">
  <input type="text" name="x1">
  <select name="operation">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="/">/</option>
    <option value="*">*</option>
  </select>
  <input type="text" name="x2">
  <input type="submit" value="Посчитать">
</form>
</body>
</html>
