<table border="2" style="border-collapse: collapse; width: 100%; height: 36px;">
    <thead>
        <tr style="height: 18px;">
            <th style="height: 18px; text-align: center;" colspan="4"><strong>Informe de ingresos</strong></th>
        </tr>
    </thead>
    <tbody>
        <tr style="height: 18px;">
            <td style="width: 25%; height: 18px; text-align: center;"><strong>Fecha de Inicio:</strong></td>
            <td style="width: 25%; height: 18px;"><?php echo $fechaIni; ?></td>
            <td style="width: 25%; height: 18px; text-align: center;"><strong>Fecha de finalizacion:</strong></td>
            <td style="width: 25%; height: 18px;"><?php echo $fechaFin; ?></td>
        </tr>
    </tbody>
</table>
<p></p>
<table border="2" style="border-collapse: collapse; width: 100%; height: 54px;">
    <thead>
        <tr style="height: 18px;">
            <th style="height: 18px;" colspan="4"><strong>Ingresos por Obra</strong></th>
        </tr>
    </thead>
    <tbody>
        <tr style="height: 18px;">
            <td style="width: 25%; height: 18px; text-align: center;"><strong>Folio de ingreso</strong></td>
            <td style="width: 25%; height: 18px; text-align: center;"><strong>Monto</strong></td>
            <td style="width: 25%; height: 18px; text-align: center;"><strong>Fecha del ingreso</strong></td>
            <td style="width: 25%; height: 18px; text-align: center;"><strong>Descripcion</strong></td>
        </tr>
        <?php foreach ($data as $row) : ?>
            <tr style="height: 18px;">
                <td style="width: 25%; text-align: center; height: 18px;"><?php echo $row['IDINGRESO']; ?></td>
                <td style="width: 25%; text-align: center; height: 18px;"><?php echo $row['MONTO_INGRESO']; ?></td>
                <td style="width: 25%; text-align: center; height: 18px;"><?php echo $row['FECHAINGRESO']; ?></td>
                <td style="width: 25%; text-align: center; height: 18px;"><?php echo $row['DESCRIPCIONINGRESO']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<p><strong>Total de Ingresos Por Obra: </strong><?php echo $data4['MONTO']; ?></p>
<table border="2" style="border-collapse: collapse; width: 100%; height: 54px;">
    <thead>
        <tr style="height: 18px;">
            <th style="height: 18px; text-align: center;" colspan="4"><strong>Ingresos por Reintegro de viaticos</strong></th>
        </tr>
    </thead>
    <tbody>
        <tr style="height: 18px;">
            <td style="width: 25%; height: 18px; text-align: center;"><strong>Folio de Reintegro</strong></td>
            <td style="width: 25%; height: 18px; text-align: center;"><strong>Nombre del viatico</strong></td>
            <td style="width: 25%; height: 18px; text-align: center;"><strong>Monto</strong></td>
            <td style="width: 25%; height: 18px; text-align: center;"><strong>Fecha del ingreso</strong></td>
        </tr>
        <?php foreach ($data2 as $row) : ?>
            <tr style="height: 18px;">
                <td style="width: 25%; text-align: center; height: 18px;"><?php echo $row['IDREINTEGRO']; ?></td>
                <td style="width: 25%; text-align: center; height: 18px;"><?php echo $row['NOMBRE']; ?></td>
                <td style="width: 25%; text-align: center; height: 18px;"><?php echo $row['INGMONTO']; ?></td>
                <td style="width: 25%; text-align: center; height: 18px;"><?php echo $row['FECHAOTING']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<p><strong>Total de Ingresos por Reintegro: </strong><?php echo $data3['MONTO']; ?></p>
<p><strong>Total de Ingresos: </strong><?php echo ($data3['MONTO']+$data4['MONTO'])?></p>