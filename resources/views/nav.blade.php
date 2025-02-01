<div>
    <nav class="bg-[#2C2E30] text-white flex justify-between px-3 py-4">
        <div class="">

            <a class="lining-nums flex gap-x-2" href="tel:+8007346266">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                </svg>
                8007346266
            </a>
        </div>
        <div>
            <p class="flex gap-x-2"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>LUN - SAB: <time datetime="09:00">9:00 AM</time> - <time datetime="08:00">8:00 AM</time></p>
        </div>
    </nav>
     <!-- Menu -->
     <nav class="flex items-center justify-between mx-4" x-data="{ open: false }" @click.away="open = false">
        <!-- Logo -->
        <img src="{{ asset('img/logoDinamo.png')}}" alt="logo-dinamo" class="size-16 ">

        <!-- Botón de menú hamburguesa (solo en pantallas pequeñas) -->
        <button class="lg:hidden text-gray-700 hover:text-gray-900 focus:outline-none cursor-pointer bg-gray-300 rounded" x-on:click="open = ! open">
            <svg class="size-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
            class="lg:hidden bg-gray-100 absolute top-0 right-0 w-full h-screen p-6 z-30">

            <!-- Botón "Salir" en la parte superior derecha -->
            <div class="absolute top-4 right-4">
                <button class="text-gray-700 hover:text-gray-900 cursor-pointer px-2" x-on:click="open = false">
                    <!-- Ícono de una X (tacha) -->
                    <svg class="size-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
</div>