<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class='bg-gray-100'>
    <div class='flex-1 w-full p-9'>
        <div class='text-3xl text-center p-9'>
            <h2 class='text-6xl'>BIENVENIDO</h2><br>

            <h2>POR FAVOR, INICIE SESIÓN</h2>
        </div>
        <div class='flex justify-center p-5'>
            <a href="{{ route('login') }}">
            <button class='bg-white text-black text-3xl border rounded-xl border-black hover:text-white hover:bg-black border p-8 py-1  
            transition ease-out duration-500'>
                Iniciar
            </button>
            </a>
            
        </div>
    </div>
</body>
</html>