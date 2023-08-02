@extends('layout.admin')
@section('content')
    <section class="bg-gray-50 dark:bg-gray-900 ">
        <div class="mx-auto max-w-screen-xl  ">
            <!-- Start coding here -->
            <div class="w-full px-28 mt-20">
                <div class="flex justify-center text-center  font-semibold">
                    <h1 class="text-4xl uppercase font-bold text-white">Daftar Laporan</h1>
                </div>
        
                <a href="/admin/laporan/ppid">
                    <h2 class="mt-10">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium text-left bg-[#063A69] text-gray-100 border border-gray-400 ">
                            <span class="text-xl ">Laporan PPID</span>
                            <svg class="w-3 h-3  dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 8 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                            </svg>
                        </button>
                    </h2>
                </a>
        
                <a href="/admin/laporan/saberpungli">
                    <h2 class="mt-1" id="accordion-arrow-icon-heading-3 mt-10">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium text-left bg-[#063A69] text-gray-100 border border-gray-400 ">
                            <span class="text-xl ">Laporan Saber Pungli</span>
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
    </section>
@endsection
