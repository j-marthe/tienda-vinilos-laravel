<x-app-layout>
    <div class="max-w-2xl mx-auto py-10 px-5 bg-white shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold text-center text-indigo-600 mb-4">{{ $record->title }}</h1>
        <img src="{{ asset('storage/' . $record->cover_image) }}" class="w-24 h-24 object-cover rounded-lg shadow-md mb-4  mx-auto" alt="{{ $record->title }}">
        <p class="text-lg"><strong>🎤 Artista:</strong> {{ $record->artist }}</p>
        <p class="text-lg"><strong>📅 Año de Lanzamiento:</strong> {{ $record->release_year }}</p>
        <p class="text-lg"><strong>📀 Estado:</strong> <span class="text-green-500">{{ ucfirst($record->status) }}</span></p>
        <p class="text-lg"><strong>💰 Precio:</strong> <span class="text-red-600 font-bold">{{ $record->price }}€</span></p>
        <p class="text-lg"><strong>🎶 Géneros:</strong> 
            @if($record->genres->isNotEmpty())
                @foreach ($record->genres as $genre)
                    <span class="text-black-600 font-bold">{{ $genre->name }}</span>
                @endforeach
            @else
                <span class="text-gray-500">Sin género asignado</span>
            @endif
        </p>
        <div class="text-center mt-5">
            <a href="{{ route('home') }}" class="px-2 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">⬅ Volver</a>
        </div>
    </div>
</x-app-layout>
