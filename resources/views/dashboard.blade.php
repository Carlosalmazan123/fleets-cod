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
</x-app-layout>
