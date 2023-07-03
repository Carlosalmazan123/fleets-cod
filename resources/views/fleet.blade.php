<x-public-layout>
        <h1 >
            Informacion del Bus N°: {{$fleet->id}}
        </h1>
    <div class='grid grid-cols-3 gap-1 rounded-lg  '>
        <div class='shadow-xl p-4 border border-blue-500 rounded-lg '>
            <img class='rounded-lg mb-3 bg-contain center' src='{{$fleet->images[0]->image}}'>
            <h2 class='mt-2'>Modelos del Bus: {{$fleet->type}}</h2>
            <h2 class='mt-2'>Baño: {{$fleet->bathroom}}</h2>
            <h2 class='mt-2 '>Chofer: {{$fleet->sheet_day->name}}</h2>
            <h2 class='mt-2 '>Ayudante del Chofer: {{$fleet->sheet_day->assistant}}</h2>
        </div>
    </div>
</x-public-layout>
  
