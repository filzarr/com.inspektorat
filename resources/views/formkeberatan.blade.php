@extends('layout.main')
@section('content')
    <div class="w-full px-5 lg:px-28 mt-20 mb-20">
        <div class="flex justify-center text-center  font-semibold">
            <h1 class="txt-xl lg:text-4xl uppercase font-bold text-[#063A69]">Form Pengajuan Informasi</h1>
        </div>
        <div class="w-full lg:w-1/3 mt-10">

            <form class="/formkeberatan" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Nama
                        Lengkap</label>
                    <input type="text" id="email" name="nama"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Nama.." required>
                </div>
                <div class="mb-6">
                    <label for="countries"
                        class=" mt-2 block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Kategori</label>
                    <select id="countries" name="kategori"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="perorangan" selected>Perorangan</option>
                        <option value="kelompok">Kelompok</option>
                        <option value="LSM/NGO">LSM/NGO</option>
                        <option value="instansi pemerintah">Instansi Pemerintahan</option>
                        <option value="lembaga pendikan">Lembaga Pendidikan</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="email"
                        class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Alamat</label>
                    <input type="text" id="email" name="alamat"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Alamat Lengkap" required>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Nomor
                        Identitas (KTP/SIM/Paspor)</label>
                    <input type="text" id="email" name="identitas"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Nomor Identitas" required>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Nomor
                        Telepon</label>
                    <input type="text" id="email" name="nohp"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Nomor Telepon" required>
                </div>
                <div class="mb-6">
                    <label for="email"
                        class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Email</label>
                    <input type="email" id="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="email@gmail.com" required>
                </div>

                <div class="mb-6">

                    <label for="message" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Tujuan
                        Mengajukan Keberatan</label>
                    <textarea id="message" rows="4" name="deskripsi"
                        class="block p-2.5 w-full text-sm text-gray-700 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Tujuan"></textarea>

                </div>
                <div class="mb-3">

                    <label for="message" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Alasan
                        Mengajukan Keberatan</label>


                </div>
                <div class="flex items-center mb-1">
                    <input id="default-radio-1" type="radio" value="Permohonan Ditolak" name="metode"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-1" 
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Permohonan Ditolak</label>
                </div>
                <div class="flex items-center mb-1">
                    <input checked id="default-radio-2" type="radio" value="Informasi Berkala Tidak Disediakan" name="metode"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Informasi
                        Berkala Tidak Disediakan</label>
                </div>
                <div class="flex items-center mb-1">
                    <input checked id="default-radio-2" type="radio" value="Permintaan Informasi Tidak Ditanggapi" name="metode"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Permintaan Informasi Tidak
                        Ditanggapi</label>
                </div>
                <div class="flex items-center mb-1">
                    <input checked id="default-radio-2" type="radio" value="Permintaan Informasi Ditanggapi Tidak Sesuai Dengan yang Diminta" name="metode"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Permintaan Informasi Ditanggapi
                        Tidak Sesuai Dengan yang Diminta</label>
                </div>
                <div class="flex items-center mb-1">
                    <input checked id="default-radio-2" type="radio" value="Permohonan Informasi Tidak Dipenuhi" name="metode"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Permohonan Informasi Tidak Dipenuhi</label>
                </div>
                <div class="flex items-center mb-1">
                    <input checked id="default-radio-2" type="radio" value="Biaya yang Dikenakan Tidak Wajar" name="metode"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">

                        Biaya yang Dikenakan Tidak Wajar</label>
                </div>
                <div class="flex items-center mb-6">
                    <input checked id="default-radio-2" type="radio" value="Informasi yang Disampaikan Melebihi Jangka Waktu yang Disediakan" name="metode"
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
