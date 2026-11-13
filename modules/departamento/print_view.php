<?php
require_once "../../config/database.php";

$query = mysqli_query($mysqli, "SELECT * FROM departamento")
    or die('Error'.mysqli_error($mysqli));

$count = mysqli_num_rows($query);
?>

<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de departamentos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div align="center">
        <img src="../../images/user/asuncion.jpg" width="180">
    </div>
    <div style="font-size: 14px; font-weight: bold; margin-top: 10px;">
        Reporte de departamento
    </div>
    <div align="center" style="margin-top: 5px; font-weight: bold;">
        Cantidad: <?php echo $count; ?>
    </div>
    <hr style="border: 0; border-top: 1px solid #ccc; margin: 15px 0;">
    <div id="tabla">
        <table width="100%" border="0.5" cellpadding="5" cellspacing="0" align="center" style="border-collapse: collapse;">
            <thead>
                <tr style="background: #f2f2f2;">
                    <th width="80" align="center">Código</th>
                    <th width="300" align="left">Descripción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($data = mysqli_fetch_assoc($query)) {
                    $codigo = $data['id_departamento'];
                    $dep_descripcion = $data['dep_descripcion'];

                    echo "<tr>
                            <td align='center'>$codigo</td>
                            <td align='left'>$dep_descripcion</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>