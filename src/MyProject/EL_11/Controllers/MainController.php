<?php

namespace src\MyProject\EL_11\Controllers;

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