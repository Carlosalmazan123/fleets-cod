<x-app-layout>
    <div class='flex'>
      <div class='w-64 bg-black rounded flex flex-row flex-wrap'>
          <div class='p-2 text-white hover:text-gray-300 text-center'>
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
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nombre de Usuario</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tipo de usuario</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Contraseña</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Action</th>
                            </tr>
                          </thead>
                          <tbody class="divide-y divide-gray-200 ">
  
                                <tr>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 -200">
                                    {{$users->id}}</td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 -200">
                                    {{$users->email}}</td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 -200">
                                    {{$users->user_types->type}}</td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 -200">
                                    {{$users->password}}</td>
                                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
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
      <div class="mt-8">
        {{  $users->links() }}
    </div>
  </x-app-layout>