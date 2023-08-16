@extends('layout.main')
@section('content')
    <style>
        #gam {
            display: block;
            max-width: 13rem !important;
            max-height: 10rem !important;
            width: auto;
            height: auto;
        }
    </style>
    <div id="default-carousel" class="relative w-full  max-sm:-mt-10  max-sm:h-60" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-60 overflow-hidden  md:h-[35rem]">
            <!-- Item 1 -->
            @foreach ($banner as $item)
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/{{ $item->image }}"
                        class=" brightness-50  absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class=" absolute md:left-56 max-sm:left-14  max-sm:top-28 md:top-56">
                        <p class=" text-white text-[10px]  md:text-3xl  font-semibold md:w-[30rem]">{{ $item->judul }}</p>
                        <a href="/banner/{{ $item->slug }}">
                            <button
                                class=" bg-cyan-700 p-2 mt-3 font-medium rounded-md text-white text-xs md:text-lg">Selengkapnya</button>
                        </a>
                    </div>
                </div>
            @endforeach
            <!-- Item 2 -->
   

        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                    </path>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <div class="w-full md:mt-20 px-5 md:px-28">
        <div class="md:flex  justify-between gap-10">
            <div class=" max-sm:w-full md:w-3/6">
                <div class="flex justify-start">
                    <p class=" max-sm:text-xl md:text-4xl uppercase font-bold text-[#3E6E8B]">Berita Terkini</p>
                </div>
                <div class="grid auto-rows-max md:mt-20 mt-10 gap-10">
                    @foreach ($berita as $item)
                        <div class="flex gap-5 md:gap-10 ">
                            <a href="/berita/{{ $item->slug }}">
                                <img src="/images/{{ $item->image }}"
                                    class="  max-sm:w-32   max-sm:h-32 lg:h-40  lg:w-52  rounded-xl drop-shadow-2xl border border-black/10" id="gam"
                                    alt="">
                            </a>
                            <div class=" grid justify-stretch">
                                <a href="/berita/{{ $item->slug }}">
                                    <p class="text-[#3E6E8B] max-sm:text-base md:text-lg font-bold">{{ $item->judul }}</p>
                                </a>
                                <p class=" max-sm:text-xs md:text-sm font-bold text-black/80">
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }} </p>
                                <p class=" text-xs font-bold text-black/80">Posted By Admin </p>
                                <div class=" capitalize text-xs  font-semibold  text-black/70 ">
                                    {!! Illuminate\Support\Str::limit(strip_tags($item->deskripsi), $limit = 100, $end = '...') !!} </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <a href="/berita" class="lg:hidden block">
                    <div class="flex justify-start max-sm:mt-10 max-sm:mb-10">
                        <p
                            class=" font-semibold text-[#3E6E8B] text-xl hover:underline duration-500  translate-x-0 hover:translate-x-1 ease-out ">
                            Lihat Berita Lainnya</p>
                    </div>
                </a>
            </div>
            <div class="md:w-2/6    md:px-10 block">
                <div class="w-full   border-2 border-black/5 bg-[#EFEFF0] px-5 py-3 rounded-md">
                    <div class="w-full bg-[#214E6D] px-0 sm:px-5 flex justify-center py-3 font-bold text-[#EFEFF0]">Inpektur
                        Inspektorat Sumatera Utara</div>
                    <div class=""><img src="kepala.png" class=" h-60 mt-3 w-full" alt=""></div>
                        <x-terkait></x-terkait>
                    <x-statistik></x-statistik>
                    <div class="mt-10 w-full bg-[#214E6D] flex justify-center py-3 font-bold text-[#EFEFF0]">Newslatter
                    </div>
                    <div class=" mt-5 w-full">
                        <p class=" font-semibold text-black/50 text-sm">Subscribe untuk mendapatkan berita terbaru dari
                            kami</p>
                        <input type="text"
                            class="w-full border-black/30 shadow-lg rounded-sm placeholder:text-center mt-3 h-12"
                            placeholder="Masukkan email ">
                        <button class=" bg-blue-500 text-white w-full mt-5 py-3 font-semibold">Submit</button>
                    </div>
                </div>
            </div>

        </div>
        <a href="/berita" class="hidden lg:block">
            <div class="flex justify-start max-sm:mt-10 max-sm:mb-10">
                <p
                    class=" font-semibold text-[#3E6E8B] text-xl hover:underline duration-500  translate-x-0 hover:translate-x-1 ease-out ">
                    Lihat Berita Lainnya</p>
            </div>
        </a>
    </div>
    <div class="w-full mt-10 md:px-28 px-5 py-10 bg-[#EFEFF0]">
        <div class="flex justify-start">
            <p class=" font-bold md:text-3xl text-2xl text-[#3E6E8B] underline underline-offset-8">Agenda</p>
        </div>
        <div class="flex justify-start">
            <ul class="flex mt-10 gap-5 text-lg font-semibold">
                <li class="text-[#3E6E8B]">Semua</li>
                <li>Akan Datang</li>
                <li>Selesai</li>
            </ul>
        </div>
        <div class="grid  grid-cols-1 md:grid-cols-3 mt-10 gap-10">

            @foreach ($agenda as $item)
                <div class=" ">
                    <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter  overflow-hidden">
                        @if ($item->created_at > \Carbon\Carbon::now())
                            <figcaption class="absolute  z-50 top-3 left-3"><button
                                    class="bg-blue-500 px-2 py-1 rounded-lg text-sm text-white">Akan Datang</button>
                            </figcaption>
                        @else
                            <figcaption class="absolute  z-50 top-3 left-3"><button
                                    class="bg-blue-500 px-2 py-1 rounded-lg text-sm text-white">Selesai</button>
                            </figcaption>
                        @endif
                        <a href="/agenda/{{ $item->slug }}">
                            <img class="rounded-lg scale-100 hover:scale-125 duration-700"
                                src="/images/{{ $item->image }}" alt="image description">
                        </a>
                        <figcaption class="absolute px-4 text-lg text-white bottom-6">
                            <p class="text-sm"> {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</p>
                            <p>{{ $item->judul }} </p>
                        </figcaption>
                    </figure>
                </div>
            @endforeach




        </div>
        <div class="flex w-full justify-center mt-10">
            <a href="/agenda">

                <p
                    class=" font-semibold text-[#3E6E8B] text-xl hover:underline duration-500  translate-x-0 hover:translate-x-1 ease-out ">
                    Lihat Seluruh Agenda</p>

            </a>
        </div>
    </div>
    <div class="w-full mt-10 px-5 md:px-28  mb-10">
        <div class="flex justify-start">
            <p class=" font-bold text-3xl text-[#3E6E8B] underline underline-offset-8">Galeri Foto</p>
        </div>

        <div class="grid md:grid-cols-5 gap-2 max-sm:mx-10 mt-10">
            @foreach ($galerifoto as $item)
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img class="h-auto max-w-full rounded-lg" src="/images/{{ $item->image }}" alt="">
                        </div>
                        <div class="flip-box-back">
                            <h2>{{ $item->deskripsi }}</h2>
                        </div>
                    </div>
                </div>
            @endforeach





            <div class="max-w-full  h-52">

            </div>

        </div>

    </div>
    <div class="w-full mt-16 px-10 md:px-28  mb-10">
        <div class="flex justify-start">
            <p class=" font-bold text-3xl text-[#3E6E8B] underline underline-offset-8">Galeri Video</p>
        </div>
        <div class="grid md:grid-cols-3 gap-16 mt-10  w-full items-center">
            @foreach ($video as $item)
                <div class="relative w-full h-full">
                    <button data-modal-target="{{ $item->id }}" data-modal-toggle="{{ $item->id }}"
                        class="absolute inset-0 z-50 flex items-center w-full h-full justify-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-play-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                        </svg>
                    </button>
                    <div id="{{ $item->id }}" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative  bg-transparent  dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-start justify-between p-4 brounded-t ">

                                    <button type="button"
                                        class="text-gray-800 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="{{ $item->id }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <iframe src="https://drive.google.com/file/d/{{ $item->links }}/preview"
                                    class="w-full h-96" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                    <img src="https://drive.google.com/thumbnail?id={{ $item->links }}" class="w-full  h-56  grayscale"
                        alt="">
                </div>
            @endforeach

            {{-- <iframe height="200" width="400" src="https://www.youtube.com/embed/faR3YhwqXgs"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe> --}}
            {{-- <iframe height="250" width="400" src="https://www.youtube.com/embed/faR3YhwqXgs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <iframe height="200" width="400" src="https://www.youtube.com/embed/faR3YhwqXgs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
        </div>

    </div>
    <div class="w-full mt-10 max-sm:px-10 md:px-28 py-10 bg-[#EFEFF0]">
        <div class="flex justify-center">
            <p class="font-bold text-xl md:text-3xl text-[#3E6E8B] underline underline-offset-8">Data Pegawai Inspektorat
            </p>
        </div>
        <div id="fullWidthTabContent" class="border-t max-md:mt-5 dark:border-gray-600">
            <div class="   rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel"
                aria-labelledby="stats-tab">
                <dl
                    class="grid max-w-screen-xl grid-cols-2 gap-8  mx-auto text-center text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                    @foreach ($datapegawai as $item)
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2  text-3xl font-extrabold">{{ $item->jumlah }}</dt>
                            <dd class="text-gray-500 dark:text-gray-400 sm:text-xl lg:text-xl">{{ $item->nama }}</dd>
                        </div>
                    @endforeach

                </dl>
            </div>
        </div>
    </div>
@endsection
