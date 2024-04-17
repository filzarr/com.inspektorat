<div class="mt-10 w-full bg-[#214E6D] flex justify-center py-3 font-bold text-[#EFEFF0]">Arsip Kegiatan</div>
<div class=" mt-5 w-full">
    <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
        @if ($data)
        @foreach ($data as $item)
        <li class="w-full">
            <button data-modal-target="1" data-modal-toggle="1"
                class=" hover:underline hover:underline-offset-4 hover:text-blue-500 duration-100"
                type="button">
                {{$item->judul}}
            </button>

            <!-- Main modal -->
            <div id="1" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative ">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4   rounded dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                {{$item->judul}}
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="1">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class=" rounded-b p-3">
                            <img src="/images/{{ $item->image }}" alt="this slowpoke moves"   class="w-full" />
                              
                        </div>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
        @endif
     
     

    </ul>
</div>
