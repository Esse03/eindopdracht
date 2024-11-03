<x-app-layout>
    <h1>{{$animal->name}}</h1>
    <h2>{{$animal->user->name}}</h2>
    <ul>
        <li>{{$animal->breed}}</li>
        <img class="w-20 h-20 object-cover rounded-lg" src="{{asset('storage/' . $animal->image)}}" alt="image of {{$animal->name}}">
    </ul>
    <p>{{$animal->description}}</p>
</x-app-layout>
