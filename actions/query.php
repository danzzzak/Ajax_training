<?php

if (count($_GET) >0) {
    session_start();
    require_once '../db/db.php';


    foreach ($_GET as $key=>$value) {
        $currentKey = $key;
        $currentValue = $value;
    }

    $_SESSION[$currentKey] = $currentValue;
}

// var_dump($_SESSION);

$query = "SELECT * FROM products WHERE";
foreach ($_SESSION as $key=>$value) {
    if ($value != 'all') {
        $query .= " $key='$value' AND";
    }
}

$query = trim($query, ' WHERE'); // Если в начале или в конце это слово то оно вырезается
$query = trim($query, ' AND');


$products = $connect->query($query)
    ->fetchAll(PDO::FETCH_ASSOC);

if (!$products) {
    echo 'Net rovarov';
}

foreach ($products as $product) {
?>
    <div class="col-3">
        <div class="card">
            <div class="card-title"> <?=$product['cat'] ?> <?=$product['title']?> </div>
            <div class="card-body">
                <p class="lead">Cvet: <?=$product['color'] ?> </p>
                <p class="lead">Wes <?=$product['weight'] ?></p>
            </div>
        </div>
    </div>
<?php  }