<x-app-layout>
    <div class='max-w-lg mx-auto my-8'>
        <h1 class='text-center font-semibold text-2xl my-8'>
            Editar Usuario
        </h1>
        <form action="{{route('admin.users.update', $users->id)}}" method="post">
            @csrf
            @method('put')
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <input 
            name='name'
            type="text"
            value='{{@old('name',$users->name)}}' class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Nombre de Usuario">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <input
            name='email' 
            type="text" 
            value='{{@old('email', $users->email)}}'class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
            placeholder="Email">
            <x-input-error :messages="$errors->get('user type')" class="mt-2" />
                <select 
                name='user_type'
                value='{{@old('user_type',$users->user_type)}}'
                class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4">
                    <option selected>Seleccione el Tipo de Usuario</option>
                    <option>Almacen</option>
                    <option>Carretillero/a</option>
                    <option>Vendedor/a de Boletos</option>
                  </select>

                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <input
                    name='password' 
                    type="text" 
                    value='{{@old('password', $users->password)}}'class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 mb-4" 
                    placeholder="Contraseña">
            
          <div class='flex justify-center'>
                <button type='submit'class='bg-blue-500 text-white hover:text-gray-300  px-4 py-1 rounded-xl mt-8' >
                  Actualizar
                </button>
          </div>
          
        </form>
        
    </div>
</x-app-layout>
