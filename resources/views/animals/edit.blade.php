<x-app-layout>
    <h1>Edit {{$animal->name}}</h1>
    <form method="post" action="{{route('animals.update', [$animal])}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{$animal->name}}">
        </div>
        <div>
            <label for="breed">Breed</label>
            <input type="text" name="breed" id="breed" value="{{$animal->breed}}">
        </div>
        <div>
            <label for="description">Describe animal</label>
            <input type="text" name="description" id="description" value="{{$animal->description}}">
        </div>
        <div>
            <label for="image">Upload an image of your animal</label>
            <img src="{{$animal->image}}" alt="image of {{$animal->name}}">
            <input type="file" name="image" id="image" value="{{$animal->image}}">
        </div>
        <form method="post" action="{{route('animals.destroy', [$animal])}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete {{$animal->name}}</button>

        </form>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</x-app-layout>
