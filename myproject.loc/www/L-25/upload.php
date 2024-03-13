<?php
//if (!empty($_FILES)) {
//  var_dump($_FILES);
//}

//C:\OSPanel\domains\myproject.loc\www\L-25\upload.php:3:
//array (size=1)
//  'attachment' =>
//    array (size=6)
//      'name' => string 'photo_2023-12-26_17-36-19.jpg' (length=29)
//      'full_path' => string 'photo_2023-12-26_17-36-19.jpg' (length=29)
//      'type' => string 'image/jpeg' (length=10)
//      'tmp_name' => string 'C:\OSPanel\userdata\temp\upload\php60B0.tmp' (length=43)
//      'error' => int 0
//      'size' => int 82758

// рефакторинг с move_uploaded_file()
if (!empty($_FILES['attachment'])) {
  $file = $_FILES['attachment'];
  $errorCode = $_FILES['attachment']['error'];
  $filePath = $_FILES['attachment']['tmp_name'];
  $fileSize = $_FILES['attachment']['size'];

  // собираем путь до нового файла - папка uploads в текущей директории
  // в качестве имени оставляем исходное файла имя во время загрузки в браузере
  $srcFileName = $file['name'];
  $newFilePath = __DIR__ . '/uploads/' . $srcFileName;

  // проверка на тип файла
  $allowedExtensions = ['jpg', 'png', 'gif'];
  $extension = pathinfo($srcFileName, PATHINFO_EXTENSION);

  // проверка на ошибки из $_FILES
  if ($errorCode !== UPLOAD_ERR_OK) {
    $error = [
      UPLOAD_ERR_INI_SIZE => 'Размер файла превысил значение upload_max_filesize в конфигурации PHP.',
      UPLOAD_ERR_FORM_SIZE => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE в HTML-форме.',
      UPLOAD_ERR_PARTIAL => 'Загружаемый файл был получен только частично.',
      UPLOAD_ERR_NO_FILE => 'Файл не был загружен.',
      UPLOAD_ERR_NO_TMP_DIR => 'Отсутствует временная папка.',
      UPLOAD_ERR_CANT_WRITE => 'Не удалось записать файл на диск.',
      UPLOAD_ERR_EXTENSION => 'PHP-расширение остановило загрузку файла.',
    ];
    // зададим неизвестную ошибку
    $unknownMessage = 'При загрузке файла произошла неизвестная ошибка.';
    // если в массиве нет кода ошибки, скажем, что ошибка неизвестна
    $outputMessage = isset($error[$errorCode]) ? $error[$errorCode] : $unknownMessage;
    // выведем название ошибки
    die($outputMessage);
  };

  // ограничения для картинок
  $limitBytes = 1024 * 1024 * 2;
  $limitWidth = 1280;
  $limitHeight = 720;

  // в переменной $image массив с информацией о размерах картинки
  $image = getimagesize($filePath);

  if (!in_array($extension, $allowedExtensions)) {
    $error = 'Загрузка файлов с таким расширением запрещена!';
  } elseif ($fileSize > $limitBytes) {
    $error = 'Размер изображения не должен превышать 2 Мбайт.';     // Если прквышает ограничение из $limitBytes
  } elseif ($image[1] > $limitHeight) {
    $error = 'Высота изображения не должна превышать 1280 точек.';  // Если прквышает ограничение из $limitWidth
  } elseif ($image[0] > $limitWidth) {
    $error = 'Ширина изображения не должна превышать 720 точек.';   // Если прквышает ограничение из $limitHeight
//  } elseif ($file['error'] !== UPLOAD_ERR_OK) {
//    $error = 'Ошибка при загрузке файла.';
  } elseif (file_exists($newFilePath)) {
    $error = 'Файл с таким именем уже существует';
  } elseif (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
    $error = 'Ошибка при загрузке файла';
  } else {
    $result = 'http://myproject.loc/uploads/' . $srcFileName;
  }
}
?>

<html lang="ru">
<head>
  <title>Загрузка файла</title>
</head>
<body>
<?php if (!empty($error)): ?>
  <?= $error ?>
<?php elseif (!empty($result)): ?>
  <?= $result ?>
<?php endif; ?>
<br>
  <form action="/L-25/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="attachment">
    <input type="submit">
  </form>
</body>
</html>

<?php
/*Homework*/
//Позвольте загружать только файлы размером меньше 8Мб. Сделайте это с помощью сравнения с $_FILES['attachment']['size'].
//Изучите директиву upload_max_filesize в файле php.ini. Установите её значение, равное 2M. Перезапустите веб-сервер. Попробуйте теперь загрузить файл, размером в 5Мб. Теперь обработайте соответствующую ошибку с помощью проверки значения $_FILES['attachment']['error'].
//Разрешите загружать картинки с шириной не более 1280px и высотой не более 720px.
?>