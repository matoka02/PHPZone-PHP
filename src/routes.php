<?php

return [
  '~^hello/(.*)$~' => [\src\MyProject\EL_12\Controllers\MainController::class, 'sayHello'],
  '~^bye/(.*)$~' => [\src\MyProject\EL_12\Controllers\MainController::class, 'sayBay'],
  '~^$~' => [\src\MyProject\EL_12\Controllers\MainController::class, 'main'],
];