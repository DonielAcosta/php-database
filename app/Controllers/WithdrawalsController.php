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
        
        $affected=$cn->exec("INSERT INTO withdrawals(payment_method,type,date,amount,description) VALUES(
        {$data['payment_method']},
        {$data['type']},
        '{$data['date']}',
        {$data['amount']},
        '{$data['description']}');");

        echo "Registro insertado $affected Filas";
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