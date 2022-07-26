<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-black py-4">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                </div>
                <nav class="space-x-1 text-gray-200 text-md sm:text-base">
                    <a class="hover:bg-gray-100 hover px-5 py-5 transition hover:shadow hover:border-green-00 hover:text-blue-600 no-underline"
                        href="/"><svg xmlns="http://www.w3.org/2000/svg" class="inline-flex mb-1  h-5 w-5"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg> Home</a>
                    <a class="hover:bg-gray-100 hover px-5 py-5 transition hover:shadow hover:border-green-500 hover:text-blue-600 no-underline"
                        href="/shop"><svg xmlns="http://www.w3.org/2000/svg" class="inline-flex mb-1 h-5 w-5"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                clip-rule="evenodd" />
                        </svg> Store</a>
                    <a class="hover:bg-gray-100 hover px-5 py-5 transition hover:shadow hover:border-green-500 hover:text-blue-600 no-underline"
                        href="/cart">Cart <span class="relative inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex mb-1 h-7 w-7" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                            </svg>
                            <span
                                class="absolute -top-1 -right-3 px-2 py-1 text-xs font-bold leading-none text-red-100 transform bg-red-600 rounded-full">9</span>
                        </span></a>
                </nav>
            </div>
        </header>
        @yield('content')

    </div>
</body>

</html>
