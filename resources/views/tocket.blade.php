<x-public-layout>
        <h1 >
            Informacion del boleto N°: {{$ticket->id}}
        </h1>
    </div>
    <div class='grid grid-cols-3 gap-1 rounded-lg  text-center'>
        <div class='shadow-xl p-4 border border-blue-500 rounded-lg content-center'>
            
            @foreach ($ticket->seats as $seat)
                
                <h2 class="font-semibold-xl text-gray-800 ">Nombre: {{$seat->customer->name}}
                    </h2>
                    <h2 class='mt-2'>Apellido: {{$seat->customer->last_name}}</h2>
                    <h2 class='mt-2 '>N° CI: {{$seat->customer->CI}}</h2>
                    <h2 class='mt-2 '>Destino: {{$ticket->destiny->destiny}}</h2>
                    <h2 class='mt-2'>N° de asiento elegido: {{$seat->seat}}</h2>
                    <h2 class='mt-2 '>
                        Total a pagar: {{$ticket->total}}
                    </h2>
                    <h2 class='mt-2 '>Fecha y hora de la venta: {{$ticket->created_at}}</h2>
                    
            @endforeach
            
        </div>
    </x-public-layout>