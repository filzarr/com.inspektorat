@extends('layout.main')
@section('content')
    <section class="bg-cover  bg-[url('/tes.jpg')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Selamat
                Datang Di
                {{$irban}}</h1>

        </div>
    </section>


    <div class="w-full px-5 lg:px-28 mt-10">

        <div id="accordion-arrow-icon" data-accordion="open">
            @foreach ($data as $item)
                
            <h2 id="accordion-arrow-icon-heading-{{$item->id}}">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left bg-[#063A69] text-gray-100 border border-gray-400"
                    data-accordion-target="#accordion-arrow-icon-body-{{$item->id}}" aria-expanded="false"
                    aria-controls="accordion-arrow-icon-body-{{$item->id}}">
                    <span class="text-xl">{{$item->jenis}}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-arrow-icon-body-{{$item->id}}" class="hidden" aria-labelledby="accordion-arrow-icon-heading-{{$item->id}}">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <div class="mb-2 text-gray-500 dark:text-gray-400">{!! $item->deskripsi !!}</div>
                 
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <div class="w-full px-5 md:px-28 mt-20">
        <div class="flex justify-center text-center  font-semibold">
            <h1 class="text-4xl uppercase font-bold text-[#3E6E8B]">Struktur</h1>
        </div>
        <div class="flex justify-center mt-10">
            @if ($struktur)
                
            <img src="/images/{{$struktur->image}}" class="w-full h-96" alt="">
            @else
            <img src="/nopict.png" class="w-full h-96" alt="">
            @endif
        </div>
    </div>
    <div class="w-full px-5 md:px-28 mt-20">
        <div class="flex justify-start text-center  font-semibold">
            <h1 class="text-4xl uppercase font-bold text-[#3E6E8B]">Kegiatan</h1>
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
        <div class="flex justify-end mt-10">


            {{$agenda->links()}}

        </div>
    </div>
   
@endsection