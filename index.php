<?php

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalsController;
use App\Enums\IncomeTypeEnum;
use App\Enums\WithdrawalTypeEnum;
use App\Enums\PaymentMethodEnum;
require("vendor/autoload.php");

// $incomes_controller = new IncomesController();
// $incomes_controller->store([
//     "payment_method" => PaymentMethodEnum::BankAccount->value,
//     "type" => IncomeTypeEnum::Salary->value,
//     "date" => date("Y-m-d H:i:s"), 
//     "amount" => 1000000,
//     "description" => "Pago de mi salario la chamba "
// ]);


$withdrawal_controller = new WithdrawalsController();
$withdrawal_controller->store([
    "payment_method" => PaymentMethodEnum::BankAccount->value,
    "type" => WithdrawalTypeEnum::Purchase->value,
    "date" => date("Y-m-d H:i:s"), 
    "amount" => 500000,
    "description" => "Compra de unas ropa nueva"
]);
