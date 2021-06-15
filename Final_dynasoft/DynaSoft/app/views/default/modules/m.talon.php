<table border="2" style="border-collapse: collapse; width: 99.3843%; height: 92px;" height="132">
    <thead>
        <tr style="height: 18px;">
            <th style="text-align: center; width: 80%; height: 18px;" colspan="4">Talon de Pago</th>
        </tr>
    </thead>
    <tbody>
        <tr style="height: 18px;">
            <td style="width: 20%; height: 18px; text-align: center;"><strong>Nombre del trabajador</strong></td>
            <td style="width: 20%; height: 18px; text-align: center;"><strong>Fecha del Pago</strong></td>
            <td style="width: 20%; height: 18px; text-align: center;"><strong>Inicio del periodo</strong></td>
            <td style="width: 20%; height: 18px; text-align: center;"><strong>Fin del Periodo</strong></td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 20%; height: 18px; text-align: center;"><?php echo $data['NOMBRE_TRAB']; ?></td>
            <td style="width: 20%; height: 18px; text-align: center;"><?php echo $data2['FECHA']; ?></td>
            <td style="width: 20%; height: 18px; text-align: center;"><?php echo $data2['INICIOPERIODO']; ?></td>
            <td style="width: 20%; height: 18px; text-align: center;"><?php echo $data2['FINPERIODO']; ?></td>
        </tr>
        <tr style="height: 19px;">
            <td style="width: 20%; height: 19px; text-align: center;"><strong>Observaciones del pago</strong></td>
            <td style="width: 20%; height: 19px; text-align: center;"><strong>Percepciones</strong></td>
            <td style="width: 20%; height: 19px; text-align: center;"><strong>Descuentos</strong></td>
            <td style="width: 20%; height: 19px; text-align: center;"><strong>Liquido</strong></td>
        </tr>
        <tr style="height: 19px;">
            <td style="width: 20%; height: 19px; text-align: center;"><?php echo $data2['OBSPAGO']; ?></td>
            <td style="width: 20%; height: 19px; text-align: center;"><?php echo $data6['MONTO']; ?></td>
            <td style="width: 20%; height: 19px; text-align: center;"><?php echo $data7['MONTO']; ?></td>
            <td style="width: 20%; height: 19px; text-align: center;"><?php echo $data5['MONTO']; ?></td>
        </tr>
    </tbody>
</table>
<p></p>
<table border="2" style="border-collapse: collapse; width: 100.844%; height: 72px;">
    <thead>
        <tr style="height: 18px;">
            <th style="text-align: center; width: 99.8605%; height: 18px;" colspan="3">Percepciones</th>
        </tr>
    </thead>
    <tbody>
        <tr style="height: 18px;">
            <td style="width: 10%; height: 18px; text-align: center;"><strong>ID de la percepcion</strong></td>
            <td style="width: 45%; height: 18px; text-align: center;"><strong>Nombre de la percepcion</strong></td>
            <td style="width: 45%; height: 18px; text-align: center;"><strong>Monto de la percepcion</strong></td>
        </tr>
        <?php foreach ($data3 as $row) : ?>
            <tr style="height: 18px;">
                <td style="width: 10%; height: 18px;"><?php echo $row['IDPRESTACION']; ?></td>
                <td style="width: 45%; height: 18px;"><?php echo $row['NOMBREPRES']; ?></td>
                <td style="width: 45%; height: 18px;"><?php echo $row['MONTO']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<table border="2" style="border-collapse: collapse; width: 100.844%; height: 72px;">
    <thead>
        <tr style="height: 18px;">
            <th style="text-align: center; width: 99.8605%; height: 18px;" colspan="3">Descuentos</th>
        </tr>
    </thead>
    <tbody>
        <tr style="height: 18px;">
            <td style="width: 10%; height: 18px; text-align: center;"><strong>ID del descuento</strong></td>
            <td style="width: 45%; height: 18px; text-align: center;"><strong>Nombre del descuento</strong></td>
            <td style="width: 45%; height: 18px; text-align: center;"><strong>Monto del descuento</strong></td>
        </tr>
        <?php foreach ($data4 as $row) : ?>
            <tr style="height: 18px;">
                <td style="width: 10%; height: 18px;"><?php echo $row['IDPRESTACION']; ?></td>
                <td style="width: 45%; height: 18px;"><?php echo $row['NOMBREPRES']; ?></td>
                <td style="width: 45%; height: 18px;"><?php echo $row['MONTO']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<p><strong>Total: <?php echo $data5['MONTO']; ?></strong></p>