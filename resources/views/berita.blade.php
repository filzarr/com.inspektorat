@extends('layout.main')
@section('content')
    <style>
        @media only screen and (min-width: 1024px) {

            #gam {
                display: block;
                max-width: 13rem !important;
                max-height: 10rem !important;
                width: auto;
                height: auto;
            }
        }

        @media only screen and (max-width: 1024px) {

            #gam {
                display: block;
                max-width: 8rem !important;
                max-height: 10rem !important;
                width: auto;
                height: auto;
            }
        }
    </style>
    <div class="w-full mt-20 px-5 lg:px-28 mb-2 0">

        <div class="lg:px-28 mb-20">

            @if (\Request::is('berita'))
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <form action="/berita" method="GET">
                        <input type="search" id="default-search" name="cari" value="{{ old('cari') }}"
                            class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Cari Berita...." required>
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </form>
                </div>
            @endif

        </div>

        <div class="md:flex justify-between gap-10">
            <div class=" md:w-3/6">
                @if (\Request::is('berita'))
                    <div class="flex justify-start mb-10">
                        <p class=" text-4xl uppercase font-bold text-[#3E6E8B]">Berita Terkini</p>
                    </div>
                @else
                    <div class="flex justify-start mb-10">
                        <p class=" text-4xl uppercase font-bold text-[#3E6E8B]">Agenda Terkini</p>
                    </div>
                @endif

                <div class="grid auto-rows-max md:mt-20 mt-10 gap-10">
                    @foreach ($berita as $item)
                        @if (\Request::is('berita'))
                            <div class="flex gap-5 md:gap-10 ">
                                <a href="/berita/{{ $item->slug }}">
                                    <img src="/images/{{ $item->image }}"
                                        class="  max-sm:w-32   max-sm:h-32 lg:h-40  lg:w-52  rounded-xl drop-shadow-2xl border border-black/10"
                                        id="gam" alt="">
                                </a>
                                <div class=" grid justify-stretch">
                                    <a href="/berita/{{ $item->slug }}">
                                        <p class="text-[#3E6E8B] max-sm:text-base md:text-lg font-bold">{{ $item->judul }}
                                        </p>
                                    </a>
                                    <p class=" max-sm:text-xs md:text-sm font-bold text-black/80">
                                        {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }} </p>
                                    <p class=" text-xs font-bold text-black/80">Posted By Admin </p>
                                    <div class=" capitalize text-xs  font-semibold  text-black/70 ">
                                        {!! Illuminate\Support\Str::limit(strip_tags($item->deskripsi), $limit = 100, $end = '...') !!} </div>
                                </div>
                            </div>
                        @else
                            <div class="flex gap-5 md:gap-10 ">
                                <a href="/agenda/{{ $item->slug }}">
                                    <img src="/images/{{ $item->image }}"
                                        class="  max-sm:w-32   max-sm:h-32 lg:h-40  lg:w-52  rounded-xl drop-shadow-2xl border border-black/10"
                                        id="gam" alt="">
                                </a>
                                <div class=" grid justify-stretch">
                                    <a href="/agenda/{{ $item->slug }}">
                                        <p class="text-[#3E6E8B] max-sm:text-base md:text-lg font-bold">{{ $item->judul }}
                                        </p>
                                    </a>
                                    <p class=" max-sm:text-xs md:text-sm font-bold text-black/80">
                                        {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }} </p>
                                    <p class=" text-xs font-bold text-black/80">Posted By Admin </p>
                                    <div class=" capitalize text-xs  font-semibold  text-black/70 ">
                                        {!! Illuminate\Support\Str::limit(strip_tags($item->deskripsi), $limit = 100, $end = '...') !!} </div>
                                </div>
                            </div>
                        @endif
                    @endforeach


                </div>
                <div class="flex justify-center mb-10 mt-20">


                    <nav aria-label="Page navigation example">
                        <ul class="flex items-center -space-x-px h-10 text-base">
                            {{ $berita->links() }}
                        </ul>
                    </nav>

                </div>
            </div>
            <div class="md:w-2/6 my-10   md:px-10 block">
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
    </div>
@endsection
