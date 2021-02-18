<form method="POST" action="{{ route('tweets.destroy', ['tweet' => $tweet->id]) }}">
    @csrf
    @method('DELETE')
    <button
        onclick="return confirm('Are you sure want to delete Tweet?');"
        type="submit">
        <ion-icon name="trash-outline" size="small"></ion-icon>
    </button>
</form>
