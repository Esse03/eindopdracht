<x-app-layout>
    <h1>{{$animal->name}}</h1>
    <h2>{{$animal->user->name}}</h2>
    <ul>
        <li>{{$animal->breed}}</li>
        <img class="w-20 h-20 object-cover rounded-lg" src="{{asset('storage/' . $animal->image)}}" alt="image of {{$animal->name}}">
    </ul>
    <p>{{$animal->description}}</p>
    @if(Auth::check() && Auth::user()->is_admin)
        <a href="{{route('animals.edit', [$animal])}}">Edit</a>
        <form method="post" action="{{route('animals.destroy', [$animal])}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete {{$animal->name}}</button>

        </form>
    @endif
    <h2>Comments</h2>
    <form method="POST" action="{{ route('comments.store', $animal) }}">
        @csrf
        <div>
            <label for="comment">Leave a comment!</label>
            <input type="text" name="comment" id="comment">
            <button type="submit">Post</button>
        </div>
    </form>
    @foreach($animal->comments as $comment)
        <div class="comment mb-4 p-4 bg-gray-100 rounded">
            <p><strong>{{ $comment->user->name }}</strong> says:</p>
            <p>{{ $comment->comment }}</p>
            <small class="text-gray-600">Posted on {{ $comment->created_at->format('F j, Y \a\t g:i A') }}</small>
        </div>
    @endforeach
</x-app-layout>
