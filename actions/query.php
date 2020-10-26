<?php

session_start();
require_once '../db/db.php';


foreach ($_GET as $key=>$value) {
    $currentKey = $key;
    $currentValue = $value;
}

$_SESSION[$currentKey] = $currentValue;

// var_dump($_SESSION);

$query = "SELECT * FROM products WHERE";
foreach ($_SESSION as $key=>$value) {
    if ($value != 'all') {
        $query .= " $key='$value' AND";
    }
}

$query = trim($query, ' WHERE'); // Если в начале или в конце это слово то оно вырезается
$query = trim($query, ' AND');

echo $query;

//$products = $connect->query($query)
//    ->fetchAll(PDO::FETCH_ASSOC);

//var_dump($products);