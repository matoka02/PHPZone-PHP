<?php

setcookie('login', 'admin', 0, '/');
setcookie('password', 'p@SsW0rd', 0, '/');
echo 'Cookie установлены';


/*Homework*/
setcookie('login2' , 'admin' , time() + 20, '/');