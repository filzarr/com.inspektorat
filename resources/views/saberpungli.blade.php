@extends('layout.main')
@section('content')
    <section class="bg-center bg-no-repeat bg-[url('')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Saber
                Pungli
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Lapor Setiap Pungli Yang Terjadi
                Di Sekitar Anda</p>
            <div class=" space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Lapor
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>

            </div>

        </div>
    </section>
    <div class="w-full px-10 md:px-28 mt-10">

        <div id="accordion-arrow-icon" data-accordion="open">
            <h2 id="accordion-arrow-icon-heading-5">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left bg-[#063A69] text-gray-100 border border-gray-400"
                    data-accordion-target="#accordion-arrow-icon-body-5" aria-expanded="false"
                    aria-controls="accordion-arrow-icon-body-5">
                    <span class="text-xl">Profile</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-arrow-icon-body-5" class="hidden" aria-labelledby="accordion-arrow-icon-heading-5">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <div class="mb-2 text-gray-500 dark:text-gray-400">{!!$profile->deskripsi!!}</div>
                </div>
            </div>
            <h2 id="accordion-arrow-icon-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left bg-[#063A69] text-gray-100 border border-gray-400"
                    data-accordion-target="#accordion-arrow-icon-body-3" aria-expanded="false"
                    aria-controls="accordion-arrow-icon-body-3">
                    <span class="text-xl">Tugas </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-arrow-icon-body-3" class="hidden" aria-labelledby="accordion-arrow-icon-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <div class="mb-2 text-gray-500 dark:text-gray-400">{!!$tugas->deskripsi!!}</div>
                
                </div>
            </div>
            <h2 id="accordion-arrow-icon-heading-4">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left bg-[#063A69] text-gray-100 border border-gray-400"
                    data-accordion-target="#accordion-arrow-icon-body-4" aria-expanded="false"
                    aria-controls="accordion-arrow-icon-body-4">
                    <span class="text-xl">Wewenang</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-arrow-icon-body-4" class="hidden" aria-labelledby="accordion-arrow-icon-heading-4">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <div class="mb-2 text-gray-500 dark:text-gray-400">{!!$wewenang->deskripsi!!}</div>
                 
                </div>
            </div>
            <h2 id="accordion-arrow-icon-heading-6">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left bg-[#063A69] text-gray-100 border border-gray-400"
                    data-accordion-target="#accordion-arrow-icon-body-6" aria-expanded="false"
                    aria-controls="accordion-arrow-icon-body-4">
                    <span class="text-xl">Visi Dan Misi</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-arrow-icon-body-6" class="hidden" aria-labelledby="accordion-arrow-icon-heading-6">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <div class="mb-2 text-gray-500 dark:text-gray-400">{!!$visi->deskripsi!!}</div>
                
                </div>
            </div>
        </div>

    </div>
    <div class="w-full px-10 md:px-28 mt-20">
        <div class="flex justify-center text-center  font-semibold">
            <h1 class="text-4xl uppercase font-bold text-[#3E6E8B]">Struktur</h1>
        </div>
        <div class="flex justify-center mt-10">
            <img src="" class="w-full h-96" alt="">
        </div>
    </div>
    <div class="w-full px-10 md:px-28 mt-20 mb-20">
        <div class="flex justify-center text-center font-semibold">
            <h1 class=" text-xl md:text-4xl uppercase font-bold text-[#3E6E8B]">Langkah Untuk Melapor</h1>
            
        </div>
        <div class="grid lg:grid-cols-4 gap-10 mt-20 mb-20 text-center">
            <div class="">
                <div class="flex justify-center mb-6">
                    <svg class=" h-20 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 20">
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6"/>
                      </svg>
                </div>
                <p class="text-sm">Kunjungin Link Form Pelaporan</p>
            </div>
            <div class="">
                <div class="flex justify-center mb-6">
                    <svg class="h-20 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5h6M9 8h6m-6 3h6M4.996 5h.01m-.01 3h.01m-.01 3h.01M2 1h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
                      </svg>
                </div>
                <p class="text-sm">Buat Laporan Dengan cara mengisi
                    form yang sudah disediakan</p>
            </div>
            <div class="">
                <div class="flex justify-center mb-6">
                    <svg class="h-20 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"/>
                      </svg>
                </div>
                <p class="text-sm">
                    instansi akan menindaklanjuti dan
                    membalas laporan Anda</p>
            </div>
            <div class="">
                <div class="flex justify-center mb-6">
                    <svg class="h-20 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M1 5.917 5.724 10.5 15 1.5"/>
                      </svg>
                </div>
                <p class="text-sm">Laporan Anda akan terus ditindaklanjuti
                    hingga terselesaikan, Cek Secara Berkala Pada Link Cek Laporan
                    
                    </p>
            </div>
        </div>
    </div>
@endsection
