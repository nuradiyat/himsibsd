<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">\
    <link rel="icon" type="image/png" href="https://himsiubsi.my.id/images/himsi.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>divisi</title>
</head>

<body class="bg-gray-900 text-justify">

    {{-- structure organizasi --}}
    <div class="py-8 sm:py-16 lg:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 space-y-4 text-center sm:mb-16 lg:mb-24">
                <h2 class="text-base-content text-2xl font-semibold md:text-3xl lg:text-4xl">
                    <span class="relative z-1 font-bold">
                        Meet
                        <span
                            class="from-primary absolute start-0 bottom-1 -z-1 h-0.5 w-full bg-gradient-to-r to-transparent to-80%"
                            aria-hidden="true"></span>
                    </span>
                    Our Team
                </h2>
                <p class="text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">
                    Tim yang bergerak bersama untuk menciptakan program, kegiatan, dan dampak positif bagi Mahasiswa.
                </p>
            </div>
            <!-- Team Members -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-6 lg:gap-y-10 xl:grid-cols-4">
                <!-- Members -->
                <div class="card bg-gray-900 card-border hover:border-primary h-max shadow-none">
                    <figure class="bg-base-200 pt-6">
                        <img src="https://cdn.flyonui.com/fy-assets/blocks/marketing-ui/team/team-6.png"
                            alt="Phillip Bothman" class="h-60 w-auto" />
                    </figure>
                    <div class="card-body gap-3">
                        <h3 class="text-base-content text-lg font-medium">Phillip Bothman</h3>
                        <div class="divider"></div>
                        <div>
                            <p class="text-base-content mb-1 font-medium">Founder & CEO</p>
                            <p class="text-base-content/80">A visionary leader driving innovation and collaboration.
                            </p>
                        </div>
                        <div class="card-actions h-5 gap-3">
                            <a href="#" class="text-accent"><span
                                    class="icon-[tabler--brand-linkedin] size-5.5"></span></a>
                            <a href="#" class="text-primary">
                                <span class="icon-[fluent--document-pdf-16-filled] size-5.5"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
