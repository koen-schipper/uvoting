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
                <div class="border-2 rounded-xl mt-16 custom-border dark:custom-border-dark">
                    <div class="text-center px-6 py-2 pt-6">
                        <h3 class="font-semibold text-base">Add an idea</h3>
                        <p class="text-xs mt-4">Let us know what you would like and we'll take look!</p>
                    </div>
                    <form action="#" method="POST" class="space-y-4 px-4 py-6">
                        <div>
                            <input type="text" class="w-full bg-gray-100 dark:bg-gray-800 rounded-xl placeholder-gray-800 dark:placeholder-gray-400 px-4 py-2 border-none text-sm" placeholder="Your Idea">
                        </div>
                        <div> 
                            <select name="category_add" id="category_add" class="w-full rounded-xl px-4 py-2 bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-400 border-none text-sm">
                                <option value="Category One">Category One</option>
                                <option value="Category Two">Category Two</option>
                                <option value="Category Three">Category Three</option>
                                <option value="Category Four">Category Four</option>
                             </select>
                        </div>
                        <div>
                            <textarea name="idea" id="idea" cols="30" rows="4" class="w-full border-none bg-gray-100 dark:bg-gray-800 rounded-xl placeholder-gray-800 dark:placeholder-gray-400 text-sm px-4 py-2" placeholder="Describe your idea"></textarea>
                        </div>
                        <div class="flex items-center justify-between space-x-3">
                            <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 dark:bg-gray-600 font-semibold rounded-xl border border-gray-200 dark:border-gray-600 hover:bg-gray-200 dark:hover:bg-gray-600 transition duration-150 ease-in px-6 py-3">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                                  </svg>
                                  
                                <span class="ml-2">Attach</span>
                            </button>
                            <button type="submit" class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                                <span >Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
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
