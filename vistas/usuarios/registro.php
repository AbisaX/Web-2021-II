<h1>Registro de Usuarios</h1>
<div class="contenedor">
    <form action="?controlador=usuarios&accion=registrar" method="POST">
        <label for="user-role">Rol</label><br> 
        <select name="rol" id="user-role"> 
            <option value="1">Administrador</option> 
            <option value="2">Vigilante</option> 
        </select><br>

        <label for="user-name">Nombre Completo</label><br>
        <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre completo del usuario a registrar"><br>

        <label for="username">Nombre de Usuario</label><br>
        <input type="text" id="username" name="username" placeholder="Ingrese un nombre de usuario"><br>

        <label for="password">Contraseña</label><br>
        <input type="password" id="password" name="password" placeholder="Ingrese una contraseña"><br>

        <div class="button-container">
            <input type="submit" value="Registrar">
        </div>
    </form>
</div>