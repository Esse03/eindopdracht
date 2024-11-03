<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <form method="GET" action="{{ route('animals.index') }}" class="mb-6 bg-gray-800 rounded-lg p-6 shadow-lg">
            <label for="query" class="block text-gray-300 mb-2">Search for animal</label>
            <input type="text" name="query" id="query" class="rounded-md shadow-sm border-gray-700 bg-gray-700 text-black placeholder-gray-400 focus:border-gray-500 focus:ring focus:ring-gray-500 focus:ring-opacity-50 w-full py-2 px-3">
            <button type="submit" class="mt-2 bg-gray-600 text-white rounded-md px-4 py-2 hover:bg-gray-500 transition transform hover:scale-105">Search</button>
        </form>

        @if($animals->isNotEmpty())
            <div class="space-y-4">
                @foreach($animals as $animal)
                    <div class="flex items-center bg-gray-800 rounded-lg p-4 shadow-md transition-transform transform hover:scale-105">
                        <img src="{{ asset('storage/' . $animal->image) }}" alt="image of {{ $animal->name }}" class="h-16 w-16 rounded-md mr-4">
                        <a href="{{ route('animals.show', [$animal]) }}" class="text-xl text-gray-200 hover:text-gray-100 transition duration-200">{{ $animal->name }}</a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-300 text-lg italic text-center">No animals yet! Make a new one!</p>
        @endif

        <div class="mt-6">
            <a href="{{ route('animals.create') }}" class="bg-gray-600 text-white rounded-md px-4 py-2 hover:bg-gray-500 transition">New Animal</a>
        </div>
    </div>
</x-app-layout>



