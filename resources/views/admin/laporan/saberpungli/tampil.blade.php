@extends('layout.admin')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>
    <section class="bg-white dark:bg-gray-900 mt-5 ">
        <div class="max-w-2xl  py-10 mx-auto lg:py-16">
            <h2 class="mb-4 text-3xl  font-bold text-gray-900 dark:text-white text-center">Laporan</h2>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Nama
                    Lengkap</label>
                <input type="text" id="email" name="nama" disabled value="{{$data->nama}}"
                    class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nama Lengkap...." required>
            </div>
          
            <div class="mb-6">
                <label for="email"
                    class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Alamat</label>
                <input type="text" id="email" name="alamat" disabled value="{{$data->alamat}}"
                    class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Alamat Lengkap...." required>
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Nomor
                    Identitas (KTP/SIM/Paspor)</label>
                <input type="text" name="identitas" id="email" disabled value="{{$data->identitas}}"
                    class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nomor Identitas" required>
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Nomor
                    Telepon</label>
                <input type="text" id="email" name="nohp" disabled value="{{$data->nohp}}"
                    class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nomor Telepon" required>
            </div>
            <div class="mb-6">
                <label for="email"
                    class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Email</label>
                <input type="email" id="email" name="email" disabled value="{{$data->email}}"
                    class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="email@gmail.com" required>
            </div>
     
            <div class="mb-6">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                <div id="message" rows="4" disabled  
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write your thoughts here...">{!! $data->deskripsi !!}</div>
      

            </div>
            @if (is_null($data->balasan))
            <a href="/admin/laporan/saberpungli/{{$data->id}}/balasan"
                class="flex gap-2 justify-center align-middle items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg class="w-3 h-3 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 17 8 2L9 1 1 19l8-2Zm0 0V9"/>
                  </svg> Balas</a>
            @endif
        
     
        </div>
    </section>
@endsection
