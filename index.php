<?php
    $productos = [
        [
            "nombre" => 'Tablet',
            "precio" => 200,
            "disponible" => true
        ],
        [
            "nombre" => 'Televisor 24"',
            "precio" => 300,
            "disponible" => true
        ],
        [
            "nombre" => 'Monitor Curvo',
            "precio" => 400,
            "disponible" => true
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa Json Encode y Decode</title>
</head>
<body> 
    <header></header>
    <h1>Uso del JSON Exampĺe</h1>
    <nav></nav>
    <main>
        <pre class="resultado">
            <?php
                //implementando el encode para convetir a un objeto JSON tipo string
                var_dump($productos);
                $json = json_encode($productos, JSON_UNESCAPED_UNICODE);
            ?> 
            <br/>

            <?php
            var_dump($json);
            ?>

            <?php
                //implementando el decobe para pasar de un JSON a un array asociativo en PHP iterable 
                var_dump($productos);
                $jsonDecode = json_decode($json, JSON_UNESCAPED_UNICODE);
            ?> 
            <br/>
            <?php
            var_dump($jsonDecode);
            ?>

        </pre>
        
        <table border>
            <head>
                <tr>
                    <th>Nombre</th>
                    <th>Presio</th>
                    <th>disponible</th>
                </tr>
            </head>
            <tbody> 
                <?php foreach ($productos as $producto) { ?>
                    <tr>
                        <td><?= $producto['nombre']?></td>
                        <td><?= $producto['precio']?></td>
                        <td><?= $producto['disponible']?></td>
                    </tr>
                <?php } ?>

            </tbody>

        </table>

        <br/>

        <table border>
            <head>
                <tr>
                    <th>Nombre</th>
                    <th>Presio</th>
                    <th>disponible</th>
                </tr>
            </head>
            <tbody> 
                <?php 
                
                    foreach ($productos as $producto) {
                        echo "<tr>";
                        foreach ($producto as $key => $valor) {
                            $valor === true ? $valor = 'Disponible' : ($valor === false ? $valor = 'No Disponible' : $valor = $valor);
                            echo "<td>$valor</td>";
                        }
                        echo "</tr>";
                    }
                ?>

            </tbody>

        </table>

    </main>
    <footer></footer>

    
</body>
</html>