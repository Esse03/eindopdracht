<x-app-layout>
    @foreach($animals as $animal)

        <div>
            <a href="{{route('animals.show', [$animal])}}">{{$animal->name}}</a>
        </div>

    @endforeach

    <a href="{{route('animals.create')}}" >New Animal</a>
</x-app-layout>
