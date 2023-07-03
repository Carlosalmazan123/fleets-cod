<x-public-layout>
        <h1 class='text-3xl text-bold text-center mb-5'>Buses</h1>
    
 <div class='grid grid-cols-3 gap-4 rounded-lg'>
    @foreach ($fleets as $fleet)
    <a href="{{ route('fleets.show', $fleet->id) }}">
        <div class='shadow-xl p-4 border border-blue-700 rounded-lg'>
            <img  class='rounded-lg mb-3 mx-auto'src="{{$fleet->images[0]->image}}" alt=""> 
            

                <h2 class='font-semibold-xl text-gray-800 mx-auto'>
                    Modelo del Bus: {{$fleet->type}}
                </h2>
                <h2 class='font-semibold-xl text-gray-800 mx-left'>
                    Baño: {{$fleet->bathroom}}
                </h2>
    
                <h2 class='font-semibold-xl text-gray-800 mx-left'>
                    Chofer:{{$fleet->sheet_day->name}}
                </h2>
                <h2 class='font-semibold-xl text-gray-800 mx-left'>
                    Ayudante del Chofer:{{$fleet->sheet_day->assistant}}
                </h2>
        </div>
    </a>
    @endforeach
 </div>
    
<div class="mt-8">
    {{  $fleets->links() }}
</div>
</x-public-layout>