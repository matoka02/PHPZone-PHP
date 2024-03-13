<?php

namespace src\MyProject\Controllers;

class MainController
{
  public function main()
  {
    echo 'Главная страница';
  }
  public function sayHello(string $name)
  {
    echo 'Привет, ' . $name . '!';
  }
}