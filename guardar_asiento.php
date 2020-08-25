<?php
include ("db.php");

/**$cuenta = $_POST['cuenta'];
$descripcion = $_POST['descripcion'];
$valor = $_POST['valor'];
echo ("$descripcion");
echo ("$valor");
echo ("$cuenta");**/

/*if(isset($_POST['guardar_asiento'])){*/
    /* Primera linea de asiento*/
    $descripcion = $_POST['descripcion'];
    $cuenta = $_POST['cuenta'];
    $valor = $_POST['valor'];
    $fecha = $_POST['fecha'];
    $query2 ="SELECT Asiento FROM registros ORDER BY Asiento DESC LIMIT 1";
            $result_as = mysqli_query($conn, $query2);
            $row2 = mysqli_fetch_array($result_as); 
            $asientom = $row2['Asiento'];

    $nr_asiento = $asientom+1;
    

    $query ="INSERT INTO registros(Asiento, descripcion, cuenta, valor, date1) VALUES ($nr_asiento, '$descripcion', $cuenta, $valor, '$fecha')";
    $resultado= mysqli_query($conn, $query);
    /* Segunda linea de asiento*/
    $descripcion2 = $_POST['descripcion2'];
    $cuenta2 = $_POST['cuenta2'];
    $valor2 = $_POST['valor2'];

    $query2 ="INSERT INTO registros(Asiento, descripcion, cuenta, valor, date1) VALUES ($nr_asiento, '$descripcion2', $cuenta2, $valor2, '$fecha')";
    $resultado2= mysqli_query($conn, $query2);



    echo "algo salio mal";

    if (!$resultado){
        die("query failed");
    }

    $_SESSION['message'] = 'Tarea guardada';
    $_SESSION['message_type'] = 'success';

    header("location: index.php");
    echo "algo salio mal2";
  


?>