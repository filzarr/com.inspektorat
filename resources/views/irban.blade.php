@extends('layout.main')
@section('content')
    <section class="bg-center bg-no-repeat bg-[url('/tes.jpg')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Selamat
                Datang Di
                Irban 1</h1>

        </div>
    </section>


    <div class="w-full px-28 mt-10">

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
                    <div class="mb-2 text-gray-500 dark:text-gray-400">{!! $profile->deskripsi !!}</div>
                 
                </div>
            </div>
            <h2 id="accordion-arrow-icon-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left bg-[#063A69] text-gray-100 border border-gray-400"
                    data-accordion-target="#accordion-arrow-icon-body-3" aria-expanded="false"
                    aria-controls="accordion-arrow-icon-body-3">
                    <span class="text-xl">Visi</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-arrow-icon-body-3" class="hidden" aria-labelledby="accordion-arrow-icon-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <div class="mb-2 text-gray-500 dark:text-gray-400">{!! $visi->deskripsi !!}</div>
                 
                </div>
            </div>
            <h2 id="accordion-arrow-icon-heading-4">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left bg-[#063A69] text-gray-100 border border-gray-400"
                    data-accordion-target="#accordion-arrow-icon-body-4" aria-expanded="false"
                    aria-controls="accordion-arrow-icon-body-4">
                    <span class="text-xl">Misi</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-arrow-icon-body-4" class="hidden" aria-labelledby="accordion-arrow-icon-heading-4">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <div class="mb-2 text-gray-500 dark:text-gray-400">{!! $misi->deskripsi !!}</div>
                 
                </div>
            </div>
        </div>

    </div>
    <div class="w-full px-28 mt-20">
        <div class="flex justify-center text-center  font-semibold">
            <h1 class="text-4xl uppercase font-bold text-[#3E6E8B]">Struktur</h1>
        </div>
        <div class="flex justify-center mt-10">
            <img src="" class="w-full h-96" alt="">
        </div>
    </div>
    <div class="w-full px-28 mt-20">
        <div class="flex justify-start text-center  font-semibold">
            <h1 class="text-4xl uppercase font-bold text-[#3E6E8B]">Kegiatan</h1>
        </div>
        <div class="grid grid-cols-3 mt-10 gap-10">
            <div class=" ">
                <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter  overflow-hidden">
                    <figcaption class="absolute  z-50 top-3 left-3"><button
                            class="bg-blue-500 px-2 py-1 rounded-lg text-sm text-white">Konferensi</button>
                    </figcaption>
                    <a href="#">
                        <img class="rounded-lg scale-100 hover:scale-125 duration-700"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                            alt="image description">
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <p class="text-sm">24 November 2023</p>
                        <p>Do you want to get notified when a new component is added to Flowbite?</p>
                    </figcaption>
                </figure>
            </div>
            <div class=" ">
                <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter  overflow-hidden">
                    <figcaption class="absolute  z-50 top-3 left-3"><button
                            class="bg-blue-500 px-2 py-1 rounded-lg text-sm text-white">Konferensi</button>
                    </figcaption>
                    <a href="#">
                        <img class="rounded-lg scale-100 hover:scale-125 duration-700"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                            alt="image description">
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <p class="text-sm">24 November 2023</p>
                        <p>Do you want to get notified when a new component is added to Flowbite?</p>
                    </figcaption>
                </figure>
            </div>
            <div class=" ">
                <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter  overflow-hidden">
                    <figcaption class="absolute  z-50 top-3 left-3"><button
                            class="bg-blue-500 px-2 py-1 rounded-lg text-sm text-white">Konferensi</button>
                    </figcaption>
                    <a href="#">
                        <img class="rounded-lg scale-100 hover:scale-125 duration-700"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                            alt="image description">
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <p class="text-sm">24 November 2023</p>
                        <p>Do you want to get notified when a new component is added to Flowbite?</p>
                    </figcaption>
                </figure>
            </div>
            <div class=" ">
                <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter  overflow-hidden">
                    <figcaption class="absolute  z-50 top-3 left-3"><button
                            class="bg-blue-500 px-2 py-1 rounded-lg text-sm text-white">Konferensi</button>
                    </figcaption>
                    <a href="#">
                        <img class="rounded-lg scale-100 hover:scale-125 duration-700"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                            alt="image description">
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <p class="text-sm">24 November 2023</p>
                        <p>Do you want to get notified when a new component is added to Flowbite?</p>
                    </figcaption>
                </figure>
            </div>
            <div class=" ">
                <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter  overflow-hidden">
                    <figcaption class="absolute  z-50 top-3 left-3"><button
                            class="bg-blue-500 px-2 py-1 rounded-lg text-sm text-white">Konferensi</button>
                    </figcaption>
                    <a href="#">
                        <img class="rounded-lg scale-100 hover:scale-125 duration-700"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                            alt="image description">
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <p class="text-sm">24 November 2023</p>
                        <p>Do you want to get notified when a new component is added to Flowbite?</p>
                    </figcaption>
                </figure>
            </div>


        </div>
        <div class="flex justify-end mt-10">


            <nav aria-label="Page navigation example">
                <ul class="flex items-center -space-x-px h-10 text-base">
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Next</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
    <div class="w-full px-28 mt-20 mb-20 pb-20">
        <div class="flex justify-start text-center  font-semibold">
            <h1 class="text-4xl uppercase font-bold text-[#3E6E8B]">Capaian Kinerja</h1>
        </div>
        <div class="grid grid-cols-4 gap-10 mt-10">

            <div class="max-w-sm bg-white border border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="tes.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                 
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="tes.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                 
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="tes.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                 
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="tes.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                 
                </div>
            </div>
            

        </div>
        <div class="flex justify-end mt-10">


            <nav aria-label="Page navigation example">
                <ul class="flex items-center -space-x-px h-10 text-base">
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Next</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
@endsection