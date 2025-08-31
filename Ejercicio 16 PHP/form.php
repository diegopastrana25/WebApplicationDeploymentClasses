<?php
include "includes/header.php";
include_once "includes/funciones/funciones.php";
?>

<form action="recibir1.php" enctype="multipart/form-data" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>
    
    <label for="apellidos">Apellidos:</label>
    <input type="text" id="apellidos" name="apellidos" required><br><br>
    
    <label for="fechadenacimiento">Fecha de nacimiento:</label>
    <input type="date" id="fechadenacimiento" name="fechadenacimiento" required><br><br>
    
    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="archivo">Subir Archivo:</label>
    <input type="file" id="archivo" name="archivo"><br><br>
    
    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required><br><br>
    
    <label for="rol">Rol:</label>
    <select id="rol" name="rol" required>
        <option value="admin">Admin</option>
        <option value="editor">Editor</option>
        <option value="usuario">Usuario</option>
    </select><br><br>
    
    <input type="submit" name="submit" value="Registrar">
</form>

<?php
require_once "includes/footer.php";
?>