<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>

<body class="bg-white">
    <!-- header -->
    @include('nav')
    <!-- Carrousel -->

    <!-- Cuerpo de la pagina -->
    <main>
        <!-- Sección de que es esa empresa -->
        <section>
            <div class="flex justify-center gap-x-1 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                    <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                </svg>

                <h3 class="font-bold text-2xl text-center">¿Quiénes somos?</h3>
            </div>
            <!-- Texto del contenido -->
            <p class="p-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil,
                quas adipisci molestias nesciunt eligendi cumque iusto accusantium omnis
                qui minima iure obcaecati officia est ipsam reprehenderit laborum consequuntur aspernatur odio.
            </p>
        </section>
        <!-- Sección de categorías de motos -->
        <section class="p-3 bg-[#F5F5F5] relative">
            <h3 class="font-black text-5xl text-center pb-4"> Garage </h3>
            <!-- Contenedor de las categorías. -->
            <div class="grid-rows-1">
                 <!--  ! Resolver pug -->
                <!-- Se necesita poner group -->
                <div class="group bg-cover bg-center h-64 relative flex items-center justify-center shadow-lg filter brightness-50" style="background-image: url('https://images.unsplash.com/photo-1735252723552-138dc3fb6f14?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                    <span class="font-bold text-white bottom-2 text-center text-4xl ">Trabajo</span>
                    <button class="absolute group-hover:block hidden bottom-4 left-1/2 transform -translate-x-1/2 bg-white text-black px-4 py-2 rounded-lg opacity-75 hover:opacity-100 transition">Saber más</button>
                </div>

            </div>
        </section>
    </main>
</body>

</html>