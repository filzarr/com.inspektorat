@extends('layout.main')
@section('content')
    <div class="w-full px-28 mt-20 mb-20">
        <div class="flex justify-center text-center  font-semibold">
            <h1 class="text-4xl uppercase font-bold text-[#063A69]">Form Pengajuan Informasi</h1>
        </div>
        <div class=" w-1/3 mt-10">
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Masukkan Kode Laporan</label>
                <input type="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" required>
            </div>
        </div>
        <div class="mb-6">
            <label for="countries"
                class=" mt-2 block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Kategori</label>
            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Permohonan Informasi</option>
                <option>Pelaporan Informasi</option>
                <option>Saber Pungli</option>
            </select>
        </div>
    </div>
@endsection
