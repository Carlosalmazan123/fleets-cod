<x-public-layout>
        <h1 class="text-2xl text-bold text-center mb-4">
            Titulos
        </h1>
        <div class="grid grid-cols-3 gap-4 rounded-lg border border-gray-300">
            @foreach ($destinies as $destiny)
            <a href="{{route('destinies.show', $destiny->id)}}">
                <div class="shadow-xl">
                
                    <h2 class="font-semibold-xl text-gray-800 text-center">origen: {{  $destiny->origin }}</h2>
                    <h2 class="nt-4">Destino:  {{ $destiny->destiny}}</h2>
                </div>
            </a>
            @endforeach
        </div>
    
    <div class="mt-8">
        {{  $destinies->links() }}
    </div>
</x-public-layout>