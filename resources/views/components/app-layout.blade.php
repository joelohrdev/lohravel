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
            <a href="/" class="hover:opacity-75 transition">
                <svg class="w-full h-10" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 165.83 48.75"><defs><style>.cls-5{letter-spacing:-.02em}</style></defs><text fill="#231f20" font-family="OfeliaDisplay-Medium,&quot;Ofelia Display&quot;" font-size="44" font-weight="500" transform="translate(0 38.5)"><tspan x="0" y="0" letter-spacing="-.05em">L</tspan><tspan x="19.27" y="0" class="cls-5">oh</tspan><tspan x="71.1" y="0" letter-spacing="-.02em">r</tspan><tspan x="87.96" y="0" letter-spacing="-.04em">a</tspan><tspan x="110.53" y="0" letter-spacing="-.05em">v</tspan><tspan x="131.03" y="0" class="cls-5">el</tspan></text></svg>
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
