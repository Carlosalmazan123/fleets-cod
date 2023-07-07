<x-app-layout>
    <div class='max-w-lg mx-auto my-8'>
        <h1 class='text-center font-semibold text-2xl my-8'>
            Editar Bus
        </h1>
        <form action="{{route('admin.tickets.update', $tickets->id)}}" method="post">
            @csrf
            @method('put')
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <input 
            name='name'
            type="text"
            value='{{@old('name',$tickets->customer->name)}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Nombre">
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            <input
            name='last_name' 
            type="text" 
            value='{{@old('last_name', $tickets->customer->last_name)}}'class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Apellido">
            <x-input-error :messages="$errors->get('CI')" class="mt-2" />
            <input 
            name='CI'
            type="text"
            value='{{@old('CI', $tickets->customer->CI)}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="N° de C.I.">
            <x-input-error :messages="$errors->get('fleet')" class="mt-2" />
              <select 
              name='fleet_id'
              type='text'
              class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4">
                  <option selected>Seleccione el Bus</option> 
                  @foreach ($tickets->seats as $seat)
                  @foreach ($fleets as $fleet)
                  <option {{$seat->fleet_id===$fleet->id ? 'selected' : ' '}} value='{{$fleet->id}}'>{{$fleet->type}}</option>
                  @endforeach
                  
                  @endforeach
                  
                </select>
            <x-input-error :messages="$errors->get('seat')" class="mt-2" />
            <input 
            name='seat'
            type="text"
            value='{{@old('seat', $tickets->seats[0]->seat)}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Asiento N°">
            <x-input-error :messages="$errors->get('total')" class="mt-2" />
              <input 
              name='total'
              type="text"
              value='{{@old('total', $tickets->total)}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
              placeholder="Importe a Pagar">
              <x-input-error :messages="$errors->get('destiny')" class="mt-2" />
                <select 
                name='destiny_id'
                class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4">
                    <option selected>Seleccione el Destino</option> 
            
                    @foreach ($destinies as $destiny)
                    <option {{$tickets->destiny_id===$destiny->id ? 'selected': ''}} value='{{$destiny->id}}'>{{$destiny->destiny}}</option>
                    @endforeach
            
                    
                    
                  </select>

                <x-input-error :messages="$errors->get('schedule')" class="mt-2" />
                  <select 
                  name='schedule'
 
                  class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4">
                      <option selected>Seleccione la Hora de Salida</option>
                      <option {{$tickets->schedule==='09:00' ? 'selected' : null}} value='1'>09:00</option>
                      <option {{$tickets->schedule==='14:00' ? 'selected' : null}} value='2'>14:00</option>
                      <option {{$tickets->schedule==='17:00' ? 'selected' : null}} value='3'>17:00</option>
                    </select>
            
          <div class='flex justify-center'>
                <button type='submit'class='bg-blue-500 text-white hover:text-gray-300  px-4 py-1 rounded-xl mt-8' >
                  Actualizar
                </button>
          </div>
          
        </form>
        
    </div>
</x-app-layout>
