<x-app-layout>
    <h1>Create Animal</h1>
    <form method="post" action="{{route('animals.store')}}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="breed">Breed</label>
            <input type="text" name="breed" id="breed">
        </div>
        <div>
            <label for="description">Describe animal</label>
            <input type="text" name="description" id="description">
        </div>
        <div>
            <label for="image">Upload an image of your animal</label>
            <input type="file" name="image" id="image">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</x-app-layout>
