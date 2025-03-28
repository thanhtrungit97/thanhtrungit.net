@extends('layout.master')
@section('content')
<div class="container mx-auto flex flex-col justify-center px-6">
    <div class="rounded-[20px] p-2 bg-white/50 dark:bg-white/10 border border-zinc-200 shadow-md mb-10">
        <div class="rounded-[12px] border border-zinc-200 bg-white shadow-md overflow-hidden">
            <header class="relative isolate border-b border-b-gray-200">
                <div class="flex flex-col justify-between gap-4 md:flex-row justify-between rounded-t-lg px-20 py-6">
                    <div class="flex gap-6 items-center">
                        <img src="{{ asset('assets/image/thanhtrung.jpeg') }}" alt="Le Thanh Trung"
                            class="size-40 rounded-full">
                        <div>
                            <h1 class="text-2xl font-bold">Le Thanh Trung</h1>
                            <p class="text-sm text-zinc-500">Backend Developer</p>
                            <p class="mt-2 text-md text-zinc-700 max-w-xl hidden md:flex">PHP developer with 7 years of
                                expertise in PHP, specializing in Laravel. Getting a place full of opportunities and
                                challenges to cultivate work skills. Commitment to contribute to the best of my
                                ability to contribute to the Company's success
                                and continuous development.</p>
                        </div>
                    </div>
                    <div>
                        <ul class="space-y-2 text-sm">
                            <li>
                                <div class="inline-flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5">
                                        </path>
                                    </svg>30/07/1997 </div>
                            </li>
                            <li><a href="mailto:thanhtrungit.dev@gmail.com"
                                    class="inline-flex items-center gap-2 underline-offset-2 transition-all hover:underline"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25">
                                        </path>
                                    </svg> thanhtrungit.dev@gmail.com </a></li>
                            <li><a href="tel:0942207246"
                                    class="inline-flex items-center gap-2 underline-offset-2 transition-all hover:underline"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z">
                                        </path>
                                    </svg> 0942207246 </a></li>
                            <li><a href="https://thanhtrungit.net"
                                    class="inline-flex items-center gap-2 underline-offset-2 transition-all hover:underline"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418">
                                        </path>
                                    </svg> thanhtrungit.net </a></li>
                            <li><a href="https://github.com/thanhtrungit97" target="_blank"
                                    class="inline-flex items-center gap-2 underline-offset-2 transition-all hover:underline"><svg
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="size-6"
                                        fill="currentColor">
                                        <path
                                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12">
                                        </path>
                                    </svg> thanhtrungit97 </a></li>
                            <li>
                                <div class="inline-flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z">
                                        </path>
                                    </svg> Da Nang City </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </header>
            <div class="px-20 py-6">
                <div class="grid gap-12 md:grid-cols-2">
                    <div>
                        <p class="mt-2 mb-5 text-md text-zinc-700 max-w-xl flex md:hidden">PHP developer with 7 years of
                            expertise in PHP, specializing in Laravel. Getting a place full of opportunities and
                            challenges to cultivate work skills. Commitment to contribute to the best of my
                            ability to contribute to the Company's success
                            and continuous development.</p>

                        <div>
                            <h2 class="text-xl font-bold">Education</h2>
                            <div class="mt-5">
                                <div class="mb-2 flex flex-wrap items-baseline gap-2">
                                    <h3 class="text-md font-semibold">College Of Information Technology - Da Nang
                                        University</h3><span class="text-sm text-gray-600">2015 - 2018 </span>
                                </div>
                                <p class="text-md text-gray-600">Major: Information Technology</p>
                                <p class="text-gray-600">GPA: 8.56/10 & 3.52/4</p>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h2 class="text-xl font-bold">Skills</h2>
                            <ul class="space-y-1 list-disc pl-3 mt-5">
                                <li class=""><span>Experience with <strong>MYSQL</strong>, <strong>PHP</strong>,
                                        <strong>Laravel</strong>, and <strong>FuelPHP</strong></span></li>
                                <li class=""><span>Experience with <strong>Livewire</strong>,
                                        <strong>FilamentPHP</strong></span></li>
                                <li class=""><span>Basic using <strong>Docker</strong>, <strong>AWS</strong>,
                                        <strong>Elasticsearch</strong>, <strong>NodeJS</strong>,
                                        <strong>TailwindCSS</strong> and <strong>Bootstrap</strong></span></li>
                                <li class=""><span>Experience working with <strong>Linux</strong> environments</span>
                                </li>
                                <li class=""><span>Proficient in using <strong>Git</strong></span></li>
                                <li class="">English reading comprehension</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div>
                            <h2 class="text-xl font-bold">Experience</h2>
                            <div class="mt-5">
                                <div class="mb-2 flex flex-wrap items-baseline gap-2">
                                    <h3 class="text-md font-semibold">TinoHost</h3><span
                                        class="text-sm text-gray-600">08/2024 - Present</span>
                                </div>
                                <p class="text-md text-gray-600">PHP Developer</p>
                                <ul class="space-y-1 text-gray-700 list-disc pl-3 list-disc pl-3">
                                    <li class="">Developing core products for TinoHost, Cloud Hosting Provider in
                                        Vietnam.</li>
                                    <li class="">Used Laravel, Livewire, FilamentPHP, Elasticsearch, TailwindCSS for
                                        development.</li>
                                    <li class="">Developed customer portal for manager services, invoices, etc.</li>
                                    <li class="">Built projects related to Cloud VPS, Domain, Hosting</li>
                                </ul>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2 flex flex-wrap items-baseline gap-2">
                                    <h3 class="text-md font-semibold">Kozocom</h3><span
                                        class="text-sm text-gray-600">04/2022 - 08/2024</span>
                                </div>
                                <p class="text-md text-gray-600">PHP Developer</p>
                                <ul class="space-y-1 text-gray-700 list-disc pl-3">
                                    <li class="">Used Laravel, NodeJS, TailwindCSS, AWS, Elasticsearch for development.
                                    </li>
                                    <li class="">Develop projects outsourcing for customers in Japan.</li>
                                    <li class="">Database design, estimation, review.</li>
                                    <li class="">Team management assistant, mentor for intern members.</li>
                                </ul>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2 flex flex-wrap items-baseline gap-2">
                                    <h3 class="text-md font-semibold">GMO Z.Com Runsystem</h3><span
                                        class="text-sm text-gray-600">03/2018 - 04/2022</span>
                                </div>
                                <p class="text-md text-gray-600">PHP Developer</p>
                                <ul class="space-y-1 text-gray-700 list-disc pl-3">
                                    <li class="">Used Laravel, FuelPHP, jQuery for development.</li>
                                    <li class="">Develop projects outsourcing for customers in Japan.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>
</div>
@endsection