<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Persona</title>
</head>
<body>
    <h1>Datos de Persona</h1>
    <?php
    if(isset($_GET["success"]) && $_GET["success"] == "false"){
        echo "<p><b>ERROR: No se registro  la persona</p>";
    }
    ?>
    <form action="procesa_form.php" method="POST" autocomplete="off">
        <input type="text" name="apellidos" placeholder="Apellidos"><br>
        <input type="text" name="nombres" placeholder="nombres"><br>
        <input type="text" name="dni" placeholder="DNI"><br>
        <input type="text" name="telefono" placeholder="Telefono"><br>
        <input type="text" name="correo" placeholder="Correo"><br>
        <input type="submit" value="Guardar">
        <input type="reset" value="Restablecer">
    </form>
</body>
</html>