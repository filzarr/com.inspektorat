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
                
                    <div class="lg:flex justify-between gap-5">
                        <div class=" lg:w-4/6">
                            <div class="flex justify-start">
                                <p class=" text-xl lg:text-4xl uppercase font-bold text-[#3E6E8B]">{{ $menu->judul }}</p>
                            </div>
                            <div class="mt-10">{!! $menu->link !!}</div>
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
