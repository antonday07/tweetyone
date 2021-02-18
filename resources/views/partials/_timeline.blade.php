<div class="border border-gray-300 rounded-lg mt-5 mb-6 overflow-hidden ">
    @forelse($tweets as $tweet)
        @include('partials._tweet')
    @empty
        <p class="p-4 text-center">No tweet yet.</p>
    @endforelse

    <div class="mt-5">
            {{$tweets->links('pagination::tailwind')}}
    </div>
</div>
