<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class='py-2 bg-blue-600'>
        <div class='max-w-3xl mx-auto text-center'>
            <nav class='space-x-4'>
                <a class='text-white hover:text-black font-semibold' href="{{route('tickets.index')}}">
                    Inicio
                </a>
                <a class='text-white hover:text-black font-semibold' href="{{route('fleets.index')}}">
                    Buses
                </a>
                <a class='text-white hover:text-black font-semibold' href="{{route('destinies.index')}}">
                    Destinos
                </a>
            </nav>
        </div>
    </div>
    <div class='text-2xl text-bold text-center mb-5'>
        <div class='max-w-5xl mx-auto '>
            {{$slot}}
        </div>
        
    </div>
</body>
</html>