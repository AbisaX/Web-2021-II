<h1>Edicion de Usuario</h1>
<div class="contenedor">
    <form action="?controlador=usuarios&accion=editar&id=<?php echo $usuario->id ?>" method="POST">
        <label for="user-role">Rol</label><br> 
        <select name="rol"> 
            <option value="1">Administrador</option> 
            <option value="2">Vigilante</option> 
        </select><br>

        <label for="user-name">Nombre Completo</label><br>
        <input type="text" value="<?php echo $usuario->nombre ?>" name="nombre" placeholder="Ingrese el nombre completo del usuario a registrar"><br>

        <label for="username">Nombre de Usuario</label><br>
        <input type="text" value="<?php echo $usuario->username ?>" name="username" placeholder="Ingrese un nombre de usuario"><br>

        <div class="button-container">
            <input type="submit" value="Guardar">
        </div>
    </form>
</div>