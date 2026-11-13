<?php
require_once "../../config/database.php";

$query = mysqli_query($mysqli, "SELECT * FROM v_clientes")
         or die('Error'.mysqli_error($mysqli));

$count = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Clientes</title>
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
        Reporte de Clientes
    </div>
    <div align="center" style="margin-top: 5px; font-weight: bold;">
        Cantidad: <?php echo $count; ?>
    </div>
    <hr style="border: 0; border-top: 1px solid #ccc; margin: 15px 0;">
    <div id="tabla">
        <table width="100%" border="0.3" cellpadding="0" cellspacing="0" align="center">
            <thead style="background:#e8ecee">
                <tr class="table-title">
                    <th height="30" align="center" valign="middle"><small>Ruc</small></th>
                    <th height="30" align="center" valign="middle"><small>Dpto</small></th>
                    <th height="20" align="center" valign="middle"><small>Ciudad</small></th>
                    <th height="30" align="center" valign="middle"><small>Nombre</small></th>
                    <th height="30" align="center" valign="middle"><small>Apellido</small></th>
                    <th height="30" align="center" valign="middle"><small>Teléfono</small></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($data = mysqli_fetch_assoc($query)) {
                    $ci_ruc       = $data['ci_ruc'];
                    $dep_desc     = $data['dep_descripcion'];
                    $ciu_desc     = $data['descrip_ciudad'];
                    $nombre       = $data['cli_nombre'];
                    $apellido     = $data['cli_apellido'];
                    $telefono     = $data['cli_telefono'];

                    echo "<tr>
                            <td width='100' align='left'>$ci_ruc</td>
                            <td width='120' align='left'>$dep_desc</td>
                            <td width='120' align='left'>$ciu_desc</td>
                            <td width='100' align='left'>$nombre</td>
                            <td width='120' align='left'>$apellido</td>
                            <td width='120' align='left'>$telefono</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
