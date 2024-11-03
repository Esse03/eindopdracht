<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold text-gray-200 mb-4">Create Animal</h1>

        <form method="post" action="{{ route('animals.store') }}" enctype="multipart/form-data" class="bg-gray-800 p-6 rounded-lg shadow-lg">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-300 mb-2">Name</label>
                <input type="text" name="name" id="name" class="rounded-md shadow-sm border-gray-700 bg-gray-700 text-white placeholder-gray-400 focus:border-gray-500 focus:ring focus:ring-gray-500 focus:ring-opacity-50 w-full py-2 px-3">
            </div>

            <div class="mb-4">
                <label for="breed" class="block text-gray-300 mb-2">Breed</label>
                <input type="text" name="breed" id="breed" class="rounded-md shadow-sm border-gray-700 bg-gray-700 text-white placeholder-gray-400 focus:border-gray-500 focus:ring focus:ring-gray-500 focus:ring-opacity-50 w-full py-2 px-3">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-300 mb-2">Describe animal</label>
                <input type="text" name="description" id="description" class="rounded-md shadow-sm border-gray-700 bg-gray-700 text-white placeholder-gray-400 focus:border-gray-500 focus:ring focus:ring-gray-500 focus:ring-opacity-50 w-full py-2 px-3">
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-300 mb-2">Upload an image of your animal</label>
                <input type="file" name="image" id="image" class="rounded-md shadow-sm border-gray-700 bg-gray-700 text-white placeholder-gray-400 focus:border-gray-500 focus:ring focus:ring-gray-500 focus:ring-opacity-50 w-full py-2 px-3">
            </div>

            <div>
                <button type="submit" class="bg-blue-600 text-white rounded-md px-4 py-2 hover:bg-blue-500 transition">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>

