<ul>
    <li><a href="/tweets" class="font-medium text-lg mb-2 block hover:bg-gray-100 rounded-md p-2">Home</a></li>
    <li><a href="/explore" class="font-medium text-lg mb-2 block hover:bg-gray-100 rounded-md p-2">Explore</a></li>
    <li><a href="{{ route('profile', ['user' => auth()->user()]) }}" class="font-medium text-lg mb-2 block hover:bg-gray-100 rounded-md p-2">Profile</a></li>
    <li class="p-2 bg-blue-500 hover:bg-blue-600 rounded-lg text-white text-center">
        <form action="/logout" method="post">
            @csrf
            <button class="font-medium text-sm"> Logout</button>
        </form>
    </li>
</ul>
