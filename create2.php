<?php

$operations = $_POST['operations'];
$category1 = $_POST['category1'];
$category2 = $_POST['category2'];
$operations == 'Расход' ? $category = $category2 : $category = $category1;

if ($category =="choose")
{
    echo "<script type='text/javascript'>alert('$err');</script>";
    die();
}

$cost = $_POST['cost'];

$pdo = new PDO("mysql:host=localhost;port=3306;charset=UTF8;dbname=tzbase", 'root', 'root');

$sql = "INSERT INTO tztable(operations, dateupdate, category, cost) VALUES(:operations, :dateupdate, :category, :cost) ";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':operations', $operations);
$stmt->bindParam(':category', $category);
$stmt->bindParam(':cost', $cost);
$now        = new DateTime();
$now->setTimezone(new DateTimeZone('Etc/GMT-5'));
$timestring = $now->format('Y-m-d H:i:s');
$stmt->bindParam(':dateupdate', $timestring);
$stmt->execute();
$err = $stmt->errorInfo();

header('Location: /');