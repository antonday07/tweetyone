<x-master>
<div class="container mx-auto flex justify-center ">
    <div class="row py-10 px-12 bg-gray-100 border border-gray-200 rounded-lg w-2/5">
        <div class="col-md-8">
            <h1 class="font-bold text-2xl text-center uppercase mb-4">{{ __('Login') }}</h1>
            <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                for="email">
                                Email
                            </label>

                            <input class="border border-gray-400 p-2 w-full"
                                type="text"
                                name="email"
                                id="email"
                                autofocus="email"
                                value="{{old('email')}}"
                                   required
                            >
                            @error('email')
                                <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                            @enderror
                        </div>
                  <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                  for="password">
                                    Password
                            </label>

                            <input class="border border-gray-400 p-2 w-full"
                                       type="password"
                                       name="password"
                                       id="password"
                                        autocomplete="current-password"
                                       required
                                       >

                            @error('password')
                                  <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                            @enderror
                   </div>
                    <div class="mb-6">
                        <div>
                            <input class="mr-1"
                                type="checkbox"
                                   id="remember"
                                   name="remember"
                                   {{old('remember') ? 'checked' : ''}}
                            >
                            <label class="text-xs font-bold text-gray-700 uppercase"
                                for="remember">
                                Remember Me
                            </label>

                        </div>

                        @error('remember')
                            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit"
                             class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2"
                        >
                            Login

                        </button>
                        <a href="{{route('password.request')}}" class="text-xs text-gray-700">Forgot your password ?</a>
                    </div>


                    </form>
        </div>
    </div>
</div>
</x-master>
