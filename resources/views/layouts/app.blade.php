<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Open+Sans:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-gray-background dark:bg-gray-900 text-gray-900 dark:text-gray-100 text-sm">
       <header class="flex items-center justify-between px-8 py-4">
            <a href="/">
                <img src="{{ asset('/img/logo-dark.png') }}" alt="logo" class='hidden dark:block max-h-28'/>
                <img src="{{ asset('/img/logo-light.png') }}" alt="logo" class='block dark:hidden max-h-28'/>
            </a>

            <div class='flex items-center'>
                @if (Route::has('login'))
                <div class="p-6">
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
    
                        <a href={{"route('logout')"}} onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                <a href='#'>
                    <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
                </a>
            </div>                
       </header>

       <main class="container mx-auto flex max-w-custom">
            <div class='w-70 mr-5'>
                Add idea form goes here.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet arcu eu ligula rutrum consectetur. Nullam nunc turpis, pulvinar vel dui id, mollis ultricies diam. Integer vestibulum rhoncus sapien, non lobortis odio laoreet at. Integer id auctor sapien. In eget sollicitudin ex. Vestibulum et molestie ante. In justo elit, vestibulum quis magna non, tempus convallis ex.
            </div>
            <div class='w-175'>
                <nav class="flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3 border-gray">
                        <li><a href="#" class="hover:text-gray-900 dark:hover:text-white border-b-4 pb-3 border-red">All Ideas (87)</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition duration-150 ease-in border-b-4 pb-3 hover:border-red-hover">Considering (6)</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition duration-150 ease-in border-b-4 pb-3 hover:border-red-hover">In Progress (1)</a></li>
                    </ul>

                    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3 border-gray">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition duration-150 ease-in border-b-4 pb-3 hover:border-red-hover">Implemented (10)</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition duration-150 ease-in border-b-4 pb-3 hover:border-red-hover">Closed (55)</a></li>
                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
       </main>
    </body>
</html>
