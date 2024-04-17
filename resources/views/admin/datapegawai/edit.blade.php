@extends('layout.admin')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>
    <section class="bg-white dark:bg-gray-900 mt-5 ">
        <div class="max-w-2xl  py-10 mx-auto lg:py-16">
            <h2 class="mb-4 text-3xl  font-bold text-gray-900 dark:text-white text-center">Edit Data Pegawai</h2>
            <form action="/admin/datapegawai/{{$data->id}}" method="POST" >
            @csrf
                @method('PATCH')
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="sm:col-span-2">
                        <label for="name"  class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Data Pegawai</label>
                        <input type="text" name="nama" id="name" value="{{$data->nama}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Nama Jabatan...">
                            @error('nama')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500 capitalize"><span class="">*Nama Jabatan Belum Diisi</p>
                            @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Jumlah</label>
                        <input type="text" name="jumlah" id="name" value="{{$data->jumlah}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Jumlah Pegawai...">
                            @error('jumlah')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500 capitalize"><span class="">*Jumlah Pegawai Belum Diisi</p>
                            @enderror
                            
                    </div>
                    
                <div class="flex items-center space-x-4">
                    <button type="submit"
                        class="text-white bg-[#063A69] hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                       Submit
                    </button>
              
                </div>
            </form>
        </div>
    </section>
@endsection
