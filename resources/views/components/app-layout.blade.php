<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @livewireStyles
    <title>Lohravel</title>
</head>
<body>
    <header>
        <div class="w-full max-w-5xl mx-auto flex justify-between my-5 px-5 lg:px-0">
            <a wire:navigate href="/" class="hover:opacity-75 transition">
{{--                <img class="w-full h-10" src="{{ asset('images/logo.svg') }}" alt="Lohravel">--}}
                <span class="font-black text-3xl leading-3">Lohravel</span>
            </a>
            <div></div>
        </div>
    </header>
    <div class="mx-auto max-w-5xl my-10 px-5 lg:px-0">
        {{ $slot }}
    </div>
@livewireScripts
</body>
</html>
