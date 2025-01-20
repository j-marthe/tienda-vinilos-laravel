<x-app-layout>
    <div class="max-w-7xl mx-auto py-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">🎵 Listado de Discos de Vinilo 🎵</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($records as $record)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $record->cover_image) }}" alt="{{ $record->title }}" class="w-22 h-22 object-cover rounded-lg shadow-md mb-4  mx-auto">
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-gray-900">
                            <a href="{{ route('record.show', $record->id) }}" class="hover:text-blue-500">{{ $record->title }}</a>
                        </h2>
                        <p class="text-gray-600">🎤 <strong>Artista:</strong> {{ $record->artist }}</p>
                        <p class="text-red-500 font-bold text-lg">💰 {{ $record->price }}€</p>
                        <a href="{{ route('record.show', $record->id) }}" class="block mt-3 bg-blue-500 text-white text-center py-2 rounded-lg hover:bg-blue-600 transition">
                            Ver Detalles
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
