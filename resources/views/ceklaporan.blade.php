@extends('layout.main')
@section('content')
    <form action="/cek-laporan" method="post">
        @csrf
        <div class="w-full px-28 mt-20 mb-20">
            <div class="flex justify-center text-center  font-semibold">
                <h1 class="text-4xl uppercase font-bold text-[#063A69]">Cek Laporan Anda</h1>
            </div>
            <div class=" w-1/3 mt-10">
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Masukkan Kode Laporan</label>
                    <input type="text" id="email" name="kode"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Kode Laporan" required>
                </div>
                <div class="mb-6">
                    <label for="countries"
                        class=" mt-2 block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Kategori</label>
                    <select id="countries" name="jenis"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="permohonan">Permohonan Informasi</option>
                        <option value="pelaporan">Pelaporan Informasi</option>
                        <option value="pungli">Saber Pungli</option>
                    </select>
                </div>
            </div>
            
            <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
    </form>
@endsection
