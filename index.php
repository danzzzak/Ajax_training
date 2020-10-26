<?php
session_start();
require_once 'db/db.php';
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
            </select>

            <select name="color" id="color">
                <option value="all">Vse color</option>
            </select>

            <select name="weight" id="weight">
                <option value="all">Vse weight</option>
            </select>
        </div>

        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-title"></div>
                    <div class="card-body">
                        <p class="lead"></p>
                        <p class="lead"></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
