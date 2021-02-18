<div class="border border-blue-400 rounded-lg px-8 py-6 mb-6">
<form method="post" action="/tweets">
    @csrf
    <textarea name="body"
              rows="3"
              class="w-full focus:outline-none"
              placeholder="What's up bro ?"
                required

    >

    </textarea>

    <hr class="my-1">
    <footer class="lg:flex justify-between items-center">
        <img src="{{auth()->user()->avatar}}" alt="" class="rounded-full mr-2" style="width: 40px;height: 40px">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-sm rounded-lg shadow py-2 px-2 text-white">Tweet-a-story</button>

    </footer>
</form>
    @error('body')
        <p class="text-red-500 text-sm my-4">{{$message}}</p>
    @enderror
</div>
