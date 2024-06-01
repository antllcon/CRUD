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
<h1 class="inter-bold">CRUD - example project</h1>
<p>Created by antllcon</p>

<table class="table">
	<thead class="inter-bold">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Birthday</th>
		<th>Number</th>
	</tr>
	</thead>
	<tbody>
    <?php
    $pdo = connectToDatabase($config['database']);
    $users = getData($pdo, 'users');
    foreach ($users as $user) {
		include "template.php";
    }
    ?>
	</tbody>
</table>

</body>
</html>