@extends('layout.main')
@section('content')
    <style>
        body {
            background-color: rgb(239, 239, 239) !important;
        }
    </style>
    <div class="w-full mt-5 px-5 lg:px-10 mb-10">
        <div class="py-10 bg-white px-5 lg:px-10 border-2 rounded-lg border-gray-200">
            <div class="bg-white">
                @foreach ($berita as $item)
                    <div class="lg:flex justify-between gap-5">
                        <div class=" lg:w-4/6">
                            <div class="flex justify-start">
                                <p class=" text-xl lg:text-4xl uppercase font-bold text-[#3E6E8B]">{{ $item->judul }}</p>
                            </div>
                            <div class="grid grid-cols-2 lg:flex gap-3 lg:gap-5 mt-3 text-black/70 font-semibold">
                                <div class="flex  items-center text-sm gap-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                    <p class="max-md:text-xs">
                                        {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</p>
                                </div>
                                <div class="flex  items-center text-sm gap-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                    </svg>
                                    <p class="max-md:text-xs">Admin</p>
                                </div>
                                <div class="flex  items-center text-sm gap-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                        <path
                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                    </svg>
                                    <p class="max-md:text-xs">{{ $item->views }} View</p>
                                </div>
                          
                                @if (\Request::is('berita/*'))
                                <div class="flex  items-center text-sm gap-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                                        <path
                                            d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        <path
                                            d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                                    </svg>
                                    <p class="max-md:text-xs">{{$item->comments->count()}} Comment</p>
                                </div>
                                @endif
                            </div>
                            <div class="">
                                <div class=" gap-10 mt-10">
                                    <img src="/images/{{ $item->image }}" class=" w-[50rem]   border border-black/10"
                                        alt="">
                                    <div class=" grid justify-stretch mt-10">
                                        <p class=" capitalize  font-semibold break-words text-black/70">
                                            {!! $item->deskripsi !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-2/6  lg:px-10 max-md:hidden">
                            <div class="w-full   border-2 border-black/5 bg-[#EFEFF0] px-5 py-3 rounded-md">
                                <div
                                    class="w-full bg-[#214E6D] flex justify-center max-md:px-3 py-3 font-bold text-[#EFEFF0]">
                                    Inpektur
                                    Inspektorat Sumatera Utara</div>
                                <div class=""><img src="/kepala.png" class=" h-60 mt-3 w-full" alt=""></div>
                               <x-terkait></x-terkait>
                                <x-statistik></x-statistik>
                                <div class="mt-10 w-full bg-[#214E6D] flex justify-center py-3 font-bold text-[#EFEFF0]">
                                    Newslatter
                                </div>
                                <div class=" mt-5 w-full">
                                    <p class=" font-semibold text-black/50 text-sm">Subscribe untuk mendapatkan berita
                                        terbaru dari
                                        kami</p>
                                    <input type="text"
                                        class="w-full border-black/30 shadow-lg rounded-sm placeholder:text-center mt-3 h-12"
                                        placeholder="Masukkan email ">
                                    <button class=" bg-blue-500 text-white w-full mt-5 py-3 font-semibold">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <x-beritalainnya></x-beritalainnya>



            @if (\Request::is('berita/*'))
                
            <div class="bg-white">
                <div class="flex justify-start">
                    <p class=" text-xl lg:text-4xl uppercase font-bold text-[#3E6E8B] mb-10">Comment</p>
                </div>
                <div class="grid auto-cols-auto gap-3 lg:w-1/2">
                    @foreach ($item->comments as $i)
                        
             
                    <article>
                        <div class="flex items-center mb-4 space-x-4 ">
                            <div class="space-y-1 font-medium dark:text-white">
                                <p>{{$i->name}}</p>
                            </div>
                        </div>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">{{$i->comment}}</p>
                    </article>
                    @endforeach
                </div>
                <div class="lg:w-1/2 mt-10">
                    <form action="/comment/{{$item->id}}" method="post">
                        @csrf
                        <div class="lg:flex gap-5 w-full">
                            <input type="text" name="name" class="border border-black/30 lg:w-2/6" placeholder="Nama">
                            <input type="text" name="email" class="border-black/30 border max-md:mt-5 lg:w-4/6" placeholder="Email">
                        </div>
                        <div class="">
                            <input type="text" name="comment" class=" h-80 mt-10 w-full placeholder:text-center"
                                placeholder="Masukkan Komen Anda">
                        </div>
                        <div class="w-full">
                            <button type="submit" class=" bg-blue-500 py-2 px-2 w-full mt-5 font-semibold text-white">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
