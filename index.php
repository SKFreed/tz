<?php
require_once "dbconfig.php";

$stmt = $pdo->prepare("SELECT * FROM tztable");
$stmt->execute();
$rows = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>TZ</title>
</head>
<body>
<div class="container">
    <a href="create.php" class="btn btn-outline-success create">Создать</a>
    <table class="table">
        <thead>
        <tr>
            <th>Доход/расход</th>
            <th>Категория</th>
            <th>Сумма</th>
            <th>Дата изменения</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($rows as $row) {
            ?>
            <tr>
                <td><?= $row['operations'] ?></td>
                <td><?= $row['category'] ?></td>
                <td><?= $row['cost'] ?></td>
                <td><?= $row['dateupdate'] ?></td>
                <td>
                    <a class="btn btn-outline-primary" href="view.php?id=<?= $row['id'] ?>">Посмотреть</a>
                    <a class="btn btn-outline-primary" href="edit.php?id=<?= $row['id'] ?>">Изменить</a>
                    <a class="btn btn-outline-danger" href="delete.php?id=<?= $row['id'] ?>">Удалить</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <button type="submit" class="btn btn-outline-primary itog">Подвести итоги</button>
    <div id="result" style="display: none"></div>
</div>
<script>
    $(function () {
        $(".itog").click(function (event) {
            $.ajax({
                url: 'ajax.php',
                type: 'POST',
                success: function (data) {
                    $('#result').html(data);
                    $('#result').fadeIn();
                }
            });
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>
</html>
