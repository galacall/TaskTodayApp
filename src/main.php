<?php
include_once __DIR__ . "/../vendor/autoload.php";
    use App\model\Usuario;

    echo "<h2>O jogo</h2>";
    $us1 = new Usuario("Jorge da Silva Silvano Santos", 43);

    echo "<p class='nomes'>", $us1->get_Nome(), "</p>";
    echo "<p>", $us1->get_Idade(), " anos</p>";