<x-app-layout>
    <div class="p-6">

        <h1 class="text-2xl font-bold">
            Welcome, {{ $user->name }}
        </h1>

        <p>Role: {{ $user->role }}</p>

        <hr class="my-4">

        <h2 class="text-xl font-semibold">Users (Your API)</h2>
        @foreach($users as $u)
            <p>{{ $u->name }} - {{ $u->email }}</p>
        @endforeach

        <hr class="my-4">

        <h2 class="text-xl font-semibold">Public API Posts</h2>

        @foreach($posts as $post)
            <div class="border p-2 my-2">
                <h3 class="font-bold">{{ $post['title'] }}</h3>
                <p>{{ $post['body'] }}</p>
            </div>
        @endforeach

    </div>
</x-app-layout>