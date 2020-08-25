<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta asiento</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
</head>
</head>
<body>

<header class="header ">
        <h1 class="apo">Apo Contable</h1>
    </header>

    </form>
        </fieldset>

        <fieldset class="container">
        <legend align="left"><strong>Consultar Asiento</strong></legend>
        <form action="consulta.php" method="POST">
        <label for="">Número de asiento</label>
        <input type="number" class="nr_asiento1" name="c_asiento2">
        <table>
        <thead>
            <tr>
                 <th><strong>Asiento</strong></th>
                 <th><strong>Fecha</strong></th>
                 <th><strong>Cuenta Corta</strong></th>
                 <th><strong>Nombre Cuenta</strong></th>
                 <th><strong>Descripción</strong></th>
                 <th><strong>valor</strong></th>           
            </tr>
        </thead>
        
        <tbody>
        <?php 
        $c_asiento = $_POST['c_asiento2'];
        $query4 ="SELECT * FROM registros LEFT JOIN cuentas ON registros.id_Registros = cuentas.id_cuentas WHERE Asiento = 5";
        $resultado_c = mysqli_query($conn, $query4);
        while ($row = mysqli_fetch_array($resultado_c)) { ?>

            <tr>
                <td><?php echo $row['Asiento'];?></td>
                <td><?php echo $row['date1'];?></td>
                <td>nro largo</td>
                <td>nombre</td>
                <td><?php echo $row['descripcion'];?></td>
                <td><?php echo $row['valor'];?></td>    
            </tr>
            
        <?php } ?>
        
        
        </tbody>
        </table>
        <input type="submit" class="button" value="Consultar">
        </form>
        </fieldset>
    
</body>
</html>