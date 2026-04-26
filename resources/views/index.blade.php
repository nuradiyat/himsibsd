<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Himsi - Himpunan Mahasiswa Sistem Informasi BSD</title>
    <link rel="icon" type="image/png" href="https://himsiubsi.my.id/images/himsi.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>


    <div class="bg-gray-900/83 text-justify">

        {{-- Hero section --}}
        <div class="">
            <header class="absolute inset-x-0 top-0 z-50">

                {{-- Navbar/Navigation --}}
                <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8 sticky top-0 absolute">
                    {{-- Logo --}}
                    <div class="flex lg:flex-1">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img src="https://himsiubsi.my.id/images/himsi.png" alt="" class="h-8 w-auto" />
                        </a>
                    </div>
                    <div class="flex lg:hidden">
                        <button type="button" command="show-modal" commandfor="mobile-menu"
                            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200">
                            <span class="sr-only">Open main menu</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6">
                                <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    {{-- Dektop Navigation links --}}
                    <div class="hidden lg:flex lg:gap-x-12 font-semibold text-white">
                        <ul class="menu md:menu-horizontal gap-2 p-0 text-base max-md:mt-2">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            {{-- dropdown links divisi --}}
                            <li
                                class="dropdown relative inline-flex [--auto-close:inside] [--offset:9] [--placement:bottom-end]">
                                <button id="dropdown-nav" type="button"
                                    class="dropdown-toggle dropdown-open:bg-base-content/10 dropdown-open:text-base-content"
                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    Divisi
                                    <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                                </button>
                                <ul class="dropdown-menu rounded-xl shadow-xl ring-1 ring-gray-400/10 dark:ring-white/10  dropdown-open:opacity-100 hidden"
                                    role="menu" aria-orientation="vertical" aria-labelledby="dropdown-nav">
                                    <li><a class="dropdown-item" href="#">Badan Pengurus Harian</a></li>
                                    <li><a class="dropdown-item" href="#">Rekrutmen Sumber Daya Manusia</a></li>
                                    <li><a class="dropdown-item" href="#">Pendidikan</a></li>
                                    <li><a class="dropdown-item" href="#">Penelitian dan Pengembangan</a></li>
                                    <li><a class="dropdown-item" href="#">Komunikasi Dan Informasi</a></li>
                                </ul>
                            </li>
                            {{-- dropdown links proker --}}
                            <li
                                class="dropdown relative inline-flex [--auto-close:inside] [--offset:9] [--placement:bottom-end]">
                                <button id="dropdown-nav" type="button"
                                    class="dropdown-toggle dropdown-open:bg-base-content/10 dropdown-open:text-base-content"
                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    Proker
                                    <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                                </button>
                                <ul class="dropdown-menu  rounded-xl shadow-xl ring-1 ring-gray-400/10 dark:ring-white/10  dropdown-open:opacity-100 hidden"
                                    role="menu" aria-orientation="vertical" aria-labelledby="dropdown-nav">
                                    <li><a class="dropdown-item" href="#">Kelas Coding</a></li>
                                    <li><a class="dropdown-item" href="#">Figma designs</a></li>
                                    <li><a class="dropdown-item" href="#">Workshops</a></li>
                                    <li><a class="dropdown-item" href="#">Open Recruitment</a></li>
                                    <li><a class="dropdown-item" href="#">Lomba</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Kabinet</a></li>
                            <li><a href="#">AI Himsi</a></li>
                        </ul>
                    </div>
                    {{-- Login --}}
                    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                        <a href="#" class="text-sm/6 font-semibold text-white">Log in <span
                                aria-hidden="true">&rarr;</span></a>
                    </div>
                </nav>

                {{-- Mobile menu --}}
                <el-dialog>
                    <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
                        <div tabindex="0" class="fixed inset-0 focus:outline-none">
                            <el-dialog-panel
                                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto  p-6 sm:max-w-sm sm:ring-1">
                                <div class="flex items-center justify-between">
                                    <a href="#" class="-m-1.5 p-1.5">
                                        <span class="sr-only">Your Company</span>
                                        <img src="img/himsi.png" alt="" class="h-8 w-auto" />
                                    </a>
                                    {{-- Close button --}}
                                    <button type="button" command="close" commandfor="mobile-menu"
                                        class="-m-2.5 rounded-md p-2.5 text-gray-200">
                                        <span class="sr-only">Close menu</span>
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                {{-- Sidebar/Navigation link mobile --}}
                                <div class="divide-y mt-7 flow-root">
                                    {{-- Navigation links --}}
                                    <div class="pt-4 pb-6 font-semibold text-white">
                                        <ul class="menu p-0">
                                            <li>
                                                <a href="#">
                                                    <span class="overlay-minified:hidden">Home</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="overlay-minified:hidden">Account</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="overlay-minified:hidden">Notifications</span>
                                                </a>
                                            </li>
                                            <li
                                                class="dropdown relative [--adaptive:none] [--strategy:static] overlay-minified:[--adaptive:adaptive] overlay-minified:[--strategy:fixed] overlay-minified:[--offset:15] overlay-minified:[--trigger:hover] overlay-minified:[--placement:right-start]">
                                                <button id="dropdown-default" type="button"
                                                    class="dropdown-toggle flex items-center justify-between"
                                                    aria-haspopup="menu" aria-expanded="false"
                                                    aria-label="Dropdown flex items-center justify-between">
                                                    {{-- <span class="icon-[tabler--apps] size-5"></span> --}}
                                                    <span class="overlay-minified:hidden">Apps</span>
                                                    <span
                                                        class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4 overlay-minified:hidden"></span>
                                                </button>
                                                <ul class="dropdown-menu mt-0 shadow-none overlay-minified:shadow-md overlay-minified:shadow-base-300/20 dropdown-open:opacity-100 hidden min-w-60 overlay-minified:before:absolute        overlay-minified:before:top-0 overlay-minified:before:h-full overlay-minified:before:w-4 before:bg-transparent"
                                                    role="menu" aria-orientation="vertical"
                                                    aria-labelledby="dropdown-default">
                                                    <li>
                                                        <a href="#">
                                                            Email
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Calendar
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="overlay-minified:hidden">Notifications</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    {{-- Login --}}
                                    <div class="pt-4 pb-6 font-semibold text-white">
                                        <ul class="menu p-0">
                                            <li class="">
                                                <a href="#" class="overlay-minified:hidden">Log in
                                                    <span aria-hidden="true">&rarr;</span></a>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </el-dialog-panel>
                        </div>
                    </dialog>
                </el-dialog>
            </header>

            {{-- Hero section content --}}
            <div class="relative isolate px-6 pt-14 lg:px-8">
                {{-- Gradient background --}}
                <div aria-hidden="true"
                    class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-60">
                    <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                        class="relative left-[calc(50%-8rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75">
                    </div>
                </div>
                {{-- Hero content --}}
                <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                    <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                        <div
                            class="relative rounded-full px-3 py-1 text-sm/6 text-gray-400 ring-1 ring-white/10 hover:ring-white/20">
                            Selamat Datang di
                            <a href="#about" class="font-semibold text-indigo-400"><span aria-hidden="true"
                                    class="absolute inset-0"></span>Read more <span
                                    aria-hidden="true">&rarr;</span></a>
                        </div>
                    </div>
                    <div class="text-center">
                        <h1 class="text-4xl font-semibold tracking-tight text-balance text-white sm:text-6xl">Himpunan
                            Mahasiswa Sistem Informasi</h1>
                        <p class="mt-8 text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">Bangun pengalaman
                            yang
                            bermakna, kembangkan potensi diri, dan berikan dampak positif bagi masyarakat.</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="#"
                                class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Daftar</a>
                            <a href="#" class="text-sm/6 font-semibold text-white">Learn more <span
                                    aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>
                <div aria-hidden="true"
                    class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                    <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                        class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75">
                    </div>
                </div>
            </div>
        </div>


        {{-- How it works --}}
        <div class="overflow-hidden py-24 sm:py-32 dark:">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div
                    class="mx-auto grid max-w-2xl grid-cols-1 gap-x-40 gap-y-16 sm:gap-x-30  sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pt-4 lg:pr-8">
                        <div class="lg:max-w-lg">
                            <h3
                                class="text-3xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">
                                Apa Itu Himsi</h3>
                            <p class="mt-5 text-base  text-justify text-gray-700 dark:text-gray-300 lg:text-lg/7">
                                Himpunan
                                Mahasiswa Sistem Informasi
                                atau disingkat dengan HIMSI adalah organisasi mahasiswa yang mewadahi mahasiswa program
                                studi sistem informasi universitas bina sarana informatika.</p>
                            <dl class="mt-10 max-w-xl space-y-8 text-gray-600 lg:max-w-none dark:text-gray-400">
                                <dl
                                    class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                                    <div class="relative pl-16">
                                        <dt class="text-lg/7 font-semibold text-gray-900 dark:text-white">
                                            <div
                                                class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600 dark:bg-indigo-500">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" data-slot="icon" aria-hidden="true"
                                                    class="size-6 text-white">
                                                    <path
                                                        d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            Visi
                                        </dt>
                                        <p class=""></p>
                                        <p
                                            class="mt-2 text-justify text-sm text-gray-700 dark:text-gray-300 lg:text-base">
                                            Menjadikan HIMSI sebagai Himpunan yang kreatif, kompetitif, bertanggung
                                            jawab,
                                            dan berwawasan global.
                                        </p>
                                    </div>
                                    <div class="relative pl-16">
                                        <dt class="text-lg/7 font-semibold text-gray-900 dark:text-white">
                                            <div
                                                class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600 dark:bg-indigo-500">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" data-slot="icon" aria-hidden="true"
                                                    class="size-6 text-white">
                                                    <path
                                                        d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            Misi
                                        </dt>
                                        <p
                                            class="mt-2 text-justify text-sm text-gray-700 dark:text-gray-300 lg:text-base">
                                            Berkontribusi dalam bidang Sistem Informasi, membentuk mahasiswa
                                            berprestasi,
                                            menanamkan disiplin, solidaritas, serta menjalin kerja sama.
                                        </p>
                                    </div>
                                </dl>
                            </dl>
                        </div>
                    </div>
                    {{-- <img width="243" height="144" src="https://himsiubsi.my.id/images/himsi.png"
                        alt="Product screenshot"
                        class="w-3xs max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 not-dark:hidden sm:w-200 md:-ml-4 lg:-ml-0 dark:ring-white/10" /> --}}
                    <img src="https://himsiubsi.my.id/images/himsi.png" alt="Logo HIMSI"
                        class="w-64 m-auto rounded-xl shadow-xl ring-1 ring-gray-400/10 dark:ring-white/10 sm:mx-auto lg:w-lg" />
                </div>
            </div>
        </div>

        {{-- statistik --}}
        <div class=" py-24 sm:py-32">
            <div
                class="mx-auto max-w-7xl px-6 lg:px-8 bg-gradient-to-r from-slate-900 via-blue-950 to-slate-900 rounded-2xl p-10">
                <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                    <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                        <dt class="text-base/7 text-gray-400">Transactions every 24 hours</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">44 million
                        </dd>
                    </div>
                    <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                        <dt class="text-base/7 text-gray-400">Assets under holding</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">$119
                            trillion
                        </dd>
                    </div>
                    <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                        <dt class="text-base/7 text-gray-400">New users annually</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">46,000
                        </dd>
                    </div>
                </dl>
            </div>
        </div>


        {{-- Divisi --}}
        <div class="py-8 sm:py-16 lg:py-24 lg:px-8">
            <div class="mb-12 space-y-4 text-center sm:mb-16 lg:mb-24">
                <h2 class="text-base-content text-2xl font-semibold md:text-3xl lg:text-4xl">
                    <span class="relative z-1 font-bold">
                        Our
                        <span
                            class="from-primary absolute start-0 bottom-1 -z-1 h-0.5 w-full bg-gradient-to-r to-transparent to-80%"
                            aria-hidden="true"></span>
                    </span>
                    Divisi
                </h2>
                <p class="text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">
                    Divisi yang bergerak bersama untuk menciptakan program, kegiatan, dan dampak positif bagi Mahasiswa.
                </p>
            </div>
            {{-- Team division --}}
            <!-- Icon Blocks -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 items-center gap-12">
                    <!-- Icon Block -->
                    <div class="text-center card  p-6 shadow-2xl ring-gray-950 bg-gray-900">
                        <div
                            class="flex justify-center items-center size-12 bg-muted border border-line-2 rounded-full mx-auto">
                            <svg class="shrink-0 size-5 text-muted-foreground-2" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect width="10" height="14" x="3" y="8" rx="2" />
                                <path d="M5 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2h-2.4" />
                                <path d="M8 18h.01" />
                            </svg>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-foreground">Responsive</h3>
                            <p class="mt-1 text-muted-foreground-2">Responsive, and mobile-first project on the web</p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="text-center card  p-6 shadow-2xl ring-gray-950/5 bg-gray-900">
                        <div
                            class="flex justify-center items-center size-12 bg-muted border border-line-2 rounded-full mx-auto">
                            <svg class="shrink-0 size-5 text-muted-foreground-2" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 7h-9" />
                                <path d="M14 17H5" />
                                <circle cx="17" cy="17" r="3" />
                                <circle cx="7" cy="7" r="3" />
                            </svg>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-foreground">Customizable</h3>
                            <p class="mt-1 text-muted-foreground-2">Components are easily customized and extendable</p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="text-center card  p-6 shadow-2xl ring-gray-950/5 bg-gray-900">
                        <div
                            class="flex justify-center items-center size-12 bg-muted border border-line-2 rounded-full mx-auto">
                            <svg class="shrink-0 size-5 text-muted-foreground-2" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-foreground">Documentation</h3>
                            <p class="mt-1 text-muted-foreground-2">Every component and plugin is well documented</p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="text-center card  p-6 shadow-2xl ring-gray-950/5 bg-gray-900">
                        <div
                            class="flex justify-center items-center size-12 bg-muted border border-line-2 rounded-full mx-auto">
                            <svg class="shrink-0 size-5 text-muted-foreground-2" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z" />
                                <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1" />
                            </svg>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-foreground">24/7 Support</h3>
                            <p class="mt-1 text-muted-foreground-2">Contact us 24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                </div>
            </div>
            <!-- End Icon Blocks -->
            {{-- <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <div class="card glass text-white sm:max-w-sm">
                    <figure><img
                            src="https://img.freepik.com/vektor-premium/desain-logo-sekolah-pendidikan_586739-1335.jpg"
                            alt="iphones" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title mb-2.5 text-white">Smartphone</h2>
                        <div class="divider"></div>
                        <p class="mb-4">A high-quality smartphone with the latest features for a premium user
                            experience.
                        </p>
                        <div class="card-actions">
                            <button class="btn btn-warning">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

        {{-- Gallery --}}
        <div class="py-24 sm:py-32">
            <div class="mb-12 space-y-4 text-center sm:mb-16 lg:mb-24">
                <h2 class="text-base-content text-2xl font-semibold md:text-3xl lg:text-4xl">
                    <span class="relative z-1 font-bold">
                        Explore our
                        <span
                            class="from-primary absolute start-0 bottom-1 -z-1 h-0.5 w-full bg-gradient-to-r to-transparent to-80%"
                            aria-hidden="true"></span>
                    </span>
                    Gallery
                </h2>
                <p class="text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">
                    Explore our gallery to learn more about our amazing products and their features.
                </p>
            </div>
            <div id="horizontal-thumbnails" data-carousel='{ "loadingClasses": "opacity-0" }'
                class="relative mx-auto max-w-7xl px-3.5 sm:px-6 lg:px-8">
                {{-- bagian border mau di ilangin rounded-none --}}
                <div class="carousel">
                    <div class="carousel-body h-3/4 opacity-0">
                        <!-- Slide 1 -->
                        <div class="carousel-slide">
                            <div class="flex size-full justify-center">
                                <img src="https://customer-api-files.s3.ap-southeast-3.amazonaws.com/production/article_banner/2025/4/10/FTc9ijmfTKKiBWnY0aGl66vXdVRV3NXCMvOqcVBU.webp"
                                    class="size-full object-cover" alt="mountain" />
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="carousel-slide">
                            <div class="flex size-full justify-center">
                                <img src="https://png.pngtree.com/background/20230528/original/pngtree-an-anime-anime-girl-wearing-a-hood-with-the-leaves-in-picture-image_2779557.jpg"
                                    class="size-full object-cover" alt="sand" />
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="carousel-slide">
                            <div class="flex size-full justify-center">
                                <img src="https://img.buzzfeed.com/buzzfeed-static/static/2024-06/1/15/asset/bb36008c8025/sub-buzz-8947-1717257505-1.jpg"
                                    class="size-full object-cover" alt="cloud" />
                            </div>
                        </div>
                    </div>
                    <div
                        class="carousel-pagination bg-base-100 absolute bottom-0 end-0 start-0 z-1 h-1/4 gap-2 flex justify-center gap-2 overflow-x-auto pt-2">
                        <img src="https://customer-api-files.s3.ap-southeast-3.amazonaws.com/production/article_banner/2025/4/10/FTc9ijmfTKKiBWnY0aGl66vXdVRV3NXCMvOqcVBU.webp"
                            class="carousel-pagination-item carousel-active:opacity-100 grow object-cover opacity-30"
                            alt="mountain" />
                        <img src="https://png.pngtree.com/background/20230528/original/pngtree-an-anime-anime-girl-wearing-a-hood-with-the-leaves-in-picture-image_2779557.jpg"
                            class="carousel-pagination-item carousel-active:opacity-100 grow object-cover opacity-30"
                            alt="sand" />
                        <img src="https://img.buzzfeed.com/buzzfeed-static/static/2024-06/1/15/asset/bb36008c8025/sub-buzz-8947-1717257505-1.jpg"
                            class="carousel-pagination-item carousel-active:opacity-100 grow object-cover opacity-30"
                            alt="cloud" />
                    </div>
                    <!-- Previous Slide -->
                    <button type="button"
                        class="carousel-prev start-5 max-sm:start-3 carousel-disabled:opacity-50 size-4.5 lg:size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow-base-300/20 shadow-sm">
                        <span class="icon-[tabler--chevron-left] size-5 cursor-pointer"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <!-- Next Slide -->
                    <button type="button"
                        class="carousel-next end-5 max-sm:end-3 carousel-disabled:opacity-50 size-4.5 lg:size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow-base-300/20 shadow-sm">
                        <span class="icon-[tabler--chevron-right] size-5"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
        </div>

        {{-- gallery auto play
        <div class="py-24 sm:py-32">
            <div class="mb-12 space-y-4 text-center sm:mb-16 lg:mb-24">
                <h2 class="text-base-content text-2xl font-semibold md:text-3xl lg:text-4xl">
                    <span class="relative z-1 font-bold">
                        Explore our
                        <span
                            class="from-primary absolute start-0 bottom-1 -z-1 h-0.5 w-full bg-gradient-to-r to-transparent to-80%"
                            aria-hidden="true"></span>
                    </span>
                    Gallery
                </h2>
                <p class="text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">
                    Explore our gallery to learn more about our amazing products and their features.
                </p>
            </div>
            <div id="auto-play" data-carousel='{ "loadingClasses": "opacity-0", "isAutoPlay": true, "speed": 1500 }'
                class="relative w-full">
                <div class="carousel h-80">
                    <div class="carousel-body opacity-0 h-full">
                        <!-- Slide 1 -->
                        <div class="carousel-slide">
                            <div class="bg-base-200/60 flex h-full justify-center p-6">
                                <span class="self-center text-2xl sm:text-4xl">First slide</span>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="carousel-slide">
                            <div class="bg-base-200/80 flex h-full justify-center p-6">
                                <span class="self-center text-2xl sm:text-4xl">Second slide</span>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="carousel-slide">
                            <div class="bg-base-200 flex h-full justify-center p-6">
                                <span class="self-center text-2xl sm:text-4xl">Third slide</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Previous Slide -->
                <button type="button"
                    class="carousel-prev start-5 max-sm:start-3 carousel-disabled:opacity-50 size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow-base-300/20 shadow-sm">
                    <span class="icon-[tabler--chevron-left] size-5 cursor-pointer"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <!-- Next Slide -->
                <button type="button"
                    class="carousel-next end-5 max-sm:end-3 carousel-disabled:opacity-50 size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow-base-300/20 shadow-sm">
                    <span class="icon-[tabler--chevron-right] size-5"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div> --}}

        {{-- Pendaftaran --}}
        <div class="py-8 sm:py-16 lg:py-24">
            {{-- judul --}}
            <div class="mb-12 space-y-4 text-center sm:mb-16 lg:mb-24">
                <h2 class="text-base-content text-2xl font-semibold md:text-3xl lg:text-4xl">
                    <span class="relative z-1 font-bold">
                        Timeline
                        <span
                            class="from-primary absolute start-0 bottom-1 -z-1 h-0.5 w-full bg-gradient-to-r to-transparent to-80%"
                            aria-hidden="true"></span>
                    </span>
                    Pendaftaran HIMSI UBSI BSD
                </h2>
                <p class="text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">
                    Timeline kegiatan pendaftaran anggota baru HIMSI UBSI BSD
                </p>
            </div>

            {{-- timeline --}}
            <div class="flex align-items justify-center content-center">
                <ul class="timeline timeline-snap-icon timeline-compact timeline-vertical w-auto">
                    <span class="text-sm">April 1, 2024</span>
                    <!-- timeline item 1-->
                    <li>
                        <div class="timeline-middle">
                            <span class="bg-primary/20 flex size-4.5 items-center justify-center rounded-full">
                                <span class="badge badge-primary size-3 rounded-full p-0"></span>
                            </span>
                        </div>
                        <div class="timeline-end ms-2 m-3 w-full rounded-lg">
                            <div class="text-base-content pt-0.5 mb-3 font-medium">12 Invoices have been paid</div>
                            <p class="mb-2">Invoices have been paid to the company</p>
                            <button class="btn btn-sm btn-soft btn-secondary">
                                <span class="icon-[tabler--file-type-pdf] text-error"></span>
                                templatecv.pdf
                            </button>
                        </div>
                        <hr />
                    </li>
                    <!-- /timeline item 1-->
                    <span class="mt-2 text-sm">March 31, 2024</span>
                    <!-- timeline item 2-->
                    <li>
                        <div class="timeline-middle">
                            <span class="bg-success/20 flex size-4.5 items-center justify-center rounded-full">
                                <span class="badge badge-success size-3 rounded-full p-0"></span>
                            </span>
                        </div>
                        <div class="timeline-end ms-2 m-3 w-full rounded-lg">
                            <div class="text-base-content pt-0.5 mb-3 font-medium">Client meeting</div>
                            <p class="mb-2">Project meeting with john @10:15am</p>
                            <div class="flex gap-2">
                                <div class="avatar">
                                    <div class="size-8 rounded-full">
                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png"
                                            alt="User Avatar" />
                                    </div>
                                </div>
                                <div class="text-sm">
                                    <p class="font-medium">Lester McCarthy (Client)</p>
                                    <p>CEO of ThemeSelection</p>
                                </div>
                            </div>
                        </div>
                        <hr />
                    </li>
                    <!-- /timeline item 2-->
                    <span class="mt-2 text-sm">March 31, 2024</span>
                    <!-- timeline item 3-->
                    <li>
                        <div class="timeline-middle">
                            <span class="bg-info/20 flex size-4.5 items-center justify-center rounded-full">
                                <span class="badge badge-info size-3 rounded-full p-0"></span>
                            </span>
                        </div>
                        <div class="timeline-end ms-2 m-3 w-full rounded-lg">
                            <div class="text-base-content pt-0.5 mb-3 font-medium">Create a new project for client
                            </div>
                            <p class="mb-2">6 team members in a project</p>
                            <div class="avatar-group pull-up -space-x-4">
                                <div class="avatar">
                                    <div class="w-8">
                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png"
                                            alt="User Avatar" />
                                    </div>
                                </div>
                                <div class="avatar">
                                    <div class="w-8">
                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-2.png"
                                            alt="User Avatar" />
                                    </div>
                                </div>
                                <div class="avatar">
                                    <div class="w-8">
                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-4.png"
                                            alt="User Avatar" />
                                    </div>
                                </div>
                                <div class="avatar avatar-placeholder">
                                    <div class="bg-neutral text-neutral-content w-8">
                                        <span>+3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                    </li>
                    <!-- /timeline item 3-->
                </ul>
            </div>
        </div>

        {{-- testimonial --}}
        <div class="py-8 sm:py-16 lg:py-24">
            {{-- judul --}}
            <div class="mb-12 space-y-4 text-center sm:mb-16 lg:mb-24">
                <h2 class="text-base-content text-2xl font-semibold md:text-3xl lg:text-4xl">
                    <span class="relative z-1 font-bold">
                        Timeline
                        <span
                            class="from-primary absolute start-0 bottom-1 -z-1 h-0.5 w-full bg-gradient-to-r to-transparent to-80%"
                            aria-hidden="true"></span>
                    </span>
                    Pendaftaran HIMSI UBSI BSD
                </h2>
                <p class="text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">
                    Timeline kegiatan pendaftaran anggota baru HIMSI UBSI BSD
                </p>
            </div>
            {{-- carousel testimonial --}}
            <div class="py-8 sm:py-16 lg:py-24">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div id="multi-slide"
                        data-carousel='{ "loadingClasses": "opacity-0", "slidesQty": { "xs": 1, "md": 2 } }'
                        class="relative flex w-full gap-12 max-lg:flex-col md:gap-16 lg:items-center lg:gap-24">
                        <div>
                            <div class="space-y-4">
                                <p class="text-primary text-sm font-medium uppercase">Real Customers</p>
                                <h2 class="text-base-content text-2xl font-semibold md:text-3xl lg:text-4xl">Customers
                                    Feedback
                                </h2>
                                <p class="text-base-content/80 text-xl">From career changes to dream jobs, here's how
                                    FlyonUI
                                    helped.</p>
                            </div>
                            <div class="mt-10 flex gap-4">
                                <button
                                    class="btn btn-square btn-sm carousel-prev btn-primary carousel-disabled:opacity-100 carousel-disabled:btn-outline relative hover:text-white"
                                    disabled="disabled">
                                    <span class="icon-[tabler--arrow-left] size-5"></span>
                                </button>
                                <button
                                    class="btn btn-square btn-sm carousel-next btn-primary carousel-disabled:opacity-100 carousel-disabled:btn-outline relative hover:text-white">
                                    <span class="icon-[tabler--arrow-right] size-5"></span>
                                </button>
                            </div>
                        </div>
                        <div class="carousel rounded-box">
                            <div class="carousel-body gap-6 opacity-0">
                                <!-- Slide 1 -->
                                <div class="carousel-slide">
                                    <div
                                        class="card card-border hover:border-primary transition-border h-full shadow-none duration-300">
                                        <!-- Star Rating -->
                                        <div class="card-body gap-5">
                                            <!-- User Info -->
                                            <div class="flex items-center gap-3">
                                                <div class="avatar">
                                                    <div class="size-10 rounded-full">
                                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-17.png"
                                                            alt="Craig Bator" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <h4 class="text-base-content font-medium">Craig Bator</h4>
                                                    <p class="text-base-content/80 text-sm">
                                                        CEO & Co Founder at
                                                        <span class="text-base-content font-semibold">Zendesk</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex gap-1">
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                            </div>
                                            <!-- Content -->
                                            <p class="text-base-content/80">
                                                FlyonUI has made designing my web applications effortless. The
                                                components
                                                are
                                                easy to customize and
                                                integrate seamlessly!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 2 -->
                                <div class="carousel-slide">
                                    <div
                                        class="card card-border hover:border-primary transition-border h-full shadow-none duration-300">
                                        <!-- Star Rating -->
                                        <div class="card-body gap-5">
                                            <!-- User Info -->
                                            <div class="flex items-center gap-3">
                                                <div class="avatar">
                                                    <div class="size-10 rounded-full">
                                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-5.png"
                                                            alt="Craig Bator" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <h4 class="text-base-content font-medium">Martin Dorwart</h4>
                                                    <p class="text-base-content/80 text-sm">
                                                        Product manager at
                                                        <span class="text-base-content font-semibold">Orbit</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex gap-1">
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                                <span
                                                    class="icon-[tabler--star-half-filled] text-warning size-6 shrink-0"></span>
                                            </div>
                                            <!-- Content -->
                                            <p class="text-base-content/80">
                                                With FlyonUI, I can easily track my investments and see how they.re
                                                performing
                                                in real-time.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 3 -->
                                <div class="carousel-slide">
                                    <div
                                        class="card card-border hover:border-primary transition-border h-full shadow-none duration-300">
                                        <!-- Star Rating -->
                                        <div class="card-body gap-5">
                                            <!-- User Info -->
                                            <div class="flex items-center gap-3">
                                                <div class="avatar">
                                                    <div class="size-10 rounded-full">
                                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-3.png"
                                                            alt="Alexandra Lee" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <h4 class="text-base-content font-medium">Alexandra Lee</h4>
                                                    <p class="text-base-content/80 text-sm">
                                                        Lead Developer at
                                                        <span class="text-base-content font-semibold">TechNova</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex gap-1">
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                            </div>
                                            <!-- Content -->
                                            <p class="text-base-content/80">
                                                FlyonUI's components saved us so much time! The responsive designs and
                                                intuitive
                                                interface made our
                                                development process faster and more efficient.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 4 -->
                                <div class="carousel-slide">
                                    <div
                                        class="card card-border hover:border-primary transition-border h-full shadow-none duration-300">
                                        <!-- Star Rating -->
                                        <div class="card-body gap-5">
                                            <!-- User Info -->
                                            <div class="flex items-center gap-3">
                                                <div class="avatar">
                                                    <div class="size-10 rounded-full">
                                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-12.png"
                                                            alt="Jason Wu" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <h4 class="text-base-content font-medium">Jason Wu</h4>
                                                    <p class="text-base-content/80 text-sm">
                                                        Product Designer at
                                                        <span class="text-base-content font-semibold">InnovateX</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex gap-1">
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                                <span
                                                    class="icon-[tabler--star-filled] text-warning size-6 shrink-0"></span>
                                            </div>
                                            <!-- Content -->
                                            <p class="text-base-content/80">
                                                FlyonUI’s design library helped us scale our UI design efforts while
                                                maintaining
                                                a consistent,
                                                professional look. Couldn’t have asked for a better tool!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- FAQ/Pertanyaan --}}
        <div class="py-8 sm:py-16 lg:py-24 text-lg ">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                {{-- FAQ --}}
                <div class="mb-12 space-y-4 text-center sm:mb-16 lg:mb-24">
                    <h2 class="text-base-content text-2xl font-semibold md:text-3xl lg:text-4xl">
                        <span class="relative z-1 font-bold">
                            FAQ
                            <span
                                class="from-primary absolute start-0 bottom-1 -z-1 h-0.5 w-full bg-gradient-to-r to-transparent to-80%"
                                aria-hidden="true"></span>
                        </span>
                    </h2>
                    <p class="text-gray-400 text-lg font-medium text-pretty sm:text-xl/8">
                        Jawaban atas pertanyaan yang sering diajukan
                    </p>
                </div>
                {{-- Jawaban --}}
                <div class="accordion divide-neutral/20 divide-y" data-accordion-always-open="">
                    <div class="accordion-item active" id="payment-always">
                        <button class="accordion-toggle inline-flex items-center gap-x-4 text-start"
                            aria-controls="payment-always-collapse" aria-expanded="true">
                            <span
                                class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                            <span
                                class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                            Bagaimana cara bergabung dengan HIMSI UBSI?
                        </button>
                        <div id="payment-always-collapse"
                            class="accordion-content w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="payment-always" role="region">
                            <div class="px-5 pb-4">
                                <p class="text-base-content/80 font-normal">
                                    Mahasiswa Sistem Informasi UBSI dapat bergabung melalui open recruitment yang
                                    diumumkan
                                    di media sosial atau website HIMSI.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="delivery-always">
                        <button class="accordion-toggle inline-flex items-center gap-x-4 text-start"
                            aria-controls="delivery-always-collapse" aria-expanded="false">
                            <span
                                class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                            <span
                                class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                            Siapa saja yang bisa menjadi anggota HIMSI?
                        </button>
                        <div id="delivery-always-collapse"
                            class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="delivery-always" role="region">
                            <div class="px-5 pb-4">
                                <p class="text-base-content/80 font-normal">
                                    Seluruh mahasiswa aktif Program Studi Sistem Informasi Universitas Bina Sarana
                                    Informatika.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="cancel-always">
                        <button class="accordion-toggle inline-flex items-center gap-x-4 text-start"
                            aria-controls="cancel-always-collapse" aria-expanded="false">
                            <span
                                class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                            <span
                                class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                            Ada berapa divisi di HIMSI UBSI?
                        </button>
                        <div id="cancel-alawys-collapse"
                            class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="cancel-alawys" role="region">
                            <div class="px-5 pb-4">
                                <p class="text-base-content/80 font-normal">
                                    HIMSI memiliki 4 divisi utama: Pendidikan (pengembangan akademik & ilmu
                                    pengetahuan),
                                    Kominfo (komunikasi & informasi), RSDM (pengembangan sumber daya mahasiswa), dan
                                    Litbang
                                    (penelitian & pengembangan organisasi).
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="cancel-always">
                        <button class="accordion-toggle inline-flex items-center gap-x-4 text-start"
                            aria-controls="cancel-always-collapse" aria-expanded="false">
                            <span
                                class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                            <span
                                class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                            Apa keuntungan menjadi anggota HIMSI?
                        </button>
                        <div id="cancel-alawys-collapse"
                            class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="cancel-alawys" role="region">
                            <div class="px-5 pb-4">
                                <p class="text-base-content/80 font-normal">
                                    Anggota dapat menyalurkan aspirasi, mengembangkan diri, memperluas relasi, serta
                                    berpartisipasi dalam kegiatan akademik maupun non-akademik.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="cancel-always">
                        <button class="accordion-toggle inline-flex items-center gap-x-4 text-start"
                            aria-controls="cancel-always-collapse" aria-expanded="false">
                            <span
                                class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                            <span
                                class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                            Apakah ada biaya untuk menjadi anggota HIMSI?
                        </button>
                        <div id="cancel-alawys-collapse"
                            class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="cancel-alawys" role="region">
                            <div class="px-5 pb-4">
                                <p class="text-base-content/80 font-normal">
                                    Tidak ada biaya pendaftaran, cukup mengikuti seleksi dan berkomitmen aktif dalam
                                    kegiatan HIMSI.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="cancel-always">
                        <button class="accordion-toggle inline-flex items-center gap-x-4 text-start"
                            aria-controls="cancel-always-collapse" aria-expanded="false">
                            <span
                                class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                            <span
                                class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                            Kegiatan apa saja yang diadakan oleh HIMSI?
                        </button>
                        <div id="cancel-alawys-collapse"
                            class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="cancel-alawys" role="region">
                            <div class="px-5 pb-4">
                                <p class="text-base-content/80 font-normal">
                                    HIMSI rutin mengadakan seminar, workshop, lomba, bakti sosial, dan kegiatan
                                    kebersamaan
                                    untuk mempererat solidaritas anggota.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Contact Section --}}
        <div class="py-8 sm:py-16 lg:py-24 px-4 sm:px-4">
            <div class="mx-auto max-w-7xl">
                <!-- Header -->
                <div class="mb-12 space-y-4 text-center sm:mb-16 lg:mb-24">
                    <h2 class="text-base-content text-2xl font-semibold md:text-3xl lg:text-4xl">
                        <span class="relative z-1 font-bold">
                            Contuct
                            <span
                                class="from-primary absolute start-0 bottom-1 -z-1 h-0.5 w-full bg-gradient-to-r to-transparent to-80%"
                                aria-hidden="true"></span>
                        </span>
                        Us
                    </h2>
                    <p class="text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">
                        Punya pertanyaan atau ingin terhubung dengan HIMSI? Jangan ragu untuk menghubungi kami.
                    </p>
                </div>

                {{-- Pesan --}}
                <div class="card-body grid gap-10 lg:grid-cols-7">
                    <!-- Form Section -->
                    <div class="lg:col-span-4">
                        <h2 class="text-base-content mb-6 text-3xl font-semibold">Book a Table</h2>
                        <form class="space-y-6" onsubmit="return false;">
                            <div class="gap-6">
                                <div class="w-full">
                                    <label class="label-text" for="username">Your Name</label>
                                    <div class="input input-lg">
                                        <input type="text" class="grow" placeholder="Enter your name here..."
                                            id="username" />
                                        <span
                                            class="icon-[tabler--user] text-base-content/80 size-5.5 my-auto ms-3 shrink-0"></span>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <label class="label-text" for="userphone">Your Email</label>
                                    <div class="input input-lg">
                                        <input type="email" class="grow" placeholder="Enter your email here..."
                                            id="userphone" />
                                        <span
                                            class="icon-[tabler--phone] text-base-content/80 size-5.5 my-auto ms-3 shrink-0"></span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="label-text" for="usermessage">Message</label>
                                <div class="textarea">
                                    <textarea class="grow resize-none" aria-label="Textarea" placeholder="Enter your message" id="usermessage"></textarea>
                                    <span
                                        class="icon-[tabler--message-circle-2] text-base-content/80 mx-4 mt-2 size-6 shrink-0"></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-gradient w-full">Book a
                                Reservation</button>
                        </form>
                    </div>
                    <!-- Contact Information -->
                    <div class="space-y-6 lg:col-span-3">
                        {{-- Maps --}}
                        <div class="border-base-content/20 rounded-box border p-6 text-center">
                            <h3 class="text-base-content text-xl font-semibold">Email/Phone</h3>
                            <p class="text-base-content/80 mb-3"> Beritahu kami apa yang Anda butuhkan </p>
                            <ul class="list-none mb-4 flex flex-col items-center gap-4">
                                <li>
                                    <a href="" target="_blank" rel="noopener noreferrer"
                                        class="text-base-content/80 flex items-center justify-center gap-1">
                                        <span class="icon-[tabler--brand-gmail] size-5"></span>
                                        himsibsd@gmail.com
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank" rel="noopener noreferrer"
                                        class="text-base-content/80 flex items-center justify-center gap-1">
                                        <span class="icon-[tabler--brand-whatsapp] size-5"></span>
                                        +62 812 3456 7890
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{-- Contact --}}
                        <div class="border-base-content/20 rounded-box border p-6 text-center">
                            <h3 class="text-base-content mb-4 text-xl font-semibold">Our Location</h3>
                            <p class="text-base-content/80">Office 149,</p>
                            <p class="text-base-content/80">450 South Brand Brooklyn</p>
                            <p class="text-base-content/80">San Diego County,</p>
                            <p class="text-base-content/80">CA 91905, USA</p>
                        </div>
                        {{-- c --}}
                        <p class="text-base-content text-center font-medium">
                            Opening Recrutment
                            <span class="text-primary">9AM - 11PM</span>
                            Everyday
                        </p>
                    </div>
                </div>

                {{-- <div class="grid items-center gap-12 lg:grid-cols-2">
                    <!-- Image Section -->
                    <img src="https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/contact/contact-8.png"
                        alt="Contact illustration" class="size-full" />
    
                    <!-- Contact Info Section -->
                    <div>
                        <!-- Section Title -->
                        <h3 class="text-base-content mb-6 text-2xl font-semibold">Happy to help you!</h3>
                        <p class="text-base-content/80 mb-10 text-lg font-medium">
                            FlyonUI gives you the blocks and components you need to create a truly professional website,
                            landing page or
                            admin panel for your SaaS and gives the blocks.
                        </p>
    
                        <!-- Contact Info Grid -->
                        <div class="grid gap-6 md:grid-cols-2">
                            <!-- Office Hours -->
                            <div class="card shadow-none">
                                <div class="card-body items-center gap-3">
                                    <div class="avatar avatar-placeholder">
                                        <div class="border-primary/20 text-primary w-9 rounded-full border">
                                            <span class="icon-[tabler--clock] text-primary size-6"></span>
                                        </div>
                                    </div>
                                    <h4 class="text-base-content text-lg font-medium">Office Hours</h4>
                                    <div class="text-center">
                                        <p class="text-base-content/80">Monday-Friday</p>
                                        <p class="text-base-content/80">8:00 am to 5:00 pm</p>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Our Address -->
                            <div class="card shadow-none">
                                <div class="card-body items-center gap-3">
                                    <div class="avatar avatar-placeholder">
                                        <div class="border-primary/20 text-primary w-9 rounded-full border">
                                            <span class="icon-[tabler--map-pin] text-primary size-6"></span>
                                        </div>
                                    </div>
                                    <h4 class="text-base-content text-lg font-medium">Our Address</h4>
                                    <address class="text-base-content/80 text-center not-italic">
                                        802 Pension Rd,Maine
                                        <br />
                                        96812, USA
                                    </address>
                                </div>
                            </div>
    
                            <!-- Office 2 -->
                            <div class="card shadow-none">
                                <div class="card-body items-center gap-3">
                                    <div class="avatar avatar-placeholder">
                                        <div class="border-primary/20 text-primary w-9 rounded-full border">
                                            <span class="icon-[tabler--briefcase] text-primary size-6"></span>
                                        </div>
                                    </div>
                                    <h4 class="text-base-content text-lg font-medium">Office 2</h4>
                                    <address class="text-base-content/80 text-center not-italic">
                                        802 Pension Rd,Maine
                                        <br />
                                        96812, USA
                                    </address>
                                </div>
                            </div>
    
                            <!-- Get in Touch -->
                            <div class="card shadow-none">
                                <div class="card-body items-center gap-3">
                                    <div class="avatar avatar-placeholder">
                                        <div class="border-primary/20 text-primary w-9 rounded-full border">
                                            <span class="icon-[tabler--phone] text-primary size-6"></span>
                                        </div>
                                    </div>
                                    <h4 class="text-base-content text-lg font-medium">Get in Touch</h4>
                                    <div class="text-center">
                                        <p class="text-base-content/80">+1-316-688-5685</p>
                                        <p class="text-base-content/80">+1-316-477-0169</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

        {{-- Footer --}}
        <footer>
            <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 sm:py-6 lg:px-8 lg:py-8">
                <div class="flex items-center justify-between gap-3 max-md:flex-col">
                    <div class="text-base-content flex items-center gap-3 text-xl font-bold">
                        <img src="https://cdn.flyonui.com/fy-assets/logo/logo.png" class="size-8" alt="brand-logo" />
                        <span>FlyonUI</span>
                    </div>
                    <!-- Navigation -->
                    <nav class="flex items-center gap-6">
                        <a href="#" class="link link-animated text-base-content/80 font-medium">About</a>
                        <a href="#" class="link link-animated text-base-content/80 font-medium">Features</a>
                        <a href="#" class="link link-animated text-base-content/80 font-medium">Works</a>
                        <a href="#" class="link link-animated text-base-content/80 font-medium">Career</a>
                    </nav>
                    <!-- Social Icons -->
                    <div class="text-base-content flex h-5 gap-4">
                        <a href="#" aria-label="Facebook">
                            <span class="icon-[tabler--brand-facebook] size-5"></span>
                        </a>
                        <a href="#" aria-label="Instagram">
                            <span class="icon-[tabler--brand-instagram] size-5"></span>
                        </a>
                        <a href="#" aria-label="Twitter">
                            <span class="icon-[tabler--brand-x] size-5"></span>
                        </a>
                        <a href="#" aria-label="Github">
                            <span class="icon-[tabler--brand-github] size-5"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
                <div class="text-base-content text-center text-base">
                    &copy;2024
                    <a href="" class="text-primary">FlyonUI</a>
                    ,
                    <br class="md:hidden" />
                    Made With ❤ for a better web.
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
