<?php
echo 'строка с пробелами';
echo '<br>';
echo 7;
echo '<br>';
echo 5/2;
?>

//Вам нужно в настройках phpStorm File / Settings выбрать пункт Build, Execution, Deployment / Deployment создать новое соединение
//
//с типом Type: Local or mounted folder;
//указать путь в Folder: C:...\OSPanel\domains\localhost до папки localhost вашего OpenServer;
//прописать урл Web server url: http://localhost;
//и нажать "Apply".
//После этого, если всё указано верно, phpStorm откроет ваш файл сразу в браузере.
//
//В вашем случае вместо localhost должно быть myproject.loc.