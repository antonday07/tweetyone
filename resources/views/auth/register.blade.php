<x-master>
<div class="container mx-auto flex justify-center ">
    <div class="row py-10 px-8 bg-gray-100 border border-gray-200 rounded-lg w-2/5">
        <div>
            <h1 class="font-bold text-2xl text-center">{{ __('Register') }}</h1>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                  <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                  for="username">
                                  username
                            </label>

                            <input class="border border-gray-400 p-2 w-full"
                                       type="text"
                                       name="username"
                                       id="username"
                                        value="{{old('username')}}"
                                        autocomplete="username"
                                       required
                                       >

                            @error('username')
                                  <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                            @enderror
                   </div>

                  <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                  for="name">
                                  name
                            </label>

                            <input class="border border-gray-400 p-2 w-full"
                                       type="text"
                                       name="name"
                                       id="name"
                                        value="{{old('name')}}"
                                       required
                                       >

                            @error('name')
                                  <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                            @enderror
                   </div>

                  <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                  for="email">
                                  email
                            </label>

                            <input class="border border-gray-400 p-2 w-full"
                                       type="text"
                                       name="email"
                                       id="email"
                                       required
                                        value="{{old('email')}}"
                                       >

                            @error('email')
                                  <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                            @enderror
                   </div>
                  <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                  for="password">
                                  password
                            </label>

                            <input class="border border-gray-400 p-2 w-full"
                                       type="password"
                                       name="password"
                                       id="password"
                                       required
                                       >

                            @error('password')
                                  <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                            @enderror
                   </div>

                  <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                  for="password-confirm">
                                  password-confirm
                            </label>

                            <input class="border border-gray-400 p-2 w-full"
                                       type="password"
                                       name="password_confirmation"
                                       id="password-confirm"
                                       required
                                       >

                            @error('password-confirm')
                                  <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                            @enderror
                   </div>



                <div>
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2"
                    >
                        Register

                    </button>

                </div>

            </form>


        </div>
    </div>
</div>
</x-master>
