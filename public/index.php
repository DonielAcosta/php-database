<?php

require("../vendor/autoload.php");

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalsController;
use Router\RouterHandler;

//obtener la url
$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);

$resul =$slug[0] =="" ? "/" :$slug[0];
$id = $slug[1] ??null;


$router =new RouterHandler();
switch ($resul){
    case '/':
        echo "Estas en la principal";
        break;
    case 'incomes':
        $method = $_POST["method"] ?? "get";
        $router->set_method($method);
        // $router->set_data($data);
        $router->route(IncomesController::class, $id);
        echo "Estas en la lista de ingresos";
        break;
    case 'withdrawals':
        $method = $_POST["method"] ?? "get";
        $router->set_method($method);
        $router->set_data($data);
        $router->route(WithdrawalsController::class, $id);
        echo "Estas en la lista de retiros";
        break;
    default:
        echo "404 Not Found";
      break;
}
// echo "<pre>";
// var_dump($slug);
// echo "</pre>";
?>