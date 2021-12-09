<div class="flex">
    <div id="sidebar" class="w-1/5 min-h-screen h-full">
        <nav>
            <ul>
                <li class="flex justify-end">
                    <img src="https://e7.pngegg.com/pngimages/51/441/png-clipart-cube-icon-sequelize-logo-icons-logos-emojis-tech-companies.png"
                        style="height: 4em; margin-top:1%;" alt="">
                    <br><br>
                </li>
                <li><a href="?controlador=usuarios&accion=listar" class="active">Inicio</a></li>
                <li><a href="">Minuta</a></li>
                <li><a href="">Agregar Minuta</a></li>
                <li> <a href="?" class="buttonInicio" style="color: white;">Cerrar Sesion</a></li>
            </ul>
        </nav>
    </div>
    <div class="w-4/5 pb-10">
        <div class="flex w-full justify-end bg-gray-800 px-10 py-5">
            <div class="flex items-center space-x-4 text-white cursor-pointer">
                <img src="https://pickaface.net/gallery/avatar/unr_random_180410_1905_z1exb.png" alt="Vigilante 1" class="object-cover object-center rounded-full w-10 h-10" />
                <span>Vigilante 1</span>
            </div>
        </div>
        <h1 class="px-10 pt-5">Registro de Usuarios</h1>
        <div class="contenedor mx-10">
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
    </div>
</div>
