<x-app-layout>
    <div class='flex'>
        <div class='w-64 bg-blue-600 rounded flex flex-row flex-wrap flex-justify'>
            <div class='p-2 text-white hover:text-gray-300 text-center'>
                <a class='font-semibold text-3xl p-9' href='{{route('admin.tickets.index')}}'>Boletos</a>
            </div>
            <div class='p-2 text-white hover:text-gray-300 text-center'>
                <a class='font-semibold text-3xl p-9' href='{{route('admin.fleets.index')}}'>Buses</a>
            </div>
            <div class='p-2 text-white hover:text-gray-300 text-center'>
                <a class='font-semibold text-3xl p-9' href='{{route('admin.destinies.index')}}'>Destinos</a>
            </div>
            
        </div>
            <div class='flex-1 w-full p-8'>
                <h1 class='text-center font-semibold text-2xl'>
                    Buses Registrados
                </h1>
                <div class='flex justify-end'>
                  <a href="{{route('admin.fleets.create')}}">
                    <button class='bg-blue-500 text-white hover:text-gray-300  px-4 py-1 rounded-xl' >
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
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Modelo del Bus</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Baño</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Chofer</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Ayudante del Chofer</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Action</th>
                              </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 ">
    
                              @foreach ($fleets as $fleet)
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 -200">
                                      <a href="{{ route('admin.fleets.show',$fleet->id)}}">{{$fleet->id}}</a></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 -200">
                                      <a href="{{ route('admin.fleets.show',$fleet->id)}}">{{$fleet->type}}</a></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 -200">
                                      <a href="{{ route('admin.fleets.show',$fleet->id)}}">{{$fleet->bathroom}}</a></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 -200">
                                      <a href="{{ route('admin.fleets.show',$fleet->id)}}">{{$fleet->sheet_day->name}}</a></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 -200">
                                      <a href="{{ route('admin.fleets.show',$fleet->id)}}">{{$fleet->sheet_day->assistant}}</a></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                      <a class="text-blue-500 hover:text-blue-700" href="#">Delete</a>
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
          {{  $fleets->links() }}
      </div>
</x-app-layout>