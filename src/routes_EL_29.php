<?php

return [
  '~^hello/(.*)$~' => [\src\MyProject\EL_29\Controllers\MainController::class, 'sayHello'],
  '~^bye/(.*)$~' => [\src\MyProject\EL_29\Controllers\MainController::class, 'sayBay'],
  '~^articles/(\d+)$~' => [\src\MyProject\EL_29\Controllers\ArticlesController::class, 'view'],
  '~^articles/(\d+)/edit$~' => [\src\MyProject\EL_29\Controllers\ArticlesController::class, 'edit'],
  '~^articles/add$~' => [\src\MyProject\EL_29\Controllers\ArticlesController::class, 'add'],
  '~^users/register$~' => [\src\MyProject\EL_29\Controllers\UsersController::class, 'signUp'],
  '~^users/(\d+)/activate/(.+)$~' => [\src\MyProject\EL_29\Controllers\UsersController::class, 'activate'],
  '~^users/login$~' => [\src\MyProject\EL_29\Controllers\UsersController::class, 'login'],
  '~^$~' => [\src\MyProject\EL_29\Controllers\MainController::class, 'main'],
];
