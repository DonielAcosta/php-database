<?php

namespace App\Controllers;

use Database\PDO\Connection;

class IncomesController {

    private $connection;

    public function __construct() {
        $this->connection = Connection::getInstance()->getDatabaseinstance();
    }

    /**
     * Muestra una lista de este recurso
     */
    public function index() {

        $sql = $this->connection->prepare("SELECT * FROM incomes");
        $sql->execute();

        while($row = $sql->fetch())
            echo "Ganaste " . $row["amount"] . " USD en: " . $row["description"] . "\n";

    }

    /**
     * Muestra un formulario para crear un nuevo recurso
     */
    public function create() {}

    /**
     * Guarda un nuevo recurso en la base de datos
     */
    public function store($data) {

        $sql = $this->connection->prepare("INSERT INTO incomes (payment_method, type, date, amount, description) VALUES (:payment_method, :type, :date, :amount, :description)");

        $sql->bindValue(":payment_method", $data["payment_method"]);
        $sql->bindValue(":type", $data["type"]);
        $sql->bindValue(":date", $data["date"]);
        $sql->bindValue(":amount", $data["amount"]);
        $sql->bindValue(":description", $data["description"]);

        $sql->execute();

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

/*

index - Display a listing of the resource.
create - Show the form for creating a new resource.
store - Store a newly created resource in storage.
show - Display the specified resource.
edit - Show the form for editing the specified resource.
update - Update the specified resource in storage.
destroy - Remove the specified resource from storage.

*/