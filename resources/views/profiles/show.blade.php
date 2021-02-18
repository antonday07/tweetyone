<x-app>
    <header class="relative">
        <div class="relative mb-6">

            <img
                src="{{$user->banner}}"
                alt="banner"
                style="width: 100%;height: 300px;object-fit: cover"
            >


            <img
                src="{{$user->avatar}}"
                alt=""
                class="rounded-full absolute transform -translate-x-1/2 translate-y-1/2 bottom-0"
                width="100"
                style="left:50%"
            >
        </div>


    <div class="flex items-center justify-between mb-5">
        <div style="max-width: 270px">
            <h1 class="font-bold text-2xl"> {{$user->name}}</h1>
            <p class="text-sm text-muted">Joined {{$user->created_at->diffForHumans()}}</p>

        </div>

        <div class="flex">

           @can('edit' ,$user)
            <a
                href="{{$user->path('edit')}}"
                class=" rounded-full border border-gray-300 py-2 px-3 text-black text-sm mr-2">
                Edit Profile
            </a>
            @endcan

            <x-follow-button :user="$user"></x-follow-button>
        </div>

    </div>

    <p class="text-sm">
        {{$user->description}}
    </p>
    </header>


    @include('partials._timeline', [
        'tweets' => $tweets
])
</x-app>
