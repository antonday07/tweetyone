<div class="flex p-4 {{$loop->last ? '' : 'border-b border-b-gray-400'}} transition-all hover:bg-gray-100">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $tweet->user->path()}}">
            <img src="{{$tweet->user->avatar}}"
                 alt=""
                 class="rounded-full mr-2"
                 style="width: 40px;height: 40px"
            >

        </a>
    </div>
    <div class="flex-1">
        <div class="flex justify-between w-full	">
            <h5 class="font-bold mb-4">
                <a href="{{$tweet->user->path()}}">
                    {{ $tweet->user->name }}
                </a>
            </h5>
            @can('delete', $tweet)
                <x-delete-buttons :tweet="$tweet"></x-delete-buttons>
            @endcan

        </div>

        <p class="text-xs italic mb-3">{{$tweet->created_at->diffForHumans()}}</p>
        <p class="text-sm mb-3">{{$tweet->body}}</p>

      <x-like-buttons :tweet="$tweet"></x-like-buttons>

    </div>
</div>
