@if (current_user()->isNot($user))
<form method="POST" action="/profiles/{{$user->username}}/follow">
    @csrf
    <button
        type="submit"
        class="bg-blue-500 rounded-full shadow-lg py-2 px-3 text-white text-sm">
        {{current_user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}
    </button>
</form>
@endif
