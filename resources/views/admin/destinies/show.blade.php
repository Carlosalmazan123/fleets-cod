<x-app-layout>
    <div class='flex'>
        
            <div class='flex-1 w-full p-8'>
                <h1 class='text-center font-semibold text-2xl'>
                    Informacion del Destino N° {{$destiny->id}}
                </h1>
                <div class='flex justify-end'>
                  <a href="{{route('admin.destinies.index')}}">
                    <button class='bg-white text-black border rounded-xl border-black hover:text-white hover:bg-black border px-4 py-1  
                transition ease-out duration-500 '  >
                  Regresar
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
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Origen</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Destino</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Precio</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Action</th>
                              </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 ">
                                
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 -200">{{$destiny->id}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 -200">{{$destiny->origin}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 -200">{{$destiny->destiny}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 -200">{{$destiny->price}} Bs</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                      <a class="text-blue-500 hover:text-blue-700" href="#">Delete</a>
                                    </td>
                                  </tr>
                              
                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
</x-app-layout>