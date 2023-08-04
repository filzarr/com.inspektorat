@extends('layout.main')
@section('content')
    <div class="w-full mt-20 px-28 mb-2 0">

        <div class="px-28 mb-20">
            <form>
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Cari Berita...." required>
                    <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
        </div>

        <div class="flex justify-between gap-10">
            <div class=" w-3/6">
                <div class="flex justify-start mb-10">
                    <p class=" text-4xl uppercase font-bold text-[#3E6E8B]">Berita Terkini</p>
                </div>
                <div class="grid grid-rows-6  gap-10">
                    @foreach ($berita as $item)
                        
                    <div class="flex gap-10">
                        <img src="/images/{{$item->image}}" class="  w-52 h-40 rounded-xl drop-shadow-2xl border border-black/10"
                            alt="">
                        <div class=" grid justify-stretch">
                            <p class="text-[#3E6E8B] text-lg font-bold">{{$item->judul}}</p>
                            <p class=" text-sm font-bold text-black/80">15 Juni 2023</p>
                            <p class=" text-xs font-bold text-black/80">Posted By Admin </p>
                            <p class=" capitalize text-xs font-semibold break-words text-black/70">Medan (01/06),
                                Pelaksanaan Upacara Bendera dalam rangka memperingati Hari Lahir Pancasila Tahun 2023
                                Inspektorat Provinsi Sumatera Utara pada Hari Kamis (01/06/2023) </p>
                        </div>
                    </div>
                    @endforeach
                    <div class="flex gap-10">
                        <img src="tes.jpg" class="  w-52 h-40 rounded-xl drop-shadow-2xl border border-black/10"
                            alt="">
                        <div class=" grid justify-stretch">
                            <p class="text-[#3E6E8B] text-lg font-bold">UPACARA HARI LAHIR PANCASILA 2023 ITPROVSU</p>
                            <p class=" text-sm font-bold text-black/80">15 Juni 2023 Posted By Admin </p>
                            <p class=" capitalize text-xs font-semibold break-words text-black/70">Medan (01/06),
                                Pelaksanaan Upacara Bendera dalam rangka memperingati Hari Lahir Pancasila Tahun 2023
                                Inspektorat Provinsi Sumatera Utara pada Hari Kamis (01/06/2023) </p>
                        </div>
                    </div>
                    <div class="flex gap-10">
                        <img src="tes.jpg" class="  w-52 h-40 rounded-xl drop-shadow-2xl border border-black/10"
                            alt="">
                        <div class=" grid justify-stretch">
                            <p class="text-[#3E6E8B] text-lg font-bold">UPACARA HARI LAHIR PANCASILA 2023 ITPROVSU</p>
                            <p class=" text-sm font-bold text-black/80">15 Juni 2023 Posted By Admin </p>
                            <p class=" capitalize text-xs font-semibold break-words text-black/70">Medan (01/06),
                                Pelaksanaan Upacara Bendera dalam rangka memperingati Hari Lahir Pancasila Tahun 2023
                                Inspektorat Provinsi Sumatera Utara pada Hari Kamis (01/06/2023) </p>
                        </div>
                    </div>
                    <div class="flex gap-10">
                        <img src="tes.jpg" class="  w-52 h-40 rounded-xl drop-shadow-2xl border border-black/10"
                            alt="">
                        <div class=" grid justify-stretch">
                            <p class="text-[#3E6E8B] text-lg font-bold">UPACARA HARI LAHIR PANCASILA 2023 ITPROVSU</p>
                            <p class=" text-sm font-bold text-black/80">15 Juni 2023 Posted By Admin </p>
                            <p class=" capitalize text-xs font-semibold break-words text-black/70">Medan (01/06),
                                Pelaksanaan Upacara Bendera dalam rangka memperingati Hari Lahir Pancasila Tahun 2023
                                Inspektorat Provinsi Sumatera Utara pada Hari Kamis (01/06/2023) </p>
                        </div>
                    </div>
                    <div class="flex gap-10">
                        <img src="tes.jpg" class="  w-52 h-40 rounded-xl drop-shadow-2xl border border-black/10"
                            alt="">
                        <div class=" grid justify-stretch">
                            <p class="text-[#3E6E8B] text-lg font-bold">UPACARA HARI LAHIR PANCASILA 2023 ITPROVSU</p>
                            <p class=" text-sm font-bold text-black/80">15 Juni 2023 Posted By Admin </p>
                            <p class=" capitalize text-xs font-semibold break-words text-black/70">Medan (01/06),
                                Pelaksanaan Upacara Bendera dalam rangka memperingati Hari Lahir Pancasila Tahun 2023
                                Inspektorat Provinsi Sumatera Utara pada Hari Kamis (01/06/2023) </p>
                        </div>
                    </div>
                    <div class="flex gap-10">
                        <img src="tes.jpg" class="  w-52 h-40 rounded-xl drop-shadow-2xl border border-black/10"
                            alt="">
                        <div class=" grid justify-stretch">
                            <p class="text-[#3E6E8B] text-lg font-bold">UPACARA HARI LAHIR PANCASILA 2023 ITPROVSU</p>
                            <p class=" text-sm font-bold text-black/80">15 Juni 2023 Posted By Admin </p>
                            <p class=" capitalize text-xs font-semibold break-words text-black/70">Medan (01/06),
                                Pelaksanaan Upacara Bendera dalam rangka memperingati Hari Lahir Pancasila Tahun 2023
                                Inspektorat Provinsi Sumatera Utara pada Hari Kamis (01/06/2023) </p>
                        </div>
                    </div>

                </div>
                <div class="flex justify-center mb-10 mt-20">


                    <nav aria-label="Page navigation example">
                        <ul class="flex items-center -space-x-px h-10 text-base">
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Previous</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 6 10">
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
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
            <div class="w-2/6 px-10">
                <div class="w-full   border-2 border-black/5 bg-[#EFEFF0] px-5 py-3 rounded-md">
                    <div class="w-full bg-[#214E6D] flex justify-center py-3 font-bold text-[#EFEFF0]">Inpektur
                        Inspektorat Sumatera Utara</div>
                    <div class=""><img src="kepala.png" class=" h-60 mt-3 w-full" alt=""></div>
                    <div class="mt-10 w-full bg-[#214E6D] flex justify-center py-3 font-bold text-[#EFEFF0]">Link
                        Terkait</div>
                    <div class="grid grid-cols-3 gap-10 mt-5">
                        <img src="link1.png" alt="" class="  border-4 border-black/10 shadow-md">
                        <img src="link2.jpeg" alt="" class=" border-4 border-black/10 shadow-md">
                        <img src="link3.jpeg" alt="" class=" border-4 border-black/10 shadow-md">
                    </div>
                    <div class="mt-10 w-full bg-[#214E6D] flex justify-center py-3 font-bold text-[#EFEFF0]">Statistik
                        Pengunjung</div>
                    <div class=" mt-5 w-full">
                        <ul class="list-image-checkmark space-y-2  text-black/90 font-semibold text-lg px-5   w-full">
                            <li class="w-full">
                                <div class="w-full flex justify-between">
                                    <p>Pengunjung</p>
                                    <p>1000</p>
                                </div>
                            </li>
                            <li class="w-full">
                                <div class="w-full flex justify-between">
                                    <p>Pengunjung</p>
                                    <p>1000</p>
                                </div>
                            </li>
                            <li class="w-full">
                                <div class="w-full flex justify-between">
                                    <p>Pengunjung</p>
                                    <p>1000</p>
                                </div>
                            </li>
                            <li class="w-full">
                                <div class="w-full flex justify-between">
                                    <p>Pengunjung</p>
                                    <p>1000</p>
                                </div>
                            </li>
                        </ul>
                    </div>
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
