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
            <input type="date" name="fecha"> <br>
            <table>
            <thead>
                <tr>
                    <th>Descripcion</th>
                    <th>Cuenta</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="descripcion"></td>
                    <td><select class="inputselect" name="cuenta" id="" value=>
                        <option value=1>Efectivo</option>
                        <option value=9>Ventas</option>
                        </select>
                    </td>
                    <td><input class="inputmonto" name="valor" type="number"></td>
                </tr>
                <tr>
                    <td><input type="text" name="descripcion2"></td>
                    <td><select class="inputselect" name="cuenta2" id="">
                        <option value=1>Efectivo</option>
                        <option value=9>Ventas</option>
                        </select>
                    </td>
                    <td><input class="inputmonto" name="valor2" type="number"></td>
                </tr>
            </tbody>
        </table>    

        <input type="submit" class="button" value="Registrar">
        </form>
        </fieldset>




    </main>
</body>
</html>