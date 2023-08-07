@extends('layout.main')
@section('content')
    <div class="w-full px-28 mt-20 mb-20">
        <div class="flex justify-center text-center  font-semibold">
            <h1 class="text-4xl uppercase font-bold text-[#063A69]">Form Pengajuan Informasi</h1>
        </div>
        <div class=" w-2/3 mt-10">

            <form class="/laporan" method="post">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Nama
                        Lengkap</label>
                    <input type="text" id="email" name="nama"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Nama Lengkap...." required>
                </div>
                <div class="mb-6">
                    <label for="countries"
                        class=" mt-2 block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Kategori</label>
                    <select id="countries" name="kategori"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="perorangan">Perorangan</option>
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
                        placeholder="Alamat Lengkap...." required>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Nomor
                        Identitas (KTP/SIM/Paspor)</label>
                    <input type="text" name="identitas" id="email"
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
                    <label for="countries" class=" mt-2 block mb-2 text-sm font-semibold text-gray-700 dark:text-white">Cara
                        Memperoleh Informasi</label>
                    <select id="countries" name="metode"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="Melihat/Mendengar/Membaca/Mencatat">Melihat/Mendengar/Mencatat/Membaca</option>
                        <option value="Mendapat Salinan Informasi(SoftCopy/HardCopy)">Mendapat Salinan Informasi (SoftCopy/HardCopy)</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="description"
                        class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Rincian
                        Informasi Yang Dibutuhkan</label>
                    <input id="description" type="hidden" name="deskripsi">
                    <label for="message" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white"></label>
                    <trix-editor input="description"></trix-editor>

                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>

        </div>
    </div>
@endsection
