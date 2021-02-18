<div class="flex flex-col justify-between">
    <div class="following bg-gray-100 border border-gray-200 rounded-lg p-4">
        <h3 class="font-medium mb-4 text-xl">Following</h3>

        <ul>
            @forelse(current_user()->follows as $user)
                <li class="{{ $loop->last ? '' : 'mb-4' }}">
                    <div >
                        <a href="{{route('profile', $user)}}" class="flex items-center text-sm">
                            <img src="{{$user->avatar}}" alt="" class="rounded-full mr-2"
                                 style="width: 40px;height: 40px">

                            {{$user->name}}
                        </a>

                    </div>
                </li>

            @empty
                <p class="py-2"> No following yet.</p>
            @endforelse
        </ul>
    </div>

    @if (session('status'))
        <div class="my-8 bg-red-500 text-white rounded-lg text-sm p-2">
            {{ session('status') }}
        </div>
    @endif

</div>
