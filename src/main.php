<?php
include_once __DIR__ . "/../vendor/autoload.php";
    use App\model\Usuario;

    echo "<h2>O jogo</h2>";
    $user1 = new Usuario("Jorge");

    echo $user1->getNome();
?>