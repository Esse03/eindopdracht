<x-app-layout>
    <h1>{{$animal->name}}</h1>
    <h2>{{$animal->creator_id}}</h2>
    <ul>
        <li>{{$animal->breed}}</li>
    </ul>
    <p>{{$animal->description}}</p>
</x-app-layout>
