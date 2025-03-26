<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le Thanh Trung</title>
    <meta name="author" content="Le Thanh Trung" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/image/thanhtrung.jpeg') }}" />
    <meta
      name="description"
      content="I craft web apps using Laravel, Livewire, FilamentPHP, Tailwind CSS, and beyond."
    />
    <meta property="og:site_name" content="Le Thanh Trung" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Le Thanh Trung" />
    <meta
      property="og:description"
      content="I craft web apps using Laravel, Livewire, FilamentPHP, Tailwind CSS, and beyond."
    />
    <meta property="og:locale" content="en" />
    <meta property="og:url" content="https://thanhtrungit.net" />
    <meta
      name="twitter:description"
      content="I craft web apps using Laravel, Livewire, FilamentPHP, Tailwind CSS, and beyond."
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-zinc-50 antialiased bg-dot w-full min-h-screen">
        <nav class="p-4 lg:p-8 flex items-center justify-between"><a class="font-semibold text-2xl text-zinc-900"
                href="{{ route('home') }}"><span class="hidden lg:block">thanhtrungit.</span><span
                    class="lg:hidden">thanhtrungit.</span></a>
            <div class="flex items-center lg:gap-4">
                <div class="flex items-center gap-2">
                    <a class=" font-medium hover:text-zinc-800 flex items-center text-zinc-500" href="/blogs">
                        <span class="text-lg ml-4 relative false">Blog</span>
                    </a>
                </div>
            </div>
        </nav>
        <div class="max-w-screen-lg mx-auto flex">
            @yield('content')
        </div>
    </div>
</body>

</html>