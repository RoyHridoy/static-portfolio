<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    {{-- left side --}}
    <header class="h-screen bg-slate-900 left-0 fixed top-0 w-[15%] z-50">
        <div class="mt-10">
            <h1 class="text-center">
                <a href="/" class="inline-block text-white text-4xl uppercase font-medium">roy. <span
                        class="bg-white/90 text-slate-900 px-2 py-0">me</span></a>
            </h1>
            <ul class="mt-10">
                <li><a href="/"
                        class="text-white/60 text-lg uppercase tracking-wide my-3 block py-3 hover:text-white/95 transition-all px-6">Home</a>
                </li>
                <li><a href="/experience"
                        class="text-white/60 text-lg uppercase tracking-wide my-3 block py-3 hover:text-white/95 transition-all px-6">Experience</a>
                </li>
                <li><a href="/projects"
                        class="text-white/60 text-lg uppercase tracking-wide my-3 block py-3 hover:text-white/95 transition-all px-6">Projects</a>
                </li>
            </ul>
        </div>
    </header>

    {{-- Right side --}}
    <section class="w-[85%] ml-[15%]">
        <div
            class="min-h-screen bg-cover relative z-10 after:absolute after:w-full after:h-full after:bg-slate-900/80 after:top-0 after:left-0 after:-z-10 bg-[url('{{ asset('/images/bg.jpg') }}')]">
            <div {{ $attributes->merge(['class' => 'px-[10%] flex flex-col justify-center min-h-screen text-white w-3/5']) }}>

                {{ $slot }}

            </div>
        </div>
    </section>

</body>

</html>