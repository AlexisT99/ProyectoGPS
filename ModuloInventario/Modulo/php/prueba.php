<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="InterfazControlador.php" method="post" enctype="multipart/form-data">
        <label for="codigo">Codigo</label>
        <input type="text" id="txtCodigo" name="txtCodigo" required>
        <label for="descripcion">descripción</label>
        <textarea name="txtDescripcion" id="txtDescripcion" cols="30" rows="3" ></textarea>

        <label for="tipo">Tipo</label>
        <select name="cmbTipo" id="cmbTipo">
            <option value="Pastel">Pastel</option>
            <option value="Mostachon">Mostachon</option>
            <option value="Pay">Pay</option>
        </select>

        <label for="Caracteristicas">Caracteristicas</label>
        <input type="text" id="txtCaracteristicas" name="txtCaracteristicas">
        <label for="Marca">Marca</label>
        <input type="text" id="txtMarca" name="txtMarca">
        <label for="Modelo">Modelo</label>
        <input type="text" id="txtModelo" name="txtModelo">

        <input type="submit" value="Guardar" name="Guardar" class = "boton">
    </form>
</body>
</html>