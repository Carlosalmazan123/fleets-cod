<x-app-layout>
    <div class='max-w-lg mx-auto my-8'>
        <h1 class='text-center font-semibold text-2xl my-8'>
            Editar Bus
        </h1>
        <form action="{{route('admin.fleets.update', $fleets->id)}}" method="post">
            @csrf
            @method('put')
            <x-input-error :messages="$errors->get('type')" class="mt-2" />
            <input 
            name='type'
            type="text"
            value='{{@old('type',$fleets->type)}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Modelo del Bus">
            <x-input-error :messages="$errors->get('bathroom')" class="mt-2" />
            <input
            name='bathroom' 
            type="text" 
            value='{{@old('bathroom', $fleets->bathroom)}}'class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Baño">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <input 
            name='name'
            type="text"
            value='{{@old('name', $fleets->sheet_day->name)}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Nombre del Chofer">
            <x-input-error :messages="$errors->get('assistant')" class="mt-2" />
            <input 
            name='assistant'
            type="text"
            value='{{@old('assistant', $fleets->sheet_day->assistant)}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Nombre del Chofer">
            
          <div class='flex justify-center'>
                <button type='submit'class='bg-blue-500 text-white hover:text-gray-300  px-4 py-1 rounded-xl mt-8' >
                  Actualizar
                </button>
          </div>
          
        </form>
        
    </div>
</x-app-layout>
