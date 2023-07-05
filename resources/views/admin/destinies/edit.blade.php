<x-app-layout>
    <div class='max-w-lg mx-auto my-8'>
        <h1 class='text-center font-semibold text-2xl my-8'>
            Editar Destino
        </h1>
        <form action="{{route('admin.destinies.update', $destinies->id)}}" method="post">
            @csrf
            @method('put')
            <x-input-error :messages="$errors->get('origin')" class="mt-2" />
            <input 
            name='origin'
            type="text"
            value='{{@old('origin',$destinies->origin)}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Origen">
            <x-input-error :messages="$errors->get('destiny')" class="mt-2" />
            <input
            name='destiny' 
            type="text" 
            value='{{@old('destiny', $destinies->destiny)}}'class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Destino">
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
            <input 
            name='price'
            type="text"
            value='{{@old('price', $destinies->price)}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Precio">
            
          <div class='flex justify-center'>
                <button type='submit'class='bg-blue-500 text-white hover:text-gray-300  px-4 py-1 rounded-xl mt-8' >
                  Actualizar
                </button>
          </div>
          
        </form>
        
    </div>
</x-app-layout>
