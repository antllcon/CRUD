<?php

// Функция записывает ошибки и исключения в файл log
function logException(Exception $error): void
{
// Логинирование ошибки в файле
    error_log($error->getMessage() . "\n    ", 3, 'errors.log');
    echo 'Error';
}

function getData(PDO $pdo, string $TableName): ?array
{
    $query = "SELECT * FROM $TableName";
    $statement = $pdo->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}