<?php

namespace src\MyProject\EL_32\Services;

use src\MyProject\EL_32\Models\Users\User;

class EmailSender
{
  public static function send(User $receiver, string $subject, string $templateName, array $templateVars = []): void
  {
    extract($templateVars);

    ob_start();
    require __DIR__.'/../../../../templates/EL_32/mail/' . $templateName;
    $body = ob_get_contents();
    ob_end_clean();

    mail($receiver->getEmail(), $subject, $body, 'Content-Type: text/html; charset=UTF-8');
  }
}