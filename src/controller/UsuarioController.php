<?php

include_once __DIR__ . "/../../vendor/autoload.php";

use App\model\Usuario;


$u = new Usuario("Jorge", 30);
    
if (isset($_GET["atributo"])) {
    $atributo = ($_GET["atributo"]);
    if ($atributo == "nome") {
        echo "Nome: ";
        echo $u->get_Nome();
        echo "<br>";
    } else {
        echo "Atributo desconhecido: $atributo"," ... tente nome.";
        echo "<br>";
    }
}

if (isset($_GET["atributo2"])) {
    $atributo2 = $_GET["atributo2"];
    if ($atributo2 == "idade") {
        echo "Idade: ";
        echo $u->get_Idade();
        echo "<br>";
    } else {
        echo "Atributo desconhecido: $atributo2"," ... tente idade.";
        echo "<br>";
    }
}
    
if (isset($_GET['permissoes'])) {
    $permissoes = $_GET['permissoes'];
    echo $permissoes;
}


