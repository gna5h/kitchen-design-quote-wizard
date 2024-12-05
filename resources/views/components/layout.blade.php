<!DOCTYPE html>
<html>
    <head>
        <title>Kitchen Design Quote Wizard</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="m-5 mt-20">
        <nav class="step-navbar">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-[#333333]">Kitchen Design Quote Wizard</span>
                </a>
            </div>
        </nav>
        
        @session('success')
            {{-- Toast message --}}
            <div class="step-toast-container">
                <div id="toast-simple" class="step-toast" role="alert">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="sr-only">Check icon</span>
                    </div>
                    <div class="ps-4 text-sm font-normal">{{ session('success') }}</div>
                </div>
            </div>            
        @endsession

        {{ $slot }}
    </body>
</html>

