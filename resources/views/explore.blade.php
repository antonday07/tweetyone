<x-app>
    <h1 class="font-bold text-center mb-5 text-lg">List Users</h1>
    <div class="grid grid-cols-3">
        @foreach($users as $user)
            <a href="{{route('profile', $user->username)}}" class="flex gap-4 items-center mb-4">
                <img src="{{$user->avatar}}" alt="{{$user->username}}'s avatar" width="60" class="mr-2">
                <h3 class="font-bold"> {{$user->username}}</h3>
            </a>
        @endforeach


    </div>

    {{$users->links('pagination::tailwind')}}
</x-app>
