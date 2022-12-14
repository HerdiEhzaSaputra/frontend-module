<x-auth-layout>
    <div class="lg:bg-transparent bg-sm  dark:bg-gray-900">
        <div class="flex justify-center h-screen">

            <livewire:auth.sideview />

            <div class="flex items-center justify-center max-w-md px-6 mx-auto w-full">
                <div class="lg:fixed flex flex-col p-12 bg-white mx-auto rounded-3xl w-full lg:w-2/5 lg:right-[20px]">
                    <div class="mb-7 w-full whitespace-normal">
                        <h3 class="font-semibold text-2xl text-gray-800">Daftar</h3>
                        <p class="text-gray-600">Sudah punya akun? <a href="{{ route('login') }}"
                                class="text-sm text-purple-700 hover:text-purple-600">Masuk</a></p>
                    </div>

                    <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="space-y-4">
                            <div class="space-y-6">
                                <div class="relative">
                                    <input placeholder="Nama" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                                        class="text-sm text-gray-700 px-4 py-3 rounded-sm w-full bg-gray-100 border-gray-200 focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400">
                                </div>
                                <div class="relative">
                                    <input placeholder="Email" type="email" name="email" :value="old('email')" required
                                        class="text-sm text-gray-700 px-4 py-3 rounded-sm w-full bg-gray-100 border-gray-200 focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400">
                                </div>
                                <div class="relative" x-data="{ show: true }">
                                    <input placeholder="Password" :type="show ? 'password' : 'text'" name="password" required autocomplete="new-password"
                                        class="text-sm text-gray-700 px-4 py-3 rounded-sm w-full bg-gray-100 border-gray-200 focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400">

                                    <div class="flex items-center absolute inset-y-0 right-0 mr-3 text-sm leading-5">
                                        <svg @click="show = !show" :class="{ 'hidden': !show, 'block': show }"
                                            class="h-4 text-blue-500" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 576 512">
                                            <path fill="currentColor"
                                                d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                            </path>
                                        </svg>

                                        <svg @click="show = !show" :class="{ 'block': !show, 'hidden': show }"
                                            class="h-4 text-blue-500" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 640 512">
                                            <path fill="currentColor"
                                                d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="relative" x-data="{ show: true }">
                                    <input placeholder="Konfirmasi Password" :type="show ? 'password' : 'text'" name="password_confirmation" required autocomplete="new-password"
                                        class="text-sm text-gray-700 px-4 py-3 rounded-sm w-full bg-gray-100 border-gray-200 focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400">

                                    <div class="flex items-center absolute inset-y-0 right-0 mr-3 text-sm leading-5">
                                        <svg @click="show = !show" :class="{ 'hidden': !show, 'block': show }"
                                            class="h-4 text-blue-500" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 576 512">
                                            <path fill="currentColor"
                                                d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                            </path>
                                        </svg>

                                        <svg @click="show = !show" :class="{ 'block': !show, 'hidden': show }"
                                            class="h-4 text-blue-500" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 640 512">
                                            <path fill="currentColor"
                                                d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms"/>

                                            <div class="ml-2">
                                                {!! __('Dengan mendaftar, saya menyatakan menyetujui :ketentuan_layanan and :kebijakan_privasi Xezar POS', [
                                                        'ketentuan_layanan' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Ketentuan Layanan').'</a>',
                                                        'kebijakan_privasi' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Kebijakan Privasi').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                            @endif

                            <div>
                                <button type="submit"
                                    class="w-full flex justify-center bg-blue-800  hover:bg-blue-700 text-gray-100 p-3  rounded-md tracking-wide font-semibold  cursor-pointer transition ease-in duration-500">
                                    Daftar
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="mt-7 text-center text-gray-400 text-xs"><span>2022 ?? Xezar POS </span></div>
                </div>
            </div>
        </div>
    </div>

    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('Dengan mendaftar, saya menyatakan menyetujui :ketentuan_layanan and :kebijakan_privasi Xezar POS', [
                                        'ketentuan_layanan' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Ketentuan Layanan').'</a>',
                                        'kebijakan_privasi' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Kebijakan Privasi').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}
</x-auth-layout>
