<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="bg-gray-800 rounded-lg p-8 shadow-xl mb-6">
            <h1 class="text-4xl font-bold text-gray-200">{{ $animal->name }}</h1>
            <h2 class="text-xl text-gray-400">Owned by: {{ $animal->user->name }}</h2>
            <ul class="mt-4">
                <li class="text-lg text-gray-300">Breed: {{ $animal->breed }}</li>
                <img class="w-40 h-40 object-cover rounded-lg mt-4" src="{{ asset('storage/' . $animal->image) }}" alt="Image of {{ $animal->name }}">
            </ul>
            <p class="mt-4 text-gray-300">{{ $animal->description }}</p>
            @if(Auth::check() && Auth::user()->is_admin)
                <div class="mt-6">
                    <a href="{{ route('animals.edit', [$animal]) }}" class="text-blue-500 hover:text-blue-400">Edit</a>
                    <form method="post" action="{{ route('animals.destroy', [$animal]) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-400 ml-4">Delete {{ $animal->name }}</button>
                    </form>
                </div>
            @endif
        </div>

        <div class="bg-gray-800 rounded-lg p-8 shadow-xl">
            <h2 class="text-2xl font-semibold text-gray-200 mb-4">Comments</h2>
            <form method="POST" action="{{ route('comments.store', $animal) }}" class="mb-6">
                @csrf
                <div>
                    <label for="comment" class="block text-gray-300 mb-2">Leave a comment!</label>
                    <input type="text" name="comment" id="comment" class="rounded-md shadow-sm border-gray-700 bg-gray-600 text-white placeholder-gray-400 focus:border-gray-500 focus:ring focus:ring-gray-500 focus:ring-opacity-50 w-full py-2 px-3" required>
                </div>
                <button type="submit" class="mt-4 bg-gray-700 text-white rounded-md px-4 py-2 hover:bg-gray-600 transition transform hover:scale-105">Post</button>
            </form>

            @foreach($animal->comments as $comment)
                <div class="bg-gray-700 p-4 rounded-lg mb-4 shadow-md">
                    <p class="text-gray-300"><strong>{{ $comment->user->name }}</strong> says:</p>
                    <p class="text-gray-200">{{ $comment->comment }}</p>
                    <small class="text-gray-500">Posted on {{ $comment->created_at->format('F j, Y \a\t g:i A') }}</small>
                </div>
            @endforeach

            @if($animal->comments->isEmpty())
                <p class="text-gray-400">No comments yet. Be the first to leave a comment!</p>
            @endif
        </div>
    </div>
</x-app-layout>

