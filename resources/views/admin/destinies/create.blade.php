<x-app-layout>
    <div class='max-w-lg mx-auto my-8'>
        <h1 class='text-center font-semibold text-2xl my-8'>
            Crear Nuevo Destino
        </h1>
        <form action="{{route('admin.destinies.store')}}" method="post">
            @csrf
            <x-input-error :messages="$errors->get('origin')" class="mt-2" />
            <input 
            name='origin'
            type="text"
            value='{{@old('origin')}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Origen">
            <x-input-error :messages="$errors->get('destiny')" class="mt-2" />
            <input
            name='destiny' 
            type="text" 
            value='{{@old('destiny')}}'class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Destino">
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
            <input 
            name='price'
            type="text"
            value='{{@old('price')}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Precio">
            
          <div class='flex justify-center'>
            <button  type='submit' class='bg-white text-black border rounded-xl border-black hover:text-white hover:bg-black border px-4 py-1  
            transition ease-out duration-500 '  >
              crear
            </button>
          </div>
          
        </form>
        
    </div>
</x-app-layout>
