<x-admin-layout>
    <h1 class="text-3xl font-bold mb-4">Admin Dashboard</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Welcome, {{ Auth::user()->name }}</h2>
        <p class="mb-4">You are logged in as an administrator. Here you can manage your application.</p>

        <h3 class="text-lg font-medium">Quick Links</h3>
        <ul class="mt-2">
            <li><a href="{{route('admin.users')}}" class="text-blue-500 hover:underline">Manage Users</a></li>
            <li><a href="" class="text-blue-500 hover:underline">Settings</a></li>
            <li><a href="" class="text-blue-500 hover:underline">View Reports</a></li>
        </ul>
    </div>
</x-admin-layout>
