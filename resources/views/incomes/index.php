<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de ingresos</title>
</head>
<body>
    <h1>Lista de ingresos</h1>

    <ul>
        <?php foreach($resul as $income):?>
            <li>
                <h2><?php echo $income["payment_method"];?> - <?php echo $income["type"];?> - <?php echo $income["date"];?></h2>
                <p>Monto: <?php echo $income["amount"];?> - Descripción: <?php echo $income["description"];?></p>
            </li>
        <?php endforeach;?>
    </ul>
    </ul>
</body>
</html>