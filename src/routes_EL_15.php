<?php

return [
  '~^hello/(.*)$~' => [\src\MyProject\EL_15\Controllers\MainController::class, 'sayHello'],
  '~^bye/(.*)$~' => [\src\MyProject\EL_15\Controllers\MainController::class, 'sayBay'],
  '~^$~' => [\src\MyProject\EL_15\Controllers\MainController::class, 'main'],
];
