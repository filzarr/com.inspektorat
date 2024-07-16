<div
    class=" px-[8px] sm:px-[16px]  md:px-[32px] lg:px-[64px] xl:px-[128px] bg-transparent fixed top-5 z-10 left-0 right-0">
    <nav class="flex justify-between items-center p-4 rounded-lg   transition-all duration-100 ease-in hover:bg-white      shadow-md"
        id="navbar">
        <a href="/" class="flex gap-2 items-center" id="nav-logo">
            <img src="{{ url('logo_inspektorat.png') }}" class="h-[30px] w-[30px] lg:h-[50px] lg:w-[50px]"
                alt="Logo Inspektorat Provinsi Sumatera Utara">
            <div class=" space-y-0">
                <p class=" font-bold text-[#322C2B] text-sm lg:text-base">Inspektorat</p>
                <p class="font-bold text-[#322C2B] text-sm lg:text-base">Provinsi Sumatera Utara</p>
            </div>
        </a>
        <div class="hidden xl:flex gap-[32px] text-base text-[#646463]">
            <a href="/" class="font-bold {{ Request::is('/') ? 'text-[#214E6D]' : '' }}">
                Home
            </a>
            <div class="font-bold group relative">
                Profile
                <div
                    class=" text-[12px] border-2 left-0 z-10 shadow-md border-[#d1d1d1] border-collapse hidden group-hover:flex absolute flex-col min-w-[200px] bg-white">
                    @foreach ($profile as $item)
                        <a href="/menu/{{ $item->slug }}"
                            class="lowercase px-4 py-2  border-b-2 border-[#d1d1d1] hover:border-[#214E6D] hover:bg-[#214E6D] transition-all duration-75 ease-in hover:text-white border-collapse {{ Request::is('menu/' . $item->slug) ? 'border-[#214E6D] active  bg-[#214E6D] transition-all duration-75 ease-in  text-white' : '' }}">{{ $item->judul }}</a>
                    @endforeach
                </div>
            </div>
            <div class="font-bold group relative">
                Gratifikasi
                <div
                    class=" text-[12px] border-2 left-0 z-10 shadow-md border-[#d1d1d1] border-collapse hidden group-hover:flex absolute flex-col min-w-[200px] bg-white">
                    @foreach ($gratifikasi as $item)
                        <a href="/menu/{{ $item->slug }}"
                            class="lowercase px-4 py-2  border-b-2 border-[#d1d1d1] hover:border-[#214E6D] hover:bg-[#214E6D] transition-all duration-75 ease-in hover:text-white border-collapse {{ Request::is('menu/' . $item->slug) ? 'border-[#214E6D] active  bg-[#214E6D] transition-all duration-75 ease-in  text-white' : '' }}">{{ $item->judul }}</a>
                    @endforeach
                </div>
            </div>
            <div class="font-bold group relative">
                Program
                <div
                    class=" text-[12px] border-2 left-0 z-10 shadow-md border-[#d1d1d1] border-collapse hidden group-hover:flex absolute flex-col min-w-[200px] bg-white">
                    @foreach ($program as $item)
                        <a href="/menu/{{ $item->slug }}"
                            class="lowercase px-4 py-2  border-b-2 border-[#d1d1d1] hover:border-[#214E6D] hover:bg-[#214E6D] transition-all duration-75 ease-in hover:text-white border-collapse {{ Request::is('menu/' . $item->slug) ? 'border-[#214E6D] active  bg-[#214E6D] transition-all duration-75 ease-in  text-white' : '' }}">{{ $item->judul }}</a>
                    @endforeach
                </div>
            </div>
            <div class="font-bold group relative">
                Laporan
                <div
                    class=" text-[12px] border-2 left-0 z-10 shadow-md border-[#d1d1d1] border-collapse hidden group-hover:flex absolute flex-col min-w-[200px] bg-white">
                    @foreach ($profile as $item)
                        <a href="/menu/{{ $item->slug }}"
                            class="lowercase px-4 py-2  border-b-2 border-[#d1d1d1] hover:border-[#214E6D] hover:bg-[#214E6D] transition-all duration-75 ease-in hover:text-white border-collapse {{ Request::is('menu/' . $item->slug) ? 'border-[#214E6D] active  bg-[#214E6D] transition-all duration-75 ease-in  text-white' : '' }}">{{ $item->judul }}</a>
                    @endforeach
                </div>
            </div>
            <div class="font-bold group relative">
                Irban
                <div
                    class=" text-[12px] border-2 left-0 z-10 shadow-md border-[#d1d1d1] border-collapse hidden group-hover:flex absolute flex-col min-w-[200px] bg-white">

                    <div
                        class="group/baru px-4 py-2 relative  border-b-2 border-[#d1d1d1] hover:border-[#214E6D] hover:bg-[#214E6D] transition-all duration-75 ease-in  border-collapse  ">
                        <p class="hover:text-white"> Irban 1</p>
                        <div
                            class="text-[12px] border-2  top-0 right-[-200px] z-10 shadow-md border-[#d1d1d1] border-collapse hidden group-hover/baru:flex absolute flex-col min-w-[200px] bg-white">
                            @foreach ($irban1 as $item)
                                <a href="/menu/{{ $item->slug }}"
                                    class="lowercase px-4 py-2  border-b-2 border-[#d1d1d1] hover:border-[#214E6D] hover:bg-[#214E6D] transition-all duration-75 ease-in hover:text-white  border-collapse">{{ $item->judul }}</a>
                            @endforeach

                        </div>
                    </div>
                    <div
                        class="group/baru px-4 py-2 relative  border-b-2 border-[#d1d1d1] hover:border-[#214E6D] hover:bg-[#214E6D] transition-all duration-75 ease-in  border-collapse  ">
                        <p class="hover:text-white"> Irban 2</p>
                        <div
                            class="text-[12px] border-2  top-0 right-[-200px] z-10 shadow-md border-[#d1d1d1] border-collapse hidden group-hover/baru:flex absolute flex-col min-w-[200px] bg-white">
                            @foreach ($irban2 as $item)
                                <a href="/menu/{{ $item->slug }}"
                                    class="px-4 py-2  border-b-2 border-[#d1d1d1] hover:border-[#214E6D] hover:bg-[#214E6D] transition-all duration-75 ease-in hover:text-white  border-collapse">{{ $item->judul }}</a>
                            @endforeach

                        </div>
                    </div>
                    <div
                        class="group/baru px-4 py-2 relative  border-b-2 border-[#d1d1d1] hover:border-[#214E6D] hover:bg-[#214E6D] transition-all duration-75 ease-in  border-collapse  ">
                        <p class="hover:text-white"> Irban 3</p>
                        <div
                            class="text-[12px] border-2  top-0 right-[-200px] z-10 shadow-md border-[#d1d1d1] border-collapse hidden group-hover/baru:flex absolute flex-col min-w-[200px] bg-white">
                            @foreach ($irban3 as $item)
                                <a href="/menu/{{ $item->slug }}"
                                    class="px-4 py-2  border-b-2 border-[#d1d1d1] hover:border-[#214E6D] hover:bg-[#214E6D] transition-all duration-75 ease-in hover:text-white  border-collapse">{{ $item->judul }}</a>
                            @endforeach

                        </div>
                    </div>
                    <div
                        class="group/baru px-4 py-2 relative  border-b-2 border-[#d1d1d1] hover:border-[#214E6D] hover:bg-[#214E6D] transition-all duration-75 ease-in  border-collapse  ">
                        <p class="hover:text-white"> Irban 4</p>
                        <div
                            class="text-[12px] border-2  top-0 right-[-200px] z-10 shadow-md border-[#d1d1d1] border-collapse hidden group-hover/baru:flex absolute flex-col min-w-[200px] bg-white">
                            @foreach ($irban4 as $item)
                                <a href="/menu/{{ $item->slug }}"
                                    class="px-4 py-2  border-b-2 border-[#d1d1d1] hover:border-[#214E6D] hover:bg-[#214E6D] transition-all duration-75 ease-in hover:text-white  border-collapse">{{ $item->judul }}</a>
                            @endforeach

                        </div>
                    </div>
                    <div
                        class="group/baru px-4 py-2 relative  border-b-2 border-[#d1d1d1] hover:border-[#214E6D] hover:bg-[#214E6D] transition-all duration-75 ease-in  border-collapse  ">
                        <p class="hover:text-white"> Irbansus</p>
                        <div
                            class="text-[12px] border-2  top-0 right-[-200px] z-10 shadow-md border-[#d1d1d1] border-collapse hidden group-hover/baru:flex absolute flex-col min-w-[200px] bg-white">
                            @foreach ($irban4 as $item)
                                <a href="/menu/{{ $item->slug }}"
                                    class="px-4 py-2  border-b-2 border-[#d1d1d1] hover:border-[#214E6D] hover:bg-[#214E6D] transition-all duration-75 ease-in hover:text-white  border-collapse">{{ $item->judul }}</a>
                            @endforeach

                        </div>
                    </div>


                </div>
            </div>

            <a href="/ppid" class="font-bold {{ Request::is('/ppid') ? 'text-[#214E6D]' : '' }}">
                PPID
            </a>
            <a href="/saberpungli" class="font-bold {{ Request::is('/saberpungli') ? 'text-[#214E6D]' : '' }}">
                Saber Pungli
            </a>
            <div class="font-bold group relative">
                Regulasi
                <div
                    class=" text-[12px] border-2 left-0 z-10 shadow-md border-[#d1d1d1] border-collapse hidden group-hover:flex absolute flex-col min-w-[200px] bg-white">
                    @foreach ($regulasi as $item)
                        <a href="/menu/{{ $item->slug }}"
                            class=" lowercase px-4 py-2  border-b-2 border-[#d1d1d1] hover:border-[#214E6D] hover:bg-[#214E6D] transition-all duration-75 ease-in hover:text-white border-collapse {{ Request::is('menu/' . $item->slug) ? 'border-[#214E6D] active  bg-[#214E6D] transition-all duration-75 ease-in  text-white' : '' }}">{{ $item->judul }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <button class=" flex xl:hidden" type="button" data-drawer-target="drawer-right-example"
            data-drawer-show="drawer-right-example" data-drawer-placement="right" aria-controls="drawer-right-example">
            <iconify-icon icon="solar:hamburger-menu-outline" width="32" height="32"
                style="color: #1c1c1c"></iconify-icon>
        </button>

    </nav>
</div>
<div id="drawer-right-example"
    class="fixed top-0 right-0 z-50 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800"
    tabindex="-1" aria-labelledby="drawer-right-label">
    <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">
        Inspektorat Sumatera Utara
    </h5>
    <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="py-4 overflow-y-auto">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="ms-3">Home</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">

                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Profile</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        @foreach ($profile as $item)
                            <a href="/menu/{{ $item->slug }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ $item->judul }}</a>
                        @endforeach

                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="gratifikasi" data-collapse-toggle="gratifikasi">

                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Gratifikasi</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="gratifikasi" class="hidden py-2 space-y-2">
                    <li>
                        @foreach ($gratifikasi as $item)
                            <a href="/menu/{{ $item->slug }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ $item->judul }}</a>
                        @endforeach

                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="program" data-collapse-toggle="program">

                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Program</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="program" class="hidden py-2 space-y-2">
                    <li>
                        @foreach ($program as $item)
                            <a href="/menu/{{ $item->slug }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ $item->judul }}</a>
                        @endforeach

                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="laporan" data-collapse-toggle="laporan">

                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Laporan</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="laporan" class="hidden py-2 space-y-2">
                    <li>
                        @foreach ($laporan as $item)
                            <a href="/menu/{{ $item->slug }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ $item->judul }}</a>
                        @endforeach

                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="irban" data-collapse-toggle="irban">

                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Irban</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="irban" class="hidden py-2 space-y-2">
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="irban1" data-collapse-toggle="irban1">

                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Irban1</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="irban1" class="hidden py-2 space-y-2">
                            @foreach ($irban1 as $item)
                                <a href="/menu/{{ $item->slug }}"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ $item->judul }}</a>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="irban2" data-collapse-toggle="irban2">

                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Irban2</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="irban2" class="hidden py-2 space-y-2">
                            @foreach ($irban2 as $item)
                                <a href="/menu/{{ $item->slug }}"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ $item->judul }}</a>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="irban3" data-collapse-toggle="irban3">

                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Irban3</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="irban3" class="hidden py-2 space-y-2">
                            @foreach ($irban3 as $item)
                                <a href="/menu/{{ $item->slug }}"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ $item->judul }}</a>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="irban4" data-collapse-toggle="irban4">

                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Irban4</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="irban4" class="hidden py-2 space-y-2">
                            @foreach ($irban4 as $item)
                                <a href="/menu/{{ $item->slug }}"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ $item->judul }}</a>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="irbansus" data-collapse-toggle="irbansus">

                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Irbansus</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="irbansus" class="hidden py-2 space-y-2">
                            @foreach ($irbansus as $item)
                                <a href="/menu/{{ $item->slug }}"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ $item->judul }}</a>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/ppid"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="ms-3">PPID</span>
                </a>
            </li>
            <li>
                <a href="/saberpungli"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="ms-3">Saber Pungli</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="ms-3">Regulasi</span>
                </a>
            </li>
        </ul>
    </div>
</div>
