<?php

// Функция записывает ошибки и исключения в файл log
function logException(Exception $error): void
{
// Логинирование ошибки в файле
error_log($error->getMessage() . "\n    ", 3, 'errors.log');
echo 'Error';
}
