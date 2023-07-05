<x-app-layout>
<div class='max-w-lg mx-auto my-8'>
    <h1 class='text-center font-semibold text-2xl my-8'>
        Crear Nuevo Boleto
    </h1>
    <form action="{{route('admin.tickets.store')}}" method="post">
        @csrf
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
        <input 
        name='name'
        type="text"
        value='{{@old('name')}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
        placeholder="Nombre">
        <x-input-error :messages="$errors->get('last name')" class="mt-2" />
        <input
        name='last_name' 
        type="text"
        value='{{@old('last_name')}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
        placeholder="Apellido">
        <x-input-error :messages="$errors->get('CI')" class="mt-2" />
        <input 
        name='CI'
        type="text"
        value='{{@old('CI')}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
        placeholder="N° de CI">
        <x-input-error :messages="$errors->get('seat')" class="mt-2" />
        <input 
        name='seat'
        type="text"
        value='{{@old('seat')}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
        placeholder="Asiento N°">
        <x-input-error :messages="$errors->get('total')" class="mt-2" />
        <input 
        name='total'
        type="text"
        value='{{@old('total')}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
        placeholder="Importe a pagar">
        <x-input-error :messages="$errors->get('destiny')" class="mt-2" />
        <select 
        name='destiny_id'
        value='{{@old('destiny')}}'
        class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4">
            <option selected>Seleccione el Destino</option>
            <option>Tarija</option>
            <option>Potosí</option>
            <option>La Paz</option>
          </select>
          <x-input-error :messages="$errors->get('schedule')" class="mt-2" />
    <select 
    name='schedule'
    value='{{@old('schedule')}}'
    class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4">
        <option selected>Seleccione la Hora de Salida</option>
        <option>09:00</option>
        <option>14:00</option>
        <option>17:00</option>
      </select>
      <div class='flex justify-center'>
            <button type='submit'class='bg-blue-500 text-white hover:text-gray-300  px-4 py-1 rounded-xl mt-8' >
              crear
            </button>
      </div>
      
    </form>
    
</div>
   
</x-app-layout>