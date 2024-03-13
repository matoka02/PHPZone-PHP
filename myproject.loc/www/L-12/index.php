<?php

/*---Including files in PHP---*/

/*Директивы require и include*/

/*
 * В браузере перейти http://myproject.loc/L-12/example.php
 */

$content = '<h1>Заголовок статьи</h1><p>Текст какой-то статьи</p>';

require __DIR__ . '/header.php';
require __DIR__ . '/sidebar.php';
require __DIR__ . '/content.php';
require __DIR__ . '/footer.php';

/*Директивы require_once и include_once*/

/*
 * В браузере перейти http://myproject.loc/L-12/test.php
 */