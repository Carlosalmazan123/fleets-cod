<x-app-layout>
    <div class='max-w-lg mx-auto my-8'>
        <h1 class='text-center font-semibold text-2xl my-8'>
            Crear Nuevo Bus
        </h1>
        <form action="{{route('admin.fleets.store')}}" method="post">
            @csrf
    
            <input 
            name='type'
            type="text" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Modelo del Bus">
            <input
            name='bathroom' 
            type="text" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Baño">
            <input 
            name='name'
            type="text" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Nombre del Chofer">
            <input 
            name='assistant'
            type="text" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Nombre del Asistente">
            
          <div class='flex justify-center'>
                <button type='submit'class='bg-blue-500 text-white hover:text-gray-300  px-4 py-1 rounded-xl mt-8' >
                  crear
                </button>
          </div>
          
        </form>
        
    </div>
</x-app-layout>