<x-app>
    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{$user->path()}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="grid lg:grid-cols-1 gap-6">

                <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="username" class="bg-white text-gray-600 px-1">Username *</label>
                        </p>
                    </div>
                    <p>
                        <input id="username" name="username" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 text-gray-900 outline-none block h-full w-full" value="{{$user->username}}">
                    </p>

                    @error('username')
                    <p>
                       <strong class="text-red-300"> {{$message}}</strong>
                    </p>
                    @enderror
                </div>

                <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="name" class="bg-white text-gray-600 px-1">Name *</label>
                        </p>
                    </div>
                    <p>
                        <input id="name" name="name" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full" value="{{$user->name}}">
                    </p>

                    @error('name')
                    <p>
                        <strong> {{$message}}</strong>
                    </p>
                    @enderror
                </div>

                <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="description" class="bg-white text-gray-600 px-1">Description *</label>
                        </p>
                    </div>
                    <p>

                        <textarea name="description" id="description" cols="89" rows="5">{{$user->description}}</textarea>
                    </p>

                    @error('description')
                    <p>
                        <strong> {{$message}}</strong>
                    </p>
                    @enderror
                </div>


                <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="email" class="bg-white text-gray-600 px-1">Email *</label>
                        </p>
                    </div>
                    <p>
                        <input id="email" name="email" autocomplete="false" tabindex="0" type="email" class="py-1 px-1 outline-none block h-full w-full" value="{{$user->email}}">
                    </p>

                    @error('email')
                    <p>
                        <strong class="text-red-300"> {{$message}}</strong>
                    </p>
                    @enderror
                </div>

                <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="avatar" class="bg-white text-gray-600 px-1">Avatar *</label>
                        </p>
                    </div>
                    <p class="flex">
                        <input id="avatar" name="avatar" autocomplete="false" tabindex="0" type="file" class="py-1 px-1 outline-none block h-full w-full" value="{{$user->email}}">
                        <img src="{{$user->avatar}}" alt="{{$user->username}}" width="50">
                    </p>

                    @error('avatar')
                    <p>
                        <strong class="text-red-300"> {{$message}}</strong>
                    </p>
                    @enderror
                </div>

                <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="banner" class="bg-white text-gray-600 px-1">Banner *</label>
                        </p>
                    </div>
                    <p class="flex">
                        <input id="banner" name="banner" autocomplete="false" tabindex="0" type="file" class="py-1 px-1 outline-none block h-full w-full" value="{{$user->banner}}">
                        <img src="{{$user->banner}}" alt="{{$user->username}}" width="50">
                    </p>

                    @error('banner')
                    <p>
                        <strong class="text-red-300"> {{$message}}</strong>
                    </p>
                    @enderror
                </div>



                <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="password" class="bg-white text-gray-600 px-1">Password *</label>
                        </p>
                    </div>
                    <p>
                        <input id="password" name="password" autocomplete="false" tabindex="0" type="password" class="py-1 px-1 outline-none block h-full w-full" required>
                    </p>

                    @error('password')
                    <p>
                        <strong class="text-red-300"> {{$message}}</strong>
                    </p>
                    @enderror
                </div>

                <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="password_confirmation" class="bg-white text-gray-600 px-1">Password Confirm *</label>
                        </p>
                    </div>
                    <p>
                        <input id="password_confirmation" name="password_confirmation" autocomplete="false" tabindex="0" type="password" class="py-1 px-1 outline-none block h-full w-full" required>
                    </p>

                    @error('password_confirmation')
                    <p>
                        <strong class="text-red-300"> {{$message}}</strong>
                    </p>
                    @enderror
                </div>
            </div>
            <div class="border-t mt-6 pt-3">
                <button type="submit" class="rounded text-gray-100 px-3 py-1 bg-blue-500 hover:shadow-inner hover:bg-blue-700 transition-all duration-300">
                    Update profile
                </button>

                <a href="{{ $user->path()}}" class="ml-3 text-gray-600 hover:underline text-sm font-medium">Cancel</a>
            </div>
        </form>
    </div>
</x-app>
