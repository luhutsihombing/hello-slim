<?php
# Gunakan hasil instalasi
require "vendor/autoload.php";

# Inisialisasi Slim
$app = new \Slim\Slim();

# Inilah route GET Slim yang simpel
$app->get('/', function () {
    echo "Hello, Slim";
});

# Pengenalan Route nanti disini
$app->get('/:nama/:panjang', function ($nama, $panjang) {
    echo "<h1>" . $nama . " " . $panjang . "</h1>";
});

# Eksekusi Program
$app->run();

?>