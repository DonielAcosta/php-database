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

        $sql->bindColumn('amount', $amount);
        $sql->bindColumn('description', $description);
        while($sql->fetch())
            echo "Ganaste  $amount USD en: $description \n";

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
    public function show($id){
        $sql = $this->connection->prepare("SELECT * FROM incomes WHERE id=:id");
        $sql->execute([
            ':id' => $id
        ]);

    }

    /**
     * Muestra el formulario para editar un recurso
     */
    public function edit() {}

    /**
     * Actualiza un recurso específico en la base de datos
     */
    public function update($data,$id){
        $sql = $this->connection->prepare("UPDATE incomes SET payment_method=:payment_method, type=:type, date=:date, amount=:amount, description=:description WHERE id=:id");

        $sql->bindValue(":payment_method", $data["payment_method"]);
        $sql->bindValue(":type", $data["type"]);
        $sql->bindValue(":date", $data["date"]);
        $sql->bindValue(":amount", $data["amount"]);
        $sql->bindValue(":description", $data["description"]);
        $sql->bindValue(":id", $id);

        $sql->execute();
    }

    /**
     * Elimina un recurso específico de la base de datos
     */
    public function destroy($id) {
        $this->connection->beginTransaction();
        $sql = $this->connection->prepare("DELETE FROM incomes WHERE id = :id");
        $sql->execute([':id' => $id]);

        $conf = readline("quieres borrar el registro?");

        if(strtolower($conf) =="no"){
            $this->connection->rollBack();
        }else{
            $this->connection->commit();
            echo "Registro eliminado con éxito!";
        }
    }
    
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