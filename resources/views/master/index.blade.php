<!DOCTYPE html>
<html lang="es">

    <head>
    <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>@yield('title')Inicio</title>
       <link rel="stylesheet" href="css/Catalyst.css">
    </head>

    <body class="fondo-negro margen-in">

        <nav class="margen-in-1 derecha navegacion">
            <a class="linea-inf-no texto-tamaño-2 color-texto-blanco" href="#">Inicio</a>
            <a class="linea-inf-no texto-tamaño-2 color-texto-blanco margen-ex" href="botones">Bottones</a>
            <a class="linea-inf-no texto-tamaño-2 color-texto-blanco margen-ex" href="#">Pressets</a>
            <a class="linea-inf-no texto-tamaño-2 color-texto-blanco margen-ex" href="#">Formularios</a>
            <a class="linea-inf-no texto-tamaño-2 color-texto-blanco margen-ex" href="#">Listas</a>
            <a class="linea-inf-no texto-tamaño-2 color-texto-blanco margen-ex" href="#">Tablas</a>
            <a class="linea-inf-no texto-tamaño-2 color-texto-blanco margen-ex" href="#">iconos</a>
        </nav>

        <div class="margen-ex-arriba-2 margen-in">
        @yield('content')
        </div>

    </body>

    @yield('scripts')
    <!-- <script src="js/scrypt.js"></script> -->   

</html>

















<!-- <table class="fondo-blanco margen-ex-1  tamaño-5 ">
        <thead class="fondo-negro color-texto-blanco">
            <tr>
                <th class="margen-in">Nombre</th>
                <th class="margen-in">Apellido</th>
                <th class="margen-in">Edad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>25</td>
            </tr>
            <tr>
                <td>Jane</td>
                <td>Doe</td>
                <td>30</td>
            </tr>
            <tr>
                <td>Bob</td>
                <td>Smith</td>
                <td>40</td>
            </tr>
            <tr>
                <td>Bob</td>
                <td>Smith</td>
                <td>40</td>
            </tr>
            <tr>
                <td>Bob</td>
                <td>Smith</td>
                <td>40</td>
            </tr>
            <tr>
                <td>Bob</td>
                <td>Smith</td>
                <td>40</td>
            </tr>
            <tr>
                <td>Bob</td>
                <td>Smith</td>
                <td>40</td>
            </tr>
            <tr>
                <td>Bob</td>
                <td>Smith</td>
                <td>40</td>
            </tr>
        </tbody>
    </table> -->
<!-- <div class="fondo-negro margen-in-3 margen-ex-arriba borde-azul-4 borde-redondiado-5 sombras-2">
        <button class="boton-negro">
            boton-negro
        </button>
        <button class="boton-gris">
            boton-gris
        </button>
        <button class="boton-gris-claro">
            boton-gris-claro
        </button>
        <button class="boton-azul">
            boton-azul
        </button>
        <button class="boton-azul-claro">
            boton-azul-claro
        </button>
        <button class="boton-verde">
            boton-verde
        </button>
        <button class="boton-azul-obscuro">
            boton-obscuro
        </button>
        <button class="boton-amarillo">
            boton-amarillo
        </button>
        <button class="boton-rojo">
            boton-rojo
        </button>
        <button class="boton-rojo-obscuro">
            boton-rojo-obscuro
        </button>
        <button class="boton-rosado">
            boton-rosado
        </button>
        <button class="boton-morado">
            boton-morado
        </button>
        <button class="boton-verde-1">
            boton-verde-1
        </button>
        <button class="boton-rojo-1">
            boton-rojo-1
        </button>
        <button class="boton-amarillo-1">
            boton-amarillo-1
        </button>
        <button class="boton-negro" id="AbrirModal">
            modal-1
        </button>
    </div> -->

<!-- <input class="input margen-ex-arriba-1 borde-redondiado-4 borde-azul-4 texto-tamaño-2 tamaño-todo fondo-negro sombras-2" type="text">

    <div id="Modal" class="modal-1">

        <div class="modal-content tamaño-4">

            <span class="close margen-ex-arriba margen-ex-derecha sombras-3 fondo-rojo color-texto-gris-claro borde-redondiado-1">&times;</span>
            <h2 class="margen-in-arriba-1">Ventana Modal</h2>
            <div class="contenedor-modal margen-in-1 fondo-gris-claro color-texto borde-gris-1">

                <input class="input borde-redondiado-1 borde-gris-1 texto-tamaño-1 tamaño-9" type="text">
                <input class="input margen-ex-arriba-1 borde-redondiado-1 borde-gris-1 texto-tamaño-1 tamaño-9" type="text">
                <input class="input margen-ex-arriba-1 borde-redondiado-1 borde-gris-1 texto-tamaño-1 tamaño-9" type="text">
                <input class="input margen-ex-arriba-1 borde-redondiado-1 borde-gris-1 texto-tamaño-1 tamaño-9" type="text">

            </div>

            <button class="boton-verde margen-ex">
                Guardar
            </button>

        </div>

    </div>



    <div id="Modal" class="modal">

        <div class="modal-content tamaño-4 borde-azul-4 fondo-azul-obscuro borde-redondiado-2 margen-in-1">

            <span class="close sombras-3 fondo-rojo color-texto-gris-claro borde-redondiado-1">&times;</span>
            <h2>Ventana Modal</h2>
            <div class="contenedor-modal margen-in-1 fondo-gris-claro borde-redondiado-2 color-texto-blanco borde-gris-1">
            <input class="input borde-redondiado-1 borde-gris-1 texto-tamaño-1 tamaño-9" type="text">
                <input class="input margen-ex-arriba-1 borde-redondiado-1 borde-gris-1 texto-tamaño-1 tamaño-9" type="text">
                <input class="input margen-ex-arriba-1 borde-redondiado-1 borde-gris-1 texto-tamaño-1 tamaño-9" type="text">
                <input class="input margen-ex-arriba-1 borde-redondiado-1 borde-gris-1 texto-tamaño-1 tamaño-9" type="text">

            </div>

            <button class="boton-verde margen-ex-arriba-1">
                Guardar
            </button>

        </div>

    </div> -->