<?php

namespace App\Controllers;
use Database\PDO\Connection;
class WithdrawalsController {

    /**
     * Muestra una lista de este recurso
     */
    public function index() {}

    /**
     * Muestra un formulario para crear un nuevo recurso
     */
    public function create() {}

    /**
     * Guarda un nuevo recurso en la base de datos
     */
    public function store($data) {
        $cn = Connection::getInstance()->getDatabaseinstance();
        
        $affected=$cn->prepare("INSERT INTO withdrawals(payment_method,type,date,amount,description) VALUES(:payment_method,:type,:date,:amount,:description)");

        $affected->bindValue(':payment_method',$data["payment_method"]);
        $affected->bindValue(':type',$data["type"]);
        $affected->bindValue(':date',$data["date"]);
        $affected->bindValue(':amount',$data["amount"]);
        $affected->bindValue(':description',$data["description"]);

        $data["amount"] = 45;
        $affected->execute();
        // echo "Registro insertado $affected Filas";

        // {$data['payment_method']},
        // {$data['type']},
        // '{$data['date']}',
        // {$data['amount']},
        // '{$data['description']}');
    }

    /**
     * Muestra un único recurso especificado
     */
    public function show() {}

    /**
     * Muestra el formulario para editar un recurso
     */
    public function edit() {}

    /**
     * Actualiza un recurso específico en la base de datos
     */
    public function update() {}

    /**
     * Elimina un recurso específico de la base de datos
     */
    public function destroy() {}
    
}