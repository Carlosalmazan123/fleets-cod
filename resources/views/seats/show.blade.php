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
<div>
    <h1 class='text-2xl font-bold text-center mb-4'>
        {{$seat->seat}}
    </h1>
    <div class="grid grid-cols-3 gap-4 rounded-lg content-center ">
    @foreach ($tickets as $ticket)
            <a href="{{ route('tickets.show', $ticket->id) }}">
                <div class="shadow-xl p-4 border border-blue-700 rounded-lg justify-content-center">
                
                    
                    @foreach ($ticket->seats as $seat)
                    <h2 class="font-semibold-xl text-gray-800 ">Nombre: {{  $seat->customer->name }}</h2>
                    <h2 class="mt-2">Apellido:  {{ $seat->customer->last_name}}</h2>
                    <h2 class="mt-2">N° de CI:  {{ $seat->customer->CI }}</h2>
                    <h2 class="mt-2">Destino:  {{ $ticket->destiny->destiny}}</h2>
                        <h2>N° de asiento elegido: {{$seat->seat}}</h2>
                        <h2 class='mt-2 '>
                            Total a pagar: {{$ticket->total}}
                        </h2>
                        <h2 class="mt-2">Fecha y Hora de venta:  {{ $ticket->created_at}}</h2>
                    @endforeach
                    
                    
                </div>
                

            </a>
            @endforeach
    </div>
</div>
<div class="mt-8">
    {{  $tickets->links() }}
</div>
</body>
</html>