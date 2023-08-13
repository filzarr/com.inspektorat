@extends('layout.admin')
@section('content')
<section class="bg-gray-50 dark:bg-gray-900 ">
    <div class="mx-auto max-w-screen-xl  ">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">
                    <p class="text-2xl font-semibold text-[#063A69] capitalize">Tampilan Saber Pungli</p>
                </div>
             
            </div>
            <div class="overflow-x-auto mt-3">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3" width="30%">Judul</th>
                            <th scope="col" class="px-4 py-3">Deskripsi</th>
                            <th scope="col" class="px-4 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      
                        @foreach ($data as $item)
                            
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white capitalize">{{$item->jenis}}</th>
                                @if ($item->jenis == "struktur")
                                <td class="px-4 py-3"><img src="/images/{{$item->image}}" class="w-28 h-28" alt=""></td>
                                @else

                                <td class="px-4 py-3"><a href="" >{!!$item->deskripsi!!}</a></td>
                                @endif
                            <td class="px-4 py-3 flex items-center justify-end">
                                <button id="{{$item->id}}" data-dropdown-toggle="{{$item->jenis}}"
                                    class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                    type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                                <div id="{{$item->jenis}}"
                                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="{{$item->id}}">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tampil</a>
                                        </li>
                                        <li>
                                            <a href="/admin/saberpungli/{{$item->id}}/edit"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                    </ul>
                                 
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
    
     
        </div>
    </div>
</section>
@endsection