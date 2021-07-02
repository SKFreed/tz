<?php
$id= $_GET['id'];

$pdo = new PDO("mysql:host=localhost;port=3306;charset=UTF8;dbname=tzbase", 'root', 'root');

$sql = "DELETE FROM tztable where id =$id ";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

header('Location: /');