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
                <li><a  href="?controlador=minutas&accion=listar">Minuta</a></li>
                <li><a  href="?controlador=usuarios&accion=registrar">Agregar Minuta</a></li>
                <li> <a href="?" class="buttonInicio" style="color: white;">Cerrar Sesion</a></li>
            </ul>
        </nav>
    </div>
    <div class="w-4/5">
        <div class="flex w-full justify-end bg-gray-800 px-10 py-5">
            <div class="flex items-center space-x-4 text-white cursor-pointer">
                <img src="https://pickaface.net/gallery/avatar/unr_random_180410_1905_z1exb.png" alt="Vigilante 1" class="object-cover object-center rounded-full w-10 h-10" />
                <span>Vigilante 1</span>
            </div>
        </div>
        <div class="flex justify-between items-center px-10">
            <h1 class="text-2xl font-bold mb-12 mt-10 text-center text-gray-600">Listado de Usuarios</h1>

            <div class="rounded-md">
                <a
                    href="?controlador=usuarios&accion=registrar"
                    class="w-full flex items-center justify-center border border-transparent text-base font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 md:py-4 md:px-10"
                >
                    Registrar usuario
                </a>
            </div>
        </div>
        <div class="px-10">
        <table class="table-auto w-full shadow-lg bg-white">
            <thead>
                <tr>
                <th class="text-xl bg-gray-400 border text-center px-8 py-4 text-gray-100">Rol</th>
                <th class="text-xl bg-gray-400 border text-center px-8 py-4 text-gray-100">Nombre</th>
                <th class="text-xl bg-gray-400 border text-center px-8 py-4 text-gray-100">Nombre de usuario</th>
                <th class="text-xl bg-gray-400 border text-center px-8 py-4 text-gray-100">Opciones</th>
                </tr>
            </thead>
            <tbody class="text-lg text-center">
                <?php foreach($usuarios as $user) { ?>
                    <tr>
                        <td class="border px-8 py-4"><?php echo $roles[$user->rol] ?></td>
                        <td class="border px-8 py-4"><?php echo $user->nombre ?></td>
                        <td class="border px-8 py-4"><?php echo $user->username ?></td>
                        <td class="border px-8 py-4">
                            <div class="flex justify-evenly">
                            <a href="?controlador=usuarios&accion=editar&id=<?php echo $user->id ?>">
                                <i class="fa fa-pencil text-gray-700 hover:text-yellow-300"></i>
                            </a>
                            <a href="?controlador=usuarios&accion=eliminar&id=<?php echo $user->id ?>">
                                <i class="fa fa-times text-gray-700 hover:text-red-700"></i>
                            </a>
                            </div>  
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
</div>