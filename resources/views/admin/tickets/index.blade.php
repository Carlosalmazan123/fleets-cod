<x-app-layout>
  <div class='flex'>
    <div class='w-64 bg-black rounded flex flex-row flex-wrap'>
        <div class='p-2 text-white hover:text-gray-300 text-center flex'>
            <a class='font-semibold text-3xl p-9 hover:ease-out duration-500 hover:text-4xl ' href='{{route('admin.tickets.index')}}'>Boletos</a>
        </div>
        <div class='p-2 text-white hover:text-gray-300 text-center flex'>
            <a class='font-semibold text-3xl p-9 hover:ease-out duration-500 hover:text-4xl' href='{{route('admin.fleets.index')}}'>Buses</a>
        </div>
        <div class='p-2 text-white hover:text-gray-300 text-center flex'>
          <a class='font-semibold text-3xl p-9 hover:ease-out duration-500 hover:text-4xl' href='{{route('admin.destinies.index')}}'>Destinos</a>
      </div>
      <div class='p-2 text-white hover:text-gray-300 text-center flex'>
        <a class='font-semibold text-3xl p-9 hover:ease-out duration-500 hover:text-4xl' href='{{route('admin.users.index')}}'>Usuarios</a>
    </div>
        
    </div>
        <div class='flex-1 w-full p-8'>
            <h1 class='text-center font-semibold text-2xl'>
                Boletos Registrados
            </h1>
            <div class='flex justify-end'>
              <a href="{{route('admin.tickets.create')}}">
                <button class='bg-white text-black border rounded-xl border-black hover:text-white hover:bg-black border px-4 py-1  
                transition ease-out duration-500 '  >
                  crear
                </button></a>
              
            </div>
            <div class="flex flex-col rounded">
                <div class="-m-1.5 overflow-x-auto rounded">
                  <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                      <table class="min-w-full divide-y divide-gray-200 ">
                        <thead>
                          <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">N°</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nombre</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Apellido</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">N° CI</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Asiento N°</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Importe a pagar</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Destino</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Hora de salida</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Action</th>
                          </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 ">

                          @foreach ($tickets as $ticket)
                              <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 -200">
                                  <a href="{{ route('admin.tickets.show',$ticket->id)}}">{{$ticket->id}}</a></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 -200">
                                  <a href="{{ route('admin.tickets.show',$ticket->id)}}">{{$ticket->customer->name}}</a></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 -200">
                                  <a href="{{ route('admin.tickets.show',$ticket->id)}}">{{$ticket->customer->last_name}}</a></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 -200">
                                  <a href="{{ route('admin.tickets.show',$ticket->id)}}">{{$ticket->customer->CI}}</a></td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 -200">
                                  @isset($ticket->seats[0])
                                  <a href="{{ route('admin.tickets.show',$ticket->id)}}">{{$ticket->seats[0]->seat}}</a>
                                    @else
                                     <h2 class='text-red-600'>El asiento no está disponible</h2>
                                    @endisset
                                
                                  </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 -200">
                                  <a href="{{ route('admin.tickets.show',$ticket->id)}}">{{$ticket->total}} Bs</a></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 -200">
                                  
                                    @isset($ticket->destiny->destiny)
                                    <a href="{{ route('admin.tickets.show',$ticket->id)}}">{{$ticket->destiny->destiny}}
                                    </a>
                                    @else
                                     <h2 class='text-red-600'>El destino fue borrado</h2>
                                    @endisset
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 -200">
                                  <a href="{{ route('admin.tickets.show',$ticket->id)}}">{{$ticket->schedule}}</a></td>
                                  <td class="px-6 py-4 whitespace-nowrap text-rigth text-sm font-medium flex">
                                    <a class="text-gray-500 hover:text-black p-3" href="{{route('admin.tickets.edit', $ticket->id)}}">Editar</a>
                                    <form action="{{route('admin.tickets.destroy',$ticket->id)}}" method="post">
                                      @method('delete')
                                      @csrf
                                      <button class="text-gray-500 hover:text-black p-3" type='submit'>
                                        Eliminar
                                      </button>
                                    </form>
                                  </td>
                              </tr>
                          @endforeach
                          
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <div class="mt-8">
      {{  $tickets->links() }}
  </div>
</x-app-layout>