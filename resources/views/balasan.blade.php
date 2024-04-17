@extends('layout.main')
@section('content')
    <div class="w-full px-5 lg:px-28 mt-20 mb-20">
        <div class="flex justify-center text-center  font-semibold">
            <h1 class="text-4xl uppercase font-bold text-[#063A69]">Cek Laporan</h1>
        </div>
        <div class="lg:flex w-full gap-16 mt-10">
            <div class=" lg:w-2/4 ">
                <div class=" w-full ">
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Kode
                            Laporan</label>
                        <input type="text" id="email" name="kode" 
                            class="bg-gray-50 border  border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{$data->id}}" disabled>
                    </div>
                </div>
                <form class="/laporan" method="post">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Nama
                            Lengkap</label>
                        <input type="text" id="email" name="nama" value="{{$data->nama}}"
                            class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama Lengkap...." required>
                    </div>
                    @if ($jenis == 'permohonan')
                    <div class="mb-6">
                        <label for="countries" class=" mt-2 block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Cara
                            Memperoleh Informasi</label>
                        <select id="countries" name="metode" disabled
                            class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="{{$data->metode}}" selected>{{$data->metode}}
                            </option>
                        </select>
                    </div>
                        
                    @elseif($jenis == 'pelaporan')
                    <div class="mb-6">
                        <label for="countries" class=" mt-2 block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Alasan Pelaporan</label>
                        <select id="countries" name="metode" disabled
                            class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="{{$data->metode}}" selected>{{$data->metode}}
                            </option>
                        </select>
                    </div>
                    @else
                    @endif
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <div id="message" rows="4" disabled
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write your thoughts here...">{!! $data->deskripsi !!}</div>
                    </div>
               </form>
            </div>
            @if (is_null($data->balasan))
                <div class="w-full h-full">
                    <div class="flex justify-center align-middle text-center items-center">
                        <p>Laporan Anda Saat Ini Sedang Diproses Cek Secara Berkala Laporan Anda Untuk Melihat Balasan</p>
                    </div>
                </div>
            @else
           
           
            <div class="w-2/4">
                <div class="mb-6">
                    <label for="message" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Balasan</label>
                    <div id="message" rows="4" disabled
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write your thoughts here...">{!!$data->balasan!!}</div>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
