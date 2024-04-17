@extends('layout.main')
@section('content')
    <div class="w-full px-5 lg:px-28 mt-20 mb-20">
        <div class="flex justify-center text-center  font-semibold">
            <h1 class=" text-xl lg:text-4xl uppercase font-bold text-[#063A69]">Daftar {{ $jenis === "informasi-publik" ? "Informasi Publik" : "Informasi Berkala" }} </h1>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
            <table class="w-full  text-left text-gray-500 dark:text-gray-400">
                <thead class=" text-sm lg:text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Dibuat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$loop->iteration}}
                            </th>
                            <td class="px-6 py-4">
                                {{$item->judul}}
                            </td>
                            <td class="px-6 py-4">
                                {{$item->kategori}}
                            </td>
                            <td class="px-6 py-4">
                                {{$item->tanggal}}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{$item->link}}" target="_blank"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
