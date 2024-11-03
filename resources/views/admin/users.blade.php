<x-admin-layout>
    <form method="GET" action="{{route('admin.users')}}">
        @csrf
        @method('GET')
        <label for="query">Search for user with name:</label>
        <input type="text" name="query" id="query">

        <button type="submit">Search</button>
    </form>
    @if($users->isNotEmpty())
        @foreach($users as $user)

            <div class="relative rounded-3xl bg-gray-900 p-8 shadow-2xl ring-1 ring-gray-900/10 sm:p-10">
                <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out" href="">{{$user->name}}</a>
            </div>

        @endforeach
    @endif

</x-admin-layout>
