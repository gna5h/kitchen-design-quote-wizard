<!DOCTYPE html>
<html>
    <head>
        <title>Kitchen Design Quote Wizard</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="m-5">
        <nav class="step-navbar">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-[#333333]">Kitchen Design Quote Wizard</span>
                </a>
            </div>
        </nav>
        {{ $slot }}
    </body>
</html>

