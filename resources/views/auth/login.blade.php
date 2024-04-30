<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                    Pretty Hue POS 
                </a>
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Log in to your account
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="#">
                            <div>
                                <x-input-label for="username">Your Username</x-input-label>
                                <x-text-input type="text" name="username" id="username" placeholder="Username" required=""/>
                                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="password">Password</x-input-label>
                                <x-text-input type="password" name="password" id="password" placeholder="••••••••" required=""/>
                            </div>
                            <x-primary-button>
                                {{ __('Log in') }}
                            </x-primary-button>
                        </form>
                    </div>
                </div>
          
    </form>
</x-guest-layout>
