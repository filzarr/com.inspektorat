@extends('layout.main')
@section('content')
    <section class="bg-center bg-no-repeat bg-[url('')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl"> Selamat
                Datang Di PPID <br> Inspektorat Sumatera Utara</p>
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Pejabat Pengelola Informasi dan
                Dokumentasi (PPID)</p>

        </div>
    </section>


    <div class="w-full px-28 mt-10">
        <div class="grid grid-cols-3 justify-center gap-20 px-28 ">

            <div
                class="w-full max-w-sm p-4 bg-white border border-gray-300 rounded-lg  drop-shadow-xl sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <svg class="w-[48px] h-[48px] text-[#063A69] dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"
                        d="M18 5h1v12a2 2 0 0 1-2 2m0 0a2 2 0 0 1-2-2V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v15a2 2 0 0 0 2 2h14ZM10 4h2m-2 3h2m-8 3h8m-8 3h8m-8 3h8M4 4h3v3H4V4Z" />
                </svg>
                <div class="flex items-baseline mt-7 text-gray-900 dark:text-white">
                    <span class="text-3xl uppercase font-bold text-[#063A69]">Data Lengkap</span>
                </div>
                <div class="flex items-baseline mt-7 text-gray-500 dark:text-white">
                    <p class=" text-sm font-semibold">Data Informasi Publik disajikan lengkap & merupakan informasi yang
                        diijinkan untuk dipublikasikan.</p>
                </div>

            </div>
            <div
                class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg drop-shadow-xl sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <svg class="w-[48px] h-[48px] text-[#063A69] dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M7.824 5.937a1 1 0 0 0 .726-.312 2.042 2.042 0 0 1 2.835-.065 1 1 0 0 0 1.388-1.441 3.994 3.994 0 0 0-5.674.13 1 1 0 0 0 .725 1.688Z" />
                    <path
                        d="M17 7A7 7 0 1 0 3 7a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V7a5 5 0 1 1 10 0v7.083A2.92 2.92 0 0 1 12.083 17H12a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a1.993 1.993 0 0 0 1.722-1h.361a4.92 4.92 0 0 0 4.824-4H17a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3Z" />
                </svg>
                <div class="flex items-baseline mt-7 text-gray-900 dark:text-white">
                    <span class="text-3xl font-bold text-[#063A69]">Akses Mudah</span>
                </div>
                <div class="flex items-baseline mt-7 text-gray-500 dark:text-white">
                    <p class=" text-sm font-semibold">Seluruh data informasi dapat diakses melalui website Inspektorat
                        maupun Open Data Provinsi Sumatera Utara</p>
                </div>

            </div>
            <div
                class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg drop-shadow-xl sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <svg class="w-[48px] h-[48px] text-[#063A69] dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"
                        d="M6.487 1.746c0 4.192 3.592 1.66 4.592 5.754 0 .828 1 1.5 2 1.5s2-.672 2-1.5a1.5 1.5 0 0 1 1.5-1.5h1.5m-16.02.471c4.02 2.248 1.776 4.216 4.878 5.645C10.18 13.61 9 19 9 19m9.366-6h-2.287a3 3 0 0 0-3 3v2m6-8a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <div class="flex items-baseline mt-7 text-gray-900 dark:text-white">
                    <span class="text-3xl font-bold text-[#063A69]">Online</span>
                </div>
                <div class="flex items-baseline mt-7 text-gray-500 dark:text-white">
                    <p class=" text-sm font-semibold">Demi kemudahan di era digital, seluruh data Informasi Publik dapat
                        diakses menggunakan internet.</p>
                </div>

            </div>


        </div>
    </div>
    <div class="w-full px-28 mt-20">

        <div id="accordion-flush" data-accordion="collapse"
            data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
            data-inactive-classes="text-gray-500 dark:text-gray-400">
            <h2 id="accordion-flush-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                    data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                    aria-controls="accordion-flush-body-1">
                    <span class="text-xl text-[#063A69]">Profile</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive
                        components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                            href="/docs/getting-started/introduction/"
                            class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing
                        websites even faster with components on top of Tailwind CSS.</p>
                </div>
            </div>
            <h2 id="accordion-flush-heading-8">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                    data-accordion-target="#accordion-flush-body-8" aria-expanded="true"
                    aria-controls="accordion-flush-body-8">
                    <span class="text-xl text-[#063A69]">Tugas Dan Fungsi</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-8" class="hidden" aria-labelledby="accordion-flush-heading-8">
                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive
                        components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                            href="/docs/getting-started/introduction/"
                            class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing
                        websites even faster with components on top of Tailwind CSS.</p>
                </div>
            </div>
            <h2 id="accordion-flush-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                    data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                    aria-controls="accordion-flush-body-2">
                    <span class="text-xl text-[#063A69]">Visi</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using
                        the
                        Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
                            class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the
                        utility classes from Tailwind CSS and components from Flowbite.</p>
                </div>
            </div>
            <h2 id="accordion-flush-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                    data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                    aria-controls="accordion-flush-body-3">
                    <span class="text-xl text-[#063A69]">Misi</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from
                        Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another
                        difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers
                        sections of pages.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite,
                        Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best
                        of two worlds.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                    <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                        <li><a href="https://flowbite.com/pro/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                        <li><a href="https://tailwindui.com/" rel="nofollow"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="w-full px-28 mt-20">
        <div class="flex justify-center text-center  font-semibold">
            <h1 class="text-4xl uppercase font-bold text-[#063A69]">Struktur</h1>
        </div>
        <div class="flex justify-center mt-10">
            <img src="" class="w-full h-96" alt="">
        </div>
    </div>
    <div class="w-full px-28 mt-20">
        <div class="flex justify-center text-center  font-semibold">
            <h1 class="text-4xl uppercase font-bold text-[#063A69]">Daftar Informasi</h1>
        </div>

        <a href="/forminformasi">
            <h2 class="mt-10">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left bg-[#063A69] text-gray-100 border border-gray-400 ">
                    <span class="text-xl ">Informasi Berkala</span>
                    <svg class="w-3 h-3  dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 8 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                    </svg>
                </button>
            </h2>
        </a>

        <a href="/formkeberatan">
            <h2 class="mt-1" id="accordion-arrow-icon-heading-3 mt-10">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left bg-[#063A69] text-gray-100 border border-gray-400 ">
                    <span class="text-xl ">Informasi Publik</span>
                    {{-- <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                          </svg> --}}
                    <svg class="w-3 h-3  dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 8 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                    </svg>
                </button>
            </h2>
        </a>


    </div>

    </div>
    <div class="w-full px-28 mt-20">
        <div class="flex justify-center text-center  font-semibold">
            <h1 class="text-4xl uppercase font-bold text-[#063A69]">Tata Cara Permohonan Informasi</h1>
        </div>
        <div class="flex justify-center mt-20">

            <div class="grid grid-cols-3 gap-10 text-center">
                <div class="">
                    <div class="flex justify-center mb-5">
                        <svg class="w-[80px] h-[80px] text-blue-500 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none"
                            viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="1.3"
                                d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5" />
                        </svg>
                    </div>
                    <p class="text-lg font-semibold ">Membuat Permohonan pada <span class="underline text-[#063A69]"> link
                            Permohonan </span></p>
                </div>
                <div class="">
                    <div class="flex justify-center mb-5">
                        <svg class="w-[80px] h-[80px] text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="1.3"
                                d="M10 6v4l3.276 3.276M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <p class="text-lg font-semibold ">Permohonan Akan Diproses</p>
                </div>
                <div class="">
                    <div class="flex justify-center mb-5">
                        <svg class="w-[80px] h-[80px] text-green-500 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.3" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </div>
                    <p class="text-lg font-semibold ">Cek Secara Berkala Pada Link Cek <span
                            class="underline text-[#063A69]">Permohonan Informasi</span></p>
                </div>
            </div>

        </div>
    </div>
    <div class="w-full px-28 mt-20">
        <div class="flex justify-center text-center  font-semibold">
            <h1 class="text-4xl uppercase font-bold text-[#063A69]">Tata Cara Keberatan Informasi</h1>
        </div>
        <div class="flex justify-center mt-20">

            <div class="grid grid-cols-4 gap-10 text-center">
                <div class="">
                    <div class="flex justify-center mb-5">
                        <svg class="w-[80px] h-[80px] text-blue-500 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none"
                            viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="1.3"
                                d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5" />
                        </svg>
                    </div>
                    <p class="text-lg font-semibold ">Membuat Laporan pada <span class="underline text-[#063A69]"> link
                            Laporan Informasi </span></p>
                </div>
                <div class="">
                    <div class="flex justify-center mb-5">
                        <svg class="w-[80px] h-[80px] text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="1.3"
                                d="M10 6v4l3.276 3.276M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <p class="text-lg font-semibold ">Permohonan Akan Diproses</p>
                </div>
                <div class="">
                    <div class="flex justify-center mb-5">
                        <svg class="w-[80px] h-[80px] text-green-500 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.3" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </div>
                    <p class="text-lg font-semibold ">Cek Secara Berkala Pada Link Cek <span
                            class="underline text-[#063A69]">Pelaporan Informasi</span></p>
                </div>
                <div class="">
                    <div class="flex justify-center mb-5">
                        <svg class="w-[80px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 5h9M5 9h5m8-8H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h4l3.5 4 3.5-4h5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                          </svg>
                    </div>
                    <p class="text-lg font-semibold ">Jika Anda Kurang Puas Anda Dapat Melaporkannya Pada Komisi Informasi</span></p>
                </div>
            </div>

        </div>
    </div>
    <div class="w-full mt-20 px-28 py-10 bg-[#EFEFF0]">
        <div class="flex justify-center">
            <p class="font-bold text-3xl text-[#3E6E8B] underline underline-offset-8">Statistik Informasi</p>
        </div>
        <div id="fullWidthTabContent" class="border-t  dark:border-gray-600">
            <div class="   rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel"
                aria-labelledby="stats-tab">
                <dl
                    class="grid max-w-screen-xl grid-cols-2 gap-8  mx-auto text-center text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">100</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Daftar Informasi</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">100M</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Jumlah Unduh</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">100</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Jumlah Permohonan</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">13</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Jumlah Keberatan</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold text-center">90</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Permohonan Selesai</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">11</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Keberatan Selesai</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
@endsection
