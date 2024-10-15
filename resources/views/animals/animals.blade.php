<x-layout>
    <table>
        <th>Name</th>
    @foreach($animals as $animal)
            <tr>
                <a href="{{route('animals.show', $animal)}}">{{$animal->name}}</a>
            </tr>
        </table>
    @endforeach
</x-layout>
