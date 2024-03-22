<?php

return [
  '~^hello/(.*)$~' => [\src\MyProject\EL_22\Controllers\MainController::class, 'sayHello'],
  '~^bye/(.*)$~' => [\src\MyProject\EL_22\Controllers\MainController::class, 'sayBay'],
  '~^articles/(\d+)$~' => [\src\MyProject\EL_22\Controllers\ArticlesController::class, 'view'],
  '~^articles/(\d+)/edit$~' => [\src\MyProject\EL_22\Controllers\ArticlesController::class, 'edit'],
  '~^articles/add$~' => [\src\MyProject\EL_22\Controllers\ArticlesController::class, 'add'],
  '~^$~' => [\src\MyProject\EL_22\Controllers\MainController::class, 'main'],
];
