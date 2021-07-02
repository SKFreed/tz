<?php
$pdo = new PDO("mysql:host=localhost;port=3306;charset=UTF8;dbname=tzbase", 'root', 'root');


$stmt = $pdo->prepare("SELECT SUM(cost) FROM tztable WHERE operations = 'Доход'");
$stmt->execute();
$income = $stmt->fetch();

$stmtt = $pdo->prepare("SELECT SUM(cost) FROM tztable WHERE operations = 'Расход'");
$stmtt->execute();
$expenses = $stmtt->fetch();
?>
Доходы составили: <?= $income[0] ?> <br>

Расходы составили: <?= $expenses[0] ?>

