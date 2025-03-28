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
    <div class="min-h-screen w-full bg-zinc-50 bg-dot antialiased flex flex-col">
        <nav class="flex items-center justify-between p-4 lg:p-8">
            <a href="{{ route('home') }}" class="text-2xl font-semibold text-zinc-900">
                <span class="lg:block hidden">thanhtrungit.</span>
                <span class="lg:hidden block">thanhtrungit.</span>
            </a>
            <div class="flex items-center lg:gap-4">
                <div class="flex items-center gap-2">
                    <a href="/blogs" class="flex items-center text-zinc-500 font-medium hover:text-zinc-800">
                        <span class="ml-4 text-lg relative">Blog</span>
                    </a>
                </div>
            </div>
        </nav>
        <main class="flex-1 container mx-auto">
            @yield('content')
        </main>
        <footer class="mt-auto">
            <div class="container mx-auto pb-5 px-6">
                <a href="https://my.tino.org/?affid=114&campaign=nvme-vps" target="_blank" class="flex flex-col items-center justify-center gap-2">
                    <span class="text-gray-500 text-center text-sm">VPS được tài trợ bởi TinoHost - Nhà cung cấp Tên miền, Cloud Server, Hosting tốt nhất hiện nay</span>
                    <img src="{{ asset('assets/image/logo-tinohost.png') }}" alt="TinoHost" class="w-20">
                </a>
            </div>
        </footer>
    </div>
</body>

</html>