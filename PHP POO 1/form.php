<form action="procesar.php" enctype="multipart/form-data" method="post">
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="nombre" required><br><br>
    
    <label for="surname">Apellidos:</label>
    <input type="text" id="apellidos" name="apellidos" required><br><br>
    
    <label for="birthdate">Fecha de nacimiento</label>
    <input type="date" id="fechadenacimiento" name="fechadenacimiento"><br><br>
    
    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="address">Dirección:</label>
    <input type="text" id="direccion" name="direccion"><br><br>
    
    <label for="bankaccount">Cuenta Bancaria:</label>
    <input type="text" id="bankaccount" name="cuentabancaria"><br><br>
    
    <label for="passwd">Contraseña:</label>
    <input type="password" id="contraseña" name="contraseña" required><br><br>
    
    <input type="submit" name="submit" value="Registrar">
</form>