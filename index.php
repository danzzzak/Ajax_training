<?php
session_start();
require_once 'db/db.php';

$products = $connect->query("SELECT * FROM products")
                ->fetchAll(PDO::FETCH_ASSOC); // Для удобного чтения массива

$cats = $connect->query("SELECT cat FROM cats")
    ->fetchAll(PDO::FETCH_ASSOC);

$colors = $connect->query("SELECT color FROM colors")
    ->fetchAll(PDO::FETCH_ASSOC);

$weights = $connect->query("SELECT weight FROM weights")
    ->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">

        <div class="select">
            <select name="cat" id="id">
                <option value="all">Vse kategorii</option>
                <?php foreach ($cats as $cat) { ?>
                    <option value="<?=$cat['cat']?>"><?=$cat['cat']?></option>
                <? } ?>
            </select>

            <select name="color" id="color">
                <option value="all">Vse color</option>
                <?php foreach ($colors as $color) { ?>
                    <option value="<?=$color['color']?>"><?=$color['color']?></option>
                <? } ?>
            </select>

            <select name="weight" id="weight">
                <option value="all">Vse weight</option>
                <?php foreach ($weights as $weight) { ?>
                    <option value="<?=$weight['weight']?>"><?=$weight['weight']?></option>
                <? } ?>
            </select>
        </div>

        <div class="row cards-block">
            <?php foreach ($products as $product) { ?>
            <div class="col-3">
                <div class="card">
                    <div class="card-title"> <?=$product['cat'] ?> <?=$product['title']?> </div>
                    <div class="card-body">
                        <p class="lead">Cvet: <?=$product['color'] ?> </p>
                        <p class="lead">Wes <?=$product['weight'] ?></p>
                    </div>
                </div>
            </div>
            <? } ?>
        </div>

    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/ajax.js"></script>

</body>
</html>
