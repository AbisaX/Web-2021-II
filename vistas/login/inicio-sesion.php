<link rel="stylesheet" href="vistas/styles/login.css">
<?php if(strlen($error)) { ?>
    <div class="bg-red-100 mb-5 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
            <div>
            <p class="font-bold">Un error ha ocurrido</p>
            <p class="text-sm">Por favor rellene todos los campos</p>
            </div>
        </div>
    </div>
<?php } ?>
<div class="contenedor__todo">
    <div class="caja__trasera">
        <div class="caja__trasera-login">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>Inicia sesión para entrar en la página</p>
            <button id="btn__iniciar-sesion">Iniciar Sesión</button>
        </div>
        <div class="caja__trasera-register">
            <h3>¿Aún no tienes una cuenta?</h3>
            <p>Contacta con un administrador para crear tu cuenta</p>
        </div>
    </div>

    <!--Formulario de Login -->
    <div class="contenedor__login-register">
        <!--Login-->
        <form action="?controlador=login&accion=inicio" class="formulario__login" method="POST">
            <h2>Iniciar Sesión</h2>
            <input type="text" name="username" placeholder="Usuario">
            <input type="password" name="password" placeholder="Contraseña">
            <button>Entrar</button>
        </form>

    </div>
</div>