<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrega un nuevo Ingreso</title>
</head>
<body>
    <h1>Agrega un nuevo Ingreso</h1>
    <form action="/incomes" method="post">
        <label for="payment_method">Metodo de pago</label>
        <select name="payment_method id="payment_method>
            <option value="1" selected>Cuenta Bancaria</option>
            <option value="2">Tarjeta de Credito</option>
        </select>

        <label for="type">Tipo de Ingreso</label>
        <select name="type id="type>
            <option value="1" selected>Pago Nomina</option>
            <option value="2">rembolso</option>
        </select>

        <label for="date">Fecha</label>
        <input type="date" name="date" id="date">

        <label for="amount">Monto</label>
        <input type="text" name="amount" id="amount">

        <label for="description">Descripcion</label>
        <textarea name="description" id="description" ></textarea>

        <input type="hidden" name="method" value="post">
        <button type="submit">Agregar Ingreso</button>


    </form>
</body>
</html>