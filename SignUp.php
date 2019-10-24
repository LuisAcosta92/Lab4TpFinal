
<?php
require ("php/clases/Registro.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ENTRASTE GG WP</h1>

    <form action="php/clases/Registro.php" method="post">
        Nombre de usuario:  <br>
        <input type="text" name="Usuario" placeholder="Ingrese su Nombre de usuario"> 
        <br>
        Email:  <br>
        <input type="email" name="email" placeholder="Ingrese su Email">
        <br>
        Contraseña:  <br>
        <input type="Password" name="password" placeholder="Ingrese su Contraseña">
        <br>
        Confirmacion de contraseña:  <br>
        <input type="Password" name="confirm_password" placeholder="Confirme Contraseña">
        <br><br>
        Nombre:  <br>
        <input type="text" name="nombre" placeholder="Ingrese su Nombre/s">
        <br>
        Apellido  <br>
        <input type="text" name="apellido" placeholder="Ingrese su Apellido/s">
        <br>
        D.N.I  <br>
        <input type="number" name="dni" placeholder="Ingrese su D.N.I">
        <br>
        Dirección:  <br>
        <input type="text" name="direccion" placeholder="Ingrese su Direccion">
        <br>
        Teléfono:  <br>
        <input type="number" name="telefono" placeholder="Ingrese su Teléfono">
        <br>
        Numero Móbil:  <br>
        <input type="number" name="celular" placeholder="Ingrese su numero Móbil">
        <br>
        Fecha de nacimiento:  <br>
        <input type="date" name="fechaNacimiento">
        <br>
        Pais:  <br>
        <input type="text" name="pais" placeholder="Ingrese pais de origen">
        <br>
        Provincia:  <br>
        <input type="text" name="provincia" placeholder="Ingrese provincia">
        <br>
        Localidad:  <br>
        <input type="text" name="localidad" placeholder="Ingrese localidad">
        <input type="submit" value="Registrarce"> <a href="index.php"><input type="button" value="Cancelar"></a>
    </form>
</body>
</html>