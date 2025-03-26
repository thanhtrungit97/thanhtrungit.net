@extends('layout.master')
@section('content')
<div class="max-w-screen-lg mx-auto flex min-h-screen flex-col justify-center py-16 px-6">
    <div class="mb-14 flex flex-wrap items-center justify-center gap-10 sm:mb-20 sm:gap-20"><img
            src="{{ asset('assets/image/thanhtrung.jpeg') }}" alt="Le Thanh Trung"
            class="size-32 rounded-full sm:size-40">
        <div class="group">
            <div class="mb-2 text-xl transition-all sm:text-2xl"><span class="me-2 font-light">👋 Hi,</span></div>
            <h2 class="text-[2.75rem] font-black transition-all sm:text-7xl"><span
                class="font-light">I'm</span> Le Thanh
                Trung </h2>
        </div>
    </div>
    <div class="mb-32 text-center">
        <h2 class="mb-6 text-3xl font-bold sm:mb-8 sm:text-4xl"> I'm a <span
                class="text-blue-500 underline underline-offset-8">Backend Developer</span></h2>
        <div class="text-base font-light leading-loose text-gray-600 lg:text-lg">
            <p>I craft web apps using Laravel, Livewire, FilamentPHP, Tailwind CSS, and beyond.</p>
        </div>
        <div class="mt-20">
            <p class="text-base text-gray-600">Find me on</p>
            <div class="flex items-center justify-center flex-wrap gap-5 mt-3">
                <a class="flex items-center space-x-2 text-zinc-500 font-medium hover:text-zinc-800 relative after:absolute after:-bottom-1 after:left-0 after:w-full after:h-0.5 after:bg-zinc-800 after:transition-all after:duration-300 after:ease-in-out after:transform after:scale-x-0 hover:after:scale-x-100 after:origin-left"
                    href="{{ route('cv') }}"><span class="text-2xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z">
                            </path>
                        </svg></span><span class="text-lg">My Resume</span></a>
                <a class="flex items-center space-x-2 text-zinc-500 font-medium hover:text-zinc-800 relative after:absolute after:-bottom-1 after:left-0 after:w-full after:h-0.5 after:bg-zinc-800 after:transition-all after:duration-300 after:ease-in-out after:transform after:scale-x-0 hover:after:scale-x-100 after:origin-left"
                    href="https://github.com/thanhtrungit97"><span class="text-2xl"><svg
                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                            viewBox="0 0 30 30">
                            <path
                                d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z">
                            </path>
                        </svg></span><span class="text-lg">Github</span></a>
                <a class="flex items-center space-x-2 text-zinc-500 font-medium hover:text-zinc-800 relative after:absolute after:-bottom-1 after:left-0 after:w-full after:h-0.5 after:bg-zinc-800 after:transition-all after:duration-300 after:ease-in-out after:transform after:scale-x-0 hover:after:scale-x-100 after:origin-left"
                    href="https://linkedin.com/in/thanhtrungit"><span class="text-2xl"><svg
                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path
                                d="M19,3H5C3.895,3,3,3.895,3,5v14c0,1.105,0.895,2,2,2h14c1.105,0,2-0.895,2-2V5C21,3.895,20.105,3,19,3z M9,17H6.477v-7H9 V17z M7.694,8.717c-0.771,0-1.286-0.514-1.286-1.2s0.514-1.2,1.371-1.2c0.771,0,1.286,0.514,1.286,1.2S8.551,8.717,7.694,8.717z M18,17h-2.442v-3.826c0-1.058-0.651-1.302-0.895-1.302s-1.058,0.163-1.058,1.302c0,0.163,0,3.826,0,3.826h-2.523v-7h2.523v0.977 C13.93,10.407,14.581,10,15.802,10C17.023,10,18,10.977,18,13.174V17z">
                            </path>
                        </svg></span><span class="text-lg">LinkedIn</span></a><a
                    class="flex items-center space-x-2 text-zinc-500 font-medium hover:text-zinc-800 relative after:absolute after:-bottom-1 after:left-0 after:w-full after:h-0.5 after:bg-zinc-800 after:transition-all after:duration-300 after:ease-in-out after:transform after:scale-x-0 hover:after:scale-x-100 after:origin-left"
                    href="https://threads.net/thanhtrungit307"><span class="text-2xl"><svg
                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                            viewBox="0 0 50 50">
                            <path
                                d="M46,9v32c0,2.757-2.243,5-5,5H9c-2.757,0-5-2.243-5-5V9c0-2.757,2.243-5,5-5h32C43.757,4,46,6.243,46,9z M33.544,35.913	c2.711-2.708,2.635-6.093,1.746-8.17c-0.54-1.255-1.508-2.33-2.798-3.108l-0.223-0.138c-0.33-0.208-0.609-0.375-1.046-0.542	c-0.008-0.278-0.025-0.556-0.058-0.807c-0.59-4.561-3.551-5.535-5.938-5.55c-2.154,0-3.946,0.92-5.044,2.592l1.672,1.098	c0.736-1.121,1.871-1.689,3.366-1.689c2.367,0.015,3.625,1.223,3.96,3.801c-1.141-0.231-2.426-0.314-3.807-0.233	c-3.924,0.226-5.561,2.591-5.442,4.836c0.134,2.486,2.278,4.222,5.216,4.222c0.13,0,0.259-0.003,0.384-0.011	c2.297-0.126,5.105-1.29,5.61-6.063c0.021,0.013,0.041,0.026,0.062,0.039l0.253,0.157c0.932,0.562,1.621,1.317,1.994,2.185	c0.643,1.501,0.682,3.964-1.322,5.966c-1.732,1.73-3.812,2.479-6.936,2.502c-3.47-0.026-6.099-1.145-7.812-3.325	c-1.596-2.028-2.42-4.953-2.451-8.677c0.031-3.728,0.855-6.646,2.451-8.673c1.714-2.181,4.349-3.299,7.814-3.325	c3.492,0.026,6.165,1.149,7.944,3.338c0.864,1.063,1.525,2.409,1.965,3.998l1.928-0.532c-0.514-1.858-1.301-3.449-2.341-4.728	c-2.174-2.674-5.363-4.045-9.496-4.076c-4.12,0.031-7.278,1.406-9.387,4.089c-1.875,2.383-2.844,5.712-2.879,9.91	c0.035,4.193,1.004,7.529,2.879,9.913c2.109,2.682,5.262,4.058,9.385,4.088C28.857,38.973,31.433,38.021,33.544,35.913z M28.993,25.405c0.07,0.016,0.138,0.031,0.202,0.046c-0.005,0.078-0.01,0.146-0.015,0.198c-0.314,3.928-2.295,4.489-3.761,4.569	c-0.091,0.005-0.181,0.008-0.271,0.008c-1.851,0-3.144-0.936-3.218-2.329c-0.065-1.218,0.836-2.576,3.561-2.732	c0.297-0.018,0.589-0.027,0.875-0.027C27.325,25.137,28.209,25.227,28.993,25.405z">
                            </path>
                        </svg></span><span class="text-lg">Threads</span></a>
                <div class="flex items-center gap-2 text-zinc-500"><span class="text-2xl"><svg
                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path
                                d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z">
                            </path>
                        </svg></span>
                    <p class="text-lg"><a
                            class="flex items-center space-x-2 text-zinc-500 font-medium hover:text-zinc-800 relative after:absolute after:-bottom-1 after:left-0 after:w-full after:h-0.5 after:bg-zinc-800 after:transition-all after:duration-300 after:ease-in-out after:transform after:scale-x-0 hover:after:scale-x-100 after:origin-left"
                            href="https://www.facebook.com/thanhtrungit97"><span class="text-lg">Thành Trung</span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection