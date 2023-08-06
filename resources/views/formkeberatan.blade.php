@extends('layout.main')
@section('content')
    <div class="w-full px-28 mt-20 mb-20">
        <div class="flex justify-center text-center  font-semibold">
            <h1 class="text-4xl uppercase font-bold text-[#063A69]">Form Pengajuan Informasi</h1>
        </div>
        <div class=" w-1/3 mt-10">

            <form class="">
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Nama
                        Lengkap</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@flowbite.com" required>
                </div>
                <div class="mb-6">
                    <label for="countries"
                        class=" mt-2 block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Kategori</label>
                    <select id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Perorangan</option>
                        <option>Kelompok</option>
                        <option>LSM/NGO</option>
                        <option>Instansi Pemerintahan</option>
                        <option>Lembaga Pendidikan</option>
                        <option>Lainnya</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="email"
                        class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Alamat</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@flowbite.com" required>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Nomor
                        Identitas (KTP/SIM/Paspor)</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@flowbite.com" required>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Nomor
                        Telepon</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@flowbite.com" required>
                </div>
                <div class="mb-6">
                    <label for="email"
                        class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Email</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@flowbite.com" required>
                </div>

                <div class="mb-6">

                    <label for="message" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Tujuan
                        Mengajukan Keberatan</label>
                    <textarea id="message" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-700 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Leave a comment..."></textarea>

                </div>
                <div class="mb-3">

                    <label for="message" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Alasan
                        Mengajukan Keberatan</label>


                </div>
                <div class="flex items-center mb-1">
                    <input id="default-radio-1" type="radio" value="" name="default-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-1"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Permohonan Ditolak</label>
                </div>
                <div class="flex items-center mb-1">
                    <input checked id="default-radio-2" type="radio" value="" name="default-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Informasi
                        Berkala Tidak Disediakan</label>
                </div>
                <div class="flex items-center mb-1">
                    <input checked id="default-radio-2" type="radio" value="" name="default-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Permintaan Informasi Tidak
                        Ditanggapi</label>
                </div>
                <div class="flex items-center mb-1">
                    <input checked id="default-radio-2" type="radio" value="" name="default-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Permintaan Informasi Ditanggapi
                        Tidak Sesuai Dengan yang Diminta</label>
                </div>
                <div class="flex items-center mb-1">
                    <input checked id="default-radio-2" type="radio" value="" name="default-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Permohonan Informasi Tidak Dipenuhi</label>
                </div>
                <div class="flex items-center mb-1">
                    <input checked id="default-radio-2" type="radio" value="" name="default-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">

                        Biaya yang Dikenakan Tidak Wajar</label>
                </div>
                <div class="flex items-center mb-6">
                    <input checked id="default-radio-2" type="radio" value="" name="default-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">


                        Informasi yang Disampaikan Melebihi Jangka Waktu yang Disediakan</label>
                </div>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>

        </div>
    </div>
@endsection
