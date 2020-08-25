<?php include("db.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apo contable</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header ">
        <h1 class="apo">Apo Contable</h1>
    </header>

    <main>

        <fieldset class="container">
            <legend align="left"><strong> Hacer asiento contable</strong></legend>
            <form action="guardar_asiento.php" method="POST">
            <label for=""><strong>Fecha</strong></label> 
            <input type="date" name="fecha" required>
            <label for="" class="asiento1"><strong>Asiento:</strong></label>
            <?php
            $query2 ="SELECT Asiento FROM registros ORDER BY Asiento DESC LIMIT 1";
            $result_as = mysqli_query($conn, $query2);
            $row2 = mysqli_fetch_array($result_as);
 
            $asientom = $row2['Asiento']+1; 
            ?>
            <input type="number" name="nr_asiento" value="<?php echo $asientom;?>" disabled="disabled" class="nr_asiento1"> <br>
            <table class="tabla_asiento">
            <thead>
                <tr>
                    <th>Descripcion</th>
                    <th>Cuenta</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                <tr >
                    <td><input type="text" name="descripcion"required></td>
                    <td><select required class="inputselect" name="cuenta" id="" value=>
                    <?php
                        $query ="SELECT *FROM cuentas";
                        $result_cuentas = mysqli_query($conn, $query);
                        
                        while ($row = mysqli_fetch_array($result_cuentas)) { ?>
                        <option value=<?php echo $row["id_cuentas"]; ?>><?php echo $row["nombre"]?></option>
                        <?php } ?>
                        </select>
                    </td>
                    <td><input class="inputmonto" name="valor" type="number" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="descripcion2" required></td>
                    <td><select required class="inputselect" name="cuenta2" id="">
                        <?php
                        $query ="SELECT *FROM cuentas";
                        $result_cuentas = mysqli_query($conn, $query);
                        
                        while ($row = mysqli_fetch_array($result_cuentas)) { ?>
                        <option value=<?php echo $row["id_cuentas"]; ?>><?php echo $row["nombre"]?></option>
                        <?php } ?>

                        </select>
                    </td>
                    <td><input class="inputmonto" name="valor2" type="number" required></td>
                </tr>
            </tbody>
        </table>    

        <input type="submit" class="button" value="Registrar">
        </form>
        </fieldset>

        <fieldset class="container">
        <legend align="left"><strong>Consultar Asiento</strong></legend>
        <form action="index.php" method="POST">
        <label for="">Número de asiento</label>
        <input type="number" class="nr_asiento1" name="c_asiento2">
        <table>
        <thead>
            <tr class="tituloctas">
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
        if(isset($_POST['c_asiento2'])) {
        $c_asiento = $_POST['c_asiento2'];
        
        $query4 ="SELECT * FROM registros LEFT JOIN cuentas ON registros.id_Registros = cuentas.id_cuentas WHERE Asiento = $c_asiento"; 
        $resultado_c = mysqli_query($conn, $query4);
        
        while ($row = mysqli_fetch_array($resultado_c)) { ?>

            <tr class="tituloctas">
                <td><?php echo $row['Asiento'];?></td>
                <td><?php echo $row['date1'];?></td>
                <td>nro largo</td>
                <td>nombre</td>
                <td><?php echo $row['descripcion'];?></td>
                <td><?php echo $row['valor'];?></td>    
            </tr>
    
            
        <?php } } 
        ?>
        
        
        </tbody>
        </table>
        <input type="submit" class="button" value="Consultar">
        </form>
        </fieldset>




    </main>
</body>
</html>