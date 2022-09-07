<x-auth-layout>
    <div class="lg:bg-transparent bg-sm  dark:bg-gray-900">
        <div class="flex justify-center h-screen">

            <livewire:auth.sideview />

            <div class="flex items-center justify-center max-w-md px-6 mx-auto w-full">
                <div class="lg:fixed flex flex-col p-12 bg-white mx-auto rounded-3xl w-full lg:w-2/5 lg:right-[20px]">
                    <div class="mb-7">
                        <h3 class="font-semibold text-2xl text-gray-800">Masuk</h3>
                        <p class="text-gray-600">Belum punya akun?
                            <a href="{{ route('register') }}" class="text-sm text-blue-700 hover:text-blue-600">Daftar</a>
                        </p>
                    </div>

                    <div class="space-y-4">
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}" class="space-y-4">
                            @csrf

                            <div class="space-y-6">
                                <div class="relative">
                                    <input class="text-sm text-gray-700 px-4 py-3 rounded-sm w-full bg-gray-100 border-gray-200 focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"
                                            type="email" name="email" :value="old('email')" required autofocus placeholder="Email">
                                </div>
                                <div class="relative" x-data="{ show: true }">
                                    <input :type="show ? 'password' : 'text'" name="password" required autocomplete="current-password" placeholder="Password"
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

                            <div class="flex items-center justify-between">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>


                                <div class="text-sm ml-auto">
                                    @if (Route::has('password.request'))
                                        <a class="text-sm text-blue-600 hover:text-blue-800" href="{{ route('password.request') }}">
                                            {{ __('Lupa kata sandi?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <button type="submit"
                                    class="w-full flex justify-center bg-blue-800  hover:bg-blue-700 text-gray-100 p-3  rounded-md tracking-wide font-semibold  cursor-pointer transition ease-in duration-500">
                                    Masuk
                                </button>
                            </div>
                        </form>

                        <div class="flex items-center justify-center space-x-2 my-5">
                            <span class="h-px w-16 bg-gray-400"></span>
                            <span class="text-gray-400 font-normal">or</span>
                            <span class="h-px w-16 bg-gray-400"></span>
                        </div>
                        <div class="flex justify-center gap-5 w-full ">

                            <button type="submit"
                                class="w-full flex items-center justify-center mb-6 md:mb-0 border border-gray-400 hover:border-gray-600 hover:bg-gray-600 hover:text-gray-100 text-sm text-gray-500 p-3 rounded-lg tracking-wide font-medium cursor-pointer transition ease-in duration-200">
                                <svg class="w-4 mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#EA4335"
                                        d="M5.266 9.765A7.077 7.077 0 0 1 12 4.909c1.69 0 3.218.6 4.418 1.582L19.91 3C17.782 1.145 15.055 0 12 0 7.27 0 3.198 2.698 1.24 6.65l4.026 3.115Z" />
                                    <path fill="#34A853"
                                        d="M16.04 18.013c-1.09.703-2.474 1.078-4.04 1.078a7.077 7.077 0 0 1-6.723-4.823l-4.04 3.067A11.965 11.965 0 0 0 12 24c2.933 0 5.735-1.043 7.834-3l-3.793-2.987Z" />
                                    <path fill="#4A90E2"
                                        d="M19.834 21c2.195-2.048 3.62-5.096 3.62-9 0-.71-.109-1.473-.272-2.182H12v4.637h6.436c-.317 1.559-1.17 2.766-2.395 3.558L19.834 21Z" />
                                    <path fill="#FBBC05"
                                        d="M5.277 14.268A7.12 7.12 0 0 1 4.909 12c0-.782.125-1.533.357-2.235L1.24 6.65A11.934 11.934 0 0 0 0 12c0 1.92.445 3.73 1.237 5.335l4.04-3.067Z" />
                                </svg>
                                <!-- <svg class="w-4" fill="#fff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.99 13.9v-3.72h9.36c.14.63.25 1.22.25 2.05 0 5.71-3.83 9.77-9.6 9.77-5.52 0-10-4.48-10-10S6.48 2 12 2c2.7 0 4.96.99 6.69 2.61l-2.84 2.76c-.72-.68-1.98-1.48-3.85-1.48-3.31 0-6.01 2.75-6.01 6.12s2.7 6.12 6.01 6.12c3.83 0 5.24-2.65 5.5-4.22h-5.51v-.01Z"></path></svg> -->
                                <span>Google</span>
                            </button>

                            <button type="submit"
                                class="w-full flex items-center justify-center mb-6 md:mb-0 border border-gray-400 hover:border-gray-600 hover:bg-gray-600 hover:text-gray-100 text-sm text-gray-500 p-3 rounded-lg tracking-wide font-medium cursor-pointer transition ease-in duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 mr-2"
                                    viewBox="-204.79995 -341.33325 1774.9329 2047.9995">
                                    <path
                                        d="M1365.333 682.667C1365.333 305.64 1059.693 0 682.667 0 305.64 0 0 305.64 0 682.667c0 340.738 249.641 623.16 576 674.373V880H402.667V682.667H576v-150.4c0-171.094 101.917-265.6 257.853-265.6 74.69 0 152.814 13.333 152.814 13.333v168h-86.083c-84.804 0-111.25 52.623-111.25 106.61v128.057h189.333L948.4 880H789.333v477.04c326.359-51.213 576-333.635 576-674.373"
                                        fill="#1877f2" />
                                    <path
                                        d="M948.4 880l30.267-197.333H789.333V554.609C789.333 500.623 815.78 448 900.584 448h86.083V280s-78.124-13.333-152.814-13.333c-155.936 0-257.853 94.506-257.853 265.6v150.4H402.667V880H576v477.04a687.805 687.805 0 00106.667 8.293c36.288 0 71.91-2.84 106.666-8.293V880H948.4"
                                        fill="#fff" />
                                </svg>
                                <span>Facebook</span>
                            </button>
                        </div>
                    </div>
                    <div class="mt-7 text-center text-gray-400 text-xs">
                        <span>
                            2022 © Xezar POS
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>
