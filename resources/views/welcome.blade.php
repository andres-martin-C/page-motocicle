<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>

<body class="">
    <!-- header -->
    @include('nav')
    <!-- Menu -->
    <nav class="flex items-center justify-between mx-2 py-4" x-data="{ open: false }" @click.away="open = false">
        <!-- Logo -->
        <img src="{{ asset('img/logoDinamo.png')}}" alt="logo-dinamo" class="size-11 ">

        <!-- Botón de menú hamburguesa (solo en pantallas pequeñas) -->
        <button class="lg:hidden text-gray-700 hover:text-gray-900 focus:outline-none cursor-pointer bg-gray-300 rounded" x-on:click="open = ! open">
            <svg class="size-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Menú (oculto en pantallas grandes, visible en pantallas pequeñas) -->
        <div class="hidden lg:flex space-x-6">
            <a href="#" class="text-gray-700 hover:text-gray-900">Inicio</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">Servicios</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">Contacto</a>
        </div>

        <!-- Menú para pantallas pequeñas -->
        <div
            x-show="open"
            x-transition:enter="transition transform ease-out duration-300"
            x-transition:enter-start="transform -translate-y-full"
            x-transition:enter-end="transform translate-y-0"
            x-transition:leave="transition transform ease-in duration-300"
            x-transition:leave-start="transform translate-y-0"
            x-transition:leave-end="transform -translate-y-full"
            class="lg:hidden bg-gray-100 absolute top-0 right-0 w-full h-screen p-6">

            <!-- Botón "Salir" en la parte superior derecha -->
            <div class="absolute top-4 right-4">
                <button class="text-gray-700 hover:text-gray-900 cursor-pointer px-2" x-on:click="open = false">
                    <!-- Ícono de una X (tacha) -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Opciones de navegación -->
            <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Inicio</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Servicios</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Contacto</a>
        </div>
    </nav>

    <div></div>
    <!-- Carrousel -->
    <div></div>
    <!-- Cuerpo de la pagina -->
    <main>
        <div>

        </div>
    </main>
</body>

</html>