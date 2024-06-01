<?php
// Загружаем конфигурацию
$config = require 'Data/config.php';
require_once "Data/connection.php";

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Style/style.css">
	<title>CRUD</title>
</head>
<body class="inter-regular">
<?php

$pdo = connectToDatabase($config['database']);

if ($pdo) {
    echo 'Successful connection';
}

?>
</body>
</html>