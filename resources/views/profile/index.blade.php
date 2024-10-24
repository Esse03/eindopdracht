<x-app-layout>
    <h1>{{old('name', $user->name)}}</h1>
    <ul>
        <li>{{old('email', $user->email)}}</li>
    </ul>
    <a href="{{route('profile.edit')}}">Edit profile</a>

    <h2>Created Animals</h2>
    @foreach($animals as $animal)

        <div>
            <span>{{$animal->name}}</span>
            <a href="{{route('animals.edit', [$animal])}}">Edit</a>
        </div>

    @endforeach
</x-app-layout>
