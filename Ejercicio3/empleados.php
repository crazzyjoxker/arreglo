<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1 class="centrado">Información de los empleados</h1>
    </header>
    <section>
        <?php
            $empleados = array(
                array("nombre" => $_POST['nombre1'], "apellido" => $_POST['apellido1'], "cedula" => $_POST['cedula1'], "oficina" => $_POST['oficina1'], "departamento" => $_POST['departamento1'], "sueldo" => $_POST['sueldo1']),
                array("nombre" => $_POST['nombre2'], "apellido" => $_POST['apellido2'], "cedula" => $_POST['cedula2'], "oficina" => $_POST['oficina2'], "departamento" => $_POST['departamento2'], "sueldo" => $_POST['sueldo2']),
                array("nombre" => $_POST['nombre3'], "apellido" => $_POST['apellido3'], "cedula" => $_POST['cedula3'], "oficina" => $_POST['oficina3'], "departamento" => $_POST['departamento3'], "sueldo" => $_POST['sueldo3']),
            );
            for($i=0; $i <= 2; $i++){
                echo '<div class="empleado">';
                    echo '<div class="info">';
                        echo '</h3>Nombre: ' . $empleados[$i]['nombre'] . ' ' . $empleados[$i]['apellido'] . '   C.I.: ' . $empleados[$i]['cedula'] . '</h3><br>';
                        echo '</h3>Oficina: ' . $empleados[$i]['oficina'] . ' Dpto. ' . $empleados[$i]['departamento'] . ' Sueldo: ' . $empleados[$i]['sueldo'] . '</h3>';
                    echo '</div>';
                echo '</div>';
            }
        ?>
    </section>
</body>
</html>