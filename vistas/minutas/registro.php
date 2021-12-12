<?php session_start() ?>
<div class="flex">
    <div id="sidebar" class="w-1/5 min-h-screen h-full">
        <nav>
            <ul>
                <li class="flex justify-end">
                    <img src="https://e7.pngegg.com/pngimages/51/441/png-clipart-cube-icon-sequelize-logo-icons-logos-emojis-tech-companies.png"
                        style="height: 4em; margin-top:1%;" alt="">
                    <br><br>
                </li>
                <li><a href="?controlador=usuarios&accion=listar">Inicio</a></li>
                <li><a  href="?controlador=minutas&accion=listar">Minuta</a></li>
                <li><a  href="?controlador=minutas&accion=registrar" class="active">Agregar Minuta</a></li>
                <li> <a href="?controlador=login&accion=logout" class="buttonInicio" style="color: white;">Cerrar Sesion</a></li>
            </ul>
        </nav>
    </div>
    <div class="w-4/5 pb-10">
        <div class="flex w-full justify-end bg-gray-800 px-10 py-5">
            <div class="flex items-center space-x-4 text-white cursor-pointer">
                <img src="https://pickaface.net/gallery/avatar/unr_random_180410_1905_z1exb.png" alt="Vigilante 1" class="object-cover object-center rounded-full w-10 h-10" />
                <span><?php echo $_SESSION["nombre"] ?></span>
            </div>
        </div>
        <h1 class="px-10 pt-5">Registro de Minutas</h1>
        <div class="contenedor mx-10">
        <form action="?controlador=minutas&accion=registrar" method="POST">
            
            <div class="datetime-container">
                <div class="date-container">
                    <label for="fecha">Fecha</label>
                    <input class="date-picker" type="date" id="fecha" name="fecha">
                </div>
                    
                <div class="date-container">
                    <label for="hora">Hora</label>
                    <input class="date-picker" type="time" id="hora" name="hora">
                </div>
            </div>

                <label for="descripcion">Descripción</label><br>
                <textarea name="descripcion" rows="5"></textarea><br>

                <div class="button-container">
                    <input type="submit" value="Registrar">
                </div>
            </form>
        </div>
    </div>
</div>
