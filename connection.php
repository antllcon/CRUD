<?php

require_once "functions.php";

// В функции подключения к базе данных возвращаем либо PDO объект, либо NULL
function connectToDatabase(array $config): ?PDO
{
    // Создаем dsn строку
    $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] . ';charset=' . $config['charset'];
    try {
        // Формируем DSN строку
        $pdo = new PDO($dsn, $config['username'], $config['password']); // Создаем объект PDO
        // Устанавливаем режим обработки ошибок
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $error) {
        logException($error);
        return null;
    }
}
