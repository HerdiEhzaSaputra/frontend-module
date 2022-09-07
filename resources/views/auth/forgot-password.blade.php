<x-auth-layout>
    <div class="lg:bg-transparent bg-sm  dark:bg-gray-900">
        <div class="flex justify-center h-screen">

            <livewire:auth.sideview />

            <div class="flex items-center justify-center max-w-md px-6 mx-auto w-full">
                <div class="lg:fixed flex flex-col p-12 bg-white mx-auto rounded-3xl w-full lg:w-2/5 lg:right-[20px]">
                    <div class="mb-7">
                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>
                    </div>

                    <div class="space-y-4">
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">

                            <div class="space-y-6">
                                <div class="relative">
                                    <input placeholder="Email" type="email" name="email" :value="old('email')" required autofocus
                                        class="text-sm text-gray-700 px-4 py-3 rounded-sm w-full bg-gray-100 border-gray-200 focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400">
                                </div>
                            </div>
                            <div>
                                <button type="submit"
                                    class="w-full flex justify-center bg-blue-800  hover:bg-blue-700 text-gray-100 p-3  rounded-md tracking-wide font-semibold  cursor-pointer transition ease-in duration-500">
                                    {{ __('Email Password Reset Link') }}
                                </button>
                            </div>
                        </form>

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

    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}
</x-auth-layout>
