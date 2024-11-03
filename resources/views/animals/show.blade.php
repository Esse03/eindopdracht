<x-app-layout>
    <h1>{{$animal->name}}</h1>
    <h2>{{$animal->user_id->name}}</h2>
    <ul>
        <li>{{$animal->breed}}</li>
    </ul>
    <p>{{$animal->description}}</p>
</x-app-layout>
