<?php
require __DIR__ . '/auth.php';

if (!empty($_COOKIE)) {
  $login = $_COOKIE['login'] ?? '';
  $password = $_COOKIE['password'] ?? '';
  if (checkAuth($login, $password)) {
    header('Location: /L-23/index.php');
  }
};