<?php
if(isset($_POST['calcular'])){
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    $valor4 = $_POST['valor4'];
    $valor5 = $_POST['valor5'];
    $cantidad = $_POST['cantidad'];

    //valor real sera eñ promedio de ñps valores ingresados.

    $valor_real = ($valor1+$valor2+$valor3+$valor4+$valor5)/5;
    $unidades1 = $cantidad/$valor1;
    $unidades2 = $cantidad/$valor2;
    $unidades3 = $cantidad/$valor3;
    $unidades4 = $cantidad/$valor4;
    $unidades5= $cantidad/$valor5;

    $porcentaje_100 = round($cantidad/$valor_real, 3);

    $porcentaje1 = ($unidades1 * 100) / $porcentaje_100;
    $porcentaje2 = ($unidades2 * 100) / $porcentaje_100;
    $porcentaje3 = ($unidades3 * 100) / $porcentaje_100;
    $porcentaje4 = ($unidades4 * 100) / $porcentaje_100;
    $porcentaje5 = ($unidades5 * 100) / $porcentaje_100;

    echo $valor_real;
}
?>

<table class="table table-hover table-striped table-dark"> 
    <thead>
        <th>Cant. Total</th>
        <th>Valor</th>
        <th>Error Absoluto</th>
        <th>Error Relativo</th>
        <th>Error Porcentual</th>
        <th>Unidades Posibles</th>
        <th>Porcentajes</th>
        
    </thead>
    <tbody>
        <tr>
            <td><?php echo $cantidad; ?></td>
            <td><?php echo $valor1; ?></td>
            <td><?php echo round(($valor1-$valor_real), 2) ; ?></td>
            <td><?php echo round(($valor1-$valor_real), 2) / round($valor_real, 1) ;?></td>
            <td><?php echo ((round(($valor1-$valor_real), 2) / round($valor_real, 1)) * 100). " %" ;?></td>
            <td><?php echo $unidades1; ?></td>
            <td><?php echo $porcentaje1." %"; ?></td>
        </tr>
        <tr>
            <td><?php echo $cantidad; ?></td>
            <td><?php echo $valor2; ?></td>
            <td><?php echo round(($valor2-$valor_real), 2) ; ?></td>
            <td><?php echo round(($valor2-$valor_real), 2) / round($valor_real, 1) ;?></td>
            <td><?php echo ((round(($valor2-$valor_real), 2) / round($valor_real, 1)) * 100). " %" ;?></td>
            <td><?php echo $unidades2; ?></td>
            <td><?php echo $porcentaje2." %"; ?></td>
        </tr>
        <tr>
            <td><?php echo $cantidad; ?></td>
            <td><?php echo $valor3; ?></td>
            <td><?php echo round(($valor3-$valor_real), 2) ; ?></td>
            <td><?php echo round(($valor3-$valor_real), 2) / round($valor_real, 1) ;?></td>
            <td><?php echo ((round(($valor3-$valor_real), 2) / round($valor_real, 1)) * 100). " %" ;?></td>
            <td><?php echo $unidades3; ?></td>
            <td><?php echo $porcentaje3." %"; ?></td>
        </tr>
        <tr>
            <td><?php echo $cantidad; ?></td>
            <td><?php echo $valor4; ?></td>
            <td><?php echo round(($valor4-$valor_real), 2) ; ?></td>
            <td><?php echo round(($valor4-$valor_real), 2) / round($valor_real, 1) ;?></td>
            <td><?php echo ((round(($valor4-$valor_real), 2) / round($valor_real, 1)) * 100). " %" ;?></td>
            <td><?php echo $unidades4; ?></td>
            <td><?php echo $porcentaje4." %"; ?></td>
        </tr>
        <tr>
            <td><?php echo $cantidad; ?></td>
            <td><?php echo $valor5; ?></td>
            <td><?php echo round(($valor5-$valor_real), 2) ; ?></td>
            <td><?php echo round(($valor5-$valor_real), 2) / round($valor_real, 1) ;?></td>
            <td><?php echo ((round(($valor5-$valor_real), 2) / round($valor_real, 1)) * 100). " %" ;?></td>
            <td><?php echo $unidades5; ?></td>
            <td><?php echo $porcentaje5." %"; ?></td>
        </tr>
    </tbody>
</table>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <a href="index.html" class="btn btn-warning">Salir</a>
</body>
</html>