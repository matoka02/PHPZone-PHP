<?php

return [
  '~^hello/(.*)$~' => [\src\MyProject\EL_17\Controllers\MainController::class, 'sayHello'],
  '~^bye/(.*)$~' => [\src\MyProject\EL_17\Controllers\MainController::class, 'sayBay'],
  '~^articles/(\d+)$~' => [\src\MyProject\EL_17\Controllers\ArticlesController::class, 'view'],
  '~^$~' => [\src\MyProject\EL_17\Controllers\MainController::class, 'main'],
];
