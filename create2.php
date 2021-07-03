<?php
require_once "dbconfig.php";

$operations = $_POST['operations'];
$category1 = $_POST['category1'];
$category2 = $_POST['category2'];
$dataStart = $_POST['dataStart'];
$operations == 'Расход' ? $category = $category2 : $category = $category1; // тернарная операция
$cost = $_POST['cost'];
$sql = "INSERT INTO tztable(operations, dateupdate, category, cost) VALUES(:operations, :dateupdate, :category, :cost) ";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':operations', $operations);
$stmt->bindParam(':category', $category);
$stmt->bindParam(':cost', $cost);
$now = new DateTime();
$now->setTimezone(new DateTimeZone('Etc/GMT-5'));
$timestring = $now->format('Y-m-d H:i:s');
$stmt->bindParam(':dateupdate', $timestring);
$stmt->execute();
$err = $stmt->errorInfo();

header('Location: /');