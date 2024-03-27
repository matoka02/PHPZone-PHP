<?php

return [
  '~^hello/(.*)$~' => [\src\MyProject\EL_27\Controllers\MainController::class, 'sayHello'],
  '~^bye/(.*)$~' => [\src\MyProject\EL_27\Controllers\MainController::class, 'sayBay'],
  '~^articles/(\d+)$~' => [\src\MyProject\EL_27\Controllers\ArticlesController::class, 'view'],
  '~^articles/(\d+)/edit$~' => [\src\MyProject\EL_27\Controllers\ArticlesController::class, 'edit'],
  '~^articles/add$~' => [\src\MyProject\EL_27\Controllers\ArticlesController::class, 'add'],
  '~^users/register$~' => [\src\MyProject\EL_27\Controllers\UsersController::class, 'signUp'],
  '~^$~' => [\src\MyProject\EL_27\Controllers\MainController::class, 'main'],
];
