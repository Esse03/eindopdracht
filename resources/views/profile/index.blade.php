<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="bg-gray-800 rounded-lg p-8 shadow-xl mb-6">
            <h1 class="text-3xl font-bold text-gray-200">{{ old('name', $user->name) }}</h1>
            <ul class="mt-4">
                <li class="text-lg text-gray-300">{{ old('email', $user->email) }}</li>
            </ul>
            <a href="{{ route('profile.edit') }}" class="text-blue-500 hover:text-blue-400 mt-4 inline-block">Edit profile</a>
        </div>

        <h2 class="text-2xl font-semibold text-gray-200 mb-4">Created Animals</h2>
        @if($animals->isNotEmpty())
            <div class="bg-gray-800 rounded-lg p-8 shadow-xl">
                @foreach($animals as $animal)
                    <div class="flex justify-between items-center mb-4 p-4 bg-gray-700 rounded-lg shadow-md">
                        <span class="text-gray-300 text-lg">{{ $animal->name }}</span>
                        <a href="{{ route('animals.edit', [$animal]) }}" class="text-blue-500 hover:text-blue-400">Edit</a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-400">You have not created any animals yet.</p>
        @endif
    </div>
</x-app-layout>

