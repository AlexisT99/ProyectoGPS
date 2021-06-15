<table border="2" style="border-collapse: collapse; width: 100%; height: 36px;">
    <thead>
        <tr style="height: 18px;">
            <th style="height: 18px; text-align: center;" colspan="4"><strong>Informe de Gastos</strong></th>
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
            <th style="height: 18px;" colspan="5"><strong>Gastos registrados</strong></th>
        </tr>
    </thead>
    <tbody>
        <tr style="height: 18px;">
            <td style="width: 25%; height: 18px; text-align: center;"><strong>Folio de gasto</strong></td>
            <td style="width: 25%; height: 18px; text-align: center;"><strong>Monto</strong></td>
            <td style="width: 25%; height: 18px; text-align: center;"><strong>Fecha del ingreso</strong></td>
            <td style="width: 25%; height: 18px; text-align: center;"><strong>Descripcion</strong></td>
            <td style="width: 25%; height: 18px; text-align: center;"><strong>Estado de la solicitud</strong></td>
        </tr>
        <?php foreach ($data as $row) : ?>
            <tr style="height: 18px;">
                <td style="width: 25%; text-align: center; height: 18px;"><?php echo $row['IDGASTO']; ?></td>
                <td style="width: 25%; text-align: center; height: 18px;"><?php echo $row['MONTO']; ?></td>
                <td style="width: 25%; text-align: center; height: 18px;"><?php echo $row['FECHAGASTO']; ?></td>
                <td style="width: 25%; text-align: center; height: 18px;"><?php echo $row['DESCRIPCION']; ?></td>
                <td style="width: 25%; text-align: center; height: 18px;"><?php echo $row['ESTADOSOLICITUD']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<p><strong>Total de Gastos: </strong><?php echo ($data2['MONTO'])?></p>