<?php
require_once "dbconfig.php";

$stmt = $pdo->prepare("SELECT * FROM tzexpenses");
$stmt->execute();
$rows = $stmt->fetchAll();

?>
<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <title>Создание</title>
</head>
<body>
<div class="container">
    <a class="btn btn-outline-primary" href="/" style="margin-top: 34px">Назад</a>
    <h1>Создание записи</h1>
    <form method="post" action="create2.php">
        <div class="mb-3">

            <div class="input-group mb-3" style="width: 50%">
                <label class="input-group-text" for="operations">Доход/Расход</label>
                <select class="form-select operations" id="operations" name="operations" >
                    <option value="Доход">Доход</option>
                    <option value="Расход">Расход</option>
                </select>
            </div>
            <h2>Категория</h2>
            <a href="category.php" class="add">Добавить</a>
            <div class="input-group mb-3 category-income" style="width: 33.8%">

                <select class="form-select options-income" id="category" name="category1">

                    <option selected>Заработная плата</option>
                    <option>Иной источник</option>
                </select>
            </div>
            <div class="input-group mb-3 category-expenses hide" style="width: 33.8%">

                <select class="form-select options-expenses " id="category" name="category2">
                    <?php
                    foreach ($rows as $row) {
                    ?>
                    <option><?= $row['expenses'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="summa">
            <label for="cost" class="form-label">Сумма</label>
            <input name="cost" type="text" class="form-control" id="cost"  style="width: 50%">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
</div>




<!-- Вариант 1: Bootstrap в связке с Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

<script src="App.js"></script>
<!-- Вариант 2: Bootstrap JS отдельно от Popper
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
-->
</body>
</html>


