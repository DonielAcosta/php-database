<?php

namespace App\Controllers;

use Database\PDO\Connection;

class WithdrawalsController {

    private $connection;

    public function __construct() {
        $this->connection = Connection::getInstance()->getDatabaseinstance();
    }

    /**
     * Muestra una lista de este recurso
     */
    public function index() {

        $sql = $this->connection->prepare("SELECT * FROM withdrawals");
        $sql->execute();

        $results = $sql->fetchAll();

        foreach($results as $result)
            echo "Gastaste " . $result["amount"] . " USD en: " . $result["description"] . "\n";

        // Esto es usanfo Fetch Column

        /* $sql = $this->connection->prepare("SELECT amount, description FROM withdrawals");
        $sql->execute();

        $results = $sql->fetchAll(\PDO::FETCH_COLUMN, 0);

        foreach($results as $result)
            echo "Gastaste $result USD \n"; */

    }

    /**
     * Muestra un formulario para crear un nuevo recurso
     */
    public function create() {}

    /**
     * Guarda un nuevo recurso en la base de datos
     */
    public function store($data) {

        $sql = $this->connection->prepare("INSERT INTO withdrawals (payment_method, type, date, amount, description) VALUES (:payment_method, :type, :date, :amount, :description)");

        $sql->bindValue(":payment_method", $data["payment_method"]);
        $sql->bindValue(":type", $data["type"]);
        $sql->bindValue(":date", $data["date"]);
        $sql->bindValue(":amount", $data["amount"]);
        $sql->bindValue(":description", $data["description"]);

        $data["description"] = "Compré cosas para mí";

        $sql->execute();

    }

    /**
     * Muestra un único recurso especificado
     */
    public function show($id) {

        $sql = $this->connection->prepare("SELECT * FROM withdrawals WHERE id=:id");
        $sql->execute([
            ":id" => $id
        ]);

        $result = $sql->fetch(\PDO::FETCH_ASSOC);

        echo "El registro con id $id dice que te gastaste {$result['amount']} USD en {$result['description']}";

    }

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