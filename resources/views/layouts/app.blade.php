<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <nav class="bg-gray-800 py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-2xl font-bold">MiMarca</a>
            <div>
                <a href="#" class="text-white hover:text-gray-300 px-4">Inicio</a>
                <a href="#" class="text-white hover:text-gray-300 px-4">Sobre Nosotros</a>
                <a href="#" class="text-white hover:text-gray-300 px-4">Servicios</a>
                <a href="#" class="text-white hover:text-gray-300 px-4">Contacto</a>
            </div>
        </div>
    </nav>
    @vite('resources/css/app.css')
<body>
    @yield('content')
</body>

</html>
